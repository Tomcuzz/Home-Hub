#!/bin/bash
date=$(date +%d/%m/%H\ %k:%M:%S)
arp=$(arp-scan -l)
numhosts=$(echo "$arp" | awk 'NR > 2' | head -n -3 | wc -l)
#########
mysql --host=127.0.0.1 --user=status --password=status 734status << EOF
DELETE FROM current WHERE 1;
EOF
#########
echo "$arp" | awk 'NR > 2' | head -n -3 | awk '{print $1, $2, $3}' | sed 's/[,]//g' | \
#########
while read IP mac des; do
mysql --host=127.0.0.1 --user=status --password=status 734status << EOF
insert into network (Date,IP,MACAddress,Description) values('$date', '$IP', '$mac', '$des') on duplicate key update MACAddress = '$mac';
insert into current (Date,IP,MACAddress,Description) values('$date', '$IP', '$mac', '$des') on duplicate key update MACAddress = '$mac';
EOF
done
#########
echo "$numhosts" >> /var/www/default/files/hostc.txt
