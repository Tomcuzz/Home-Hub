url='http://feeds.bbci.co.uk/news/rss.xml'
	curl --silent "$url" | grep -E '(title>|description>)' | awk 'NR>3' | awk 'NR<23' | sed -e 's/      <title>//' -e 's/<title>//' -e 's/<\/title>//' -e 's/    <description>//' -e 's/<description>//' -e 's/<\/description>/\
	/'