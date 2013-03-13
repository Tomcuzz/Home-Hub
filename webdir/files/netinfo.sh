arp=$(arp-scan -l | awk 'NR > 2' | head -n -3)
organise=$(echo "$arp" | sed 's/	/\n/g')
numhosts=$(echo "$arp" | wc -l)
echo "$numhosts" >> /var/www/default/files/hostc.txt
echo "$organise" > /var/www/default/files/net.txt
