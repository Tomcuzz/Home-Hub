#1/bin/sh
url="http://dictionary.reference.com/wordoftheday/wotd.rss"
curl --silent "$url" | grep -E '(title>|description>)' | awk 'NR==6' | sed -e 's/<title>//' -e 's/<\/title>//' -e 's/<description>//' -e 's/<\/description>//'