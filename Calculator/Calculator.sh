#!/usr/bin/bash
echo -e 'Simple Calculator \n'
echo 'Enter two numbers:'
read a
read b
echo 'Menu:'
echo '1.Addition'
echo '2.Subtraction'
echo '3.Multiplication'
echo '4.Division'
read ch
case $ch in
  1)res=`echo $a + $b | bc` 
  ;; 
    2)res=`echo $a - $b | bc` 
  ;; 
    3)res=`echo  $a \* $b | bc` 
  ;; 
    4)res=`echo "scale=2; $a / $b" | bc` 
  ;; 
esac
echo "Result :$res"
echo "Do you wanna continue?(Yes/No)"
read resp
case "$resp" in
  "Yes" ) bash Add.sh
;;
  "No"  ) exit 1
;;
esac