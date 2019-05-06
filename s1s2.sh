#!/bin/sh 
###### S1 ######
mkdir s1
cd s1
curl -fLo "result.pdf" "https://ktu.edu.in/eu/att/attachments.htm?download=file&id=G9JU3qvNaL1Bbd97S4x8QAIqBvHCL9A4lNbTXzgGtuc%3D" > /dev/null
pdftotext -nopgbrk result.pdf
grep --no-group-separator -A3 'CHN17CS' result.txt | tr '\n' ' ' | sed 's/\ CHN/\nCHN/g' > result_per_line.txt
cd ..


###### S2 ######
mkdir s2
cd s2
curl -fLo "result.pdf" "https://ktu.edu.in/eu/att/attachments.htm?download=file&id=M0BUnlNAAnhrVifaH56UXPBWJkDw2vvqDcL9YR03Q0s%3D" > /dev/null
pdftotext -nopgbrk result.pdf
grep --no-group-separator -A3 'CHN17CS' result.txt | tr '\n' ' ' | sed 's/\ CHN/\nCHN/g' > result_per_line.txt
cd ..

##COMPILE COMPUTE_GPA
cc compute_gpa
./compute_gpa
chmod +x compute_gpa

printf  "SGPA OF S1\n\n" > s1/s1_result.txt
join student_details/s4d_student_registor_number_and_name.txt s1/result_one_per_line.txt | ./compute_gpa/compute_gpa >> s1/s1_result.txt
printf  "SGPA OF S2\n\n" > s2/s2_result.txt
join student_details/s4d_student_registor_number_and_name.txt s2/result_one_per_line.txt | ./compute_gpa/compute_gpa >> s2/s2_result.txt


###### CGPA ######
mkdir cgpa
cd "cgpa"
join ../s1/result_per_line.txt ../s2/result_per_line.txt > s1_s2_with_reg.txt
join ../student_details/s4d_student_registor_number_and_name.txt s1_s2_with_reg.txt | ../compute_gpa/compute_gpa > cgpa.txt
