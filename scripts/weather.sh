#/bin/bash
#Weather script for OSX created by mmaton

#Configuration#
#Your name
USER=All
#Your myweather2.com API Key (need to sign up for free to obtain one!)
WAPIKEY=VNTokHBulj
#Your UK Postcode (No Spaces please!)
POSTCODE=B47XE
#########DO NOT EDIT BELOW THIS#########
timeofday=$(date +"%H")
if [ $timeofday -ge 0 -a $timeofday -lt 12 ]
then
  title="This Morning's"
elif [ $timeofday -ge 12 -a $timeofday -lt 18 ]
then
  title="This Afternoon's"
else
  title="This Evening's"
fi

curl --silent "http://www.myweather2.com/developer/forecast.ashx?uac="$WAPIKEY"&output=json&query="$POSTCODE"" > /tmp/weatherjson.txt

temp=`cat /tmp/weatherjson.txt | python -mjson.tool | grep temp | awk '{ print $2; exit }' | sed 's/[",]//g'`
forecast=`cat /tmp/weatherjson.txt | python -mjson.tool | grep weather_text | awk 'NR==2' | sed 's/"weather_text"://' | sed 's/[",]//g' | awk '{sub(/^[ \t]+/,  "")};1' | awk '{ sub(/[ \t]+$/, ""); print }'`
nightmin=`cat /tmp/weatherjson.txt | python -mjson.tool | grep night_min_temp | awk '{ print $2; exit }' | sed 's/[",]//g'`
daymax=`cat /tmp/weatherjson.txt | python -mjson.tool | grep day_max_temp | awk '{ print $2; exit }' | sed 's/[",]//g'`
windspeed=`cat /tmp/weatherjson.txt | python -mjson.tool | grep speed | awk 'NR==2' | awk '{ print $2; exit }' | sed 's/[",]//g'`


echo "$temp
$daymax
$nightmin
$forecast
$windspeed" > /var/www/default/files/weather.txt

