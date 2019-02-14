pdftotext -nopgbrk result.pdf
grep --no-group-separator -A3 'CHN17CS' result.txt > result_CS_Only.txt
tr '\n' ' ' < result_CS_Only.txt > result_no_newline.txt
sed 's/\ CHN/\nCHN/g' result_no_newline.txt > result.txt
