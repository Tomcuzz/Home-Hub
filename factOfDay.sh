#! /bin/bash
#Writen By Thomas Cousin
#No responsabilities are taken for any damages or harm caused by this scrip, all risks are taken on by the user.

echo &(curl --silent "https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=randomfactaday" | grep "<title>" | sed -e 's/    <title>randomfactaday: //g' | sed -e 's/<\/title>//g' | sed -e 's/&quot;/"/g' | sed -e 's/    <title>Twitter \/ randomfactaday//g' | awk 'NR!=1') > /tmp/factOfTheDay.txt
