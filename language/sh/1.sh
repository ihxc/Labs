A='2016研发CPU'
B='2016CPU研发'
echo -e "$A"\\n"$B" | sed -r 'N;:a;s/(.+)(.*\n.*)\1/\2/;ta;/^\n$/{s/.*/Y/;q};s/.*/N/'
