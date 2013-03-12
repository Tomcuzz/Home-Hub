#!/bin/bash
date=$(date +%d/%m/%H\ %k:%M:%S)
arp-scan -l | awk 'NR > 2' | head -n -3 | awk '{print $1, $2}' | \
while read ips mac; do
mysql --host=127.0.0.1 --user=status --password=status 734status << EOF
insert into network (Date,IPAddress,MACAddress) values('$date','$ips','$mac');
EOF
done 
