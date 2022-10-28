<?php
#!/bin/bash
n1=45
  n2=45
  for ((i=1; i<=2; i++)); do
    for j in "ls output-$i-*`; do
        echo "$j"
 
        metab=$(cat $j|grep EndBuffer|awk '{sum+=$2} END { print sum/120}') (line15)
        num= $num + $metab   (line16)
    done
    echo "$num"
 done
