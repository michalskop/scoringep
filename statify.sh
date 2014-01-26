#!/bin/bash
for i in $(seq 1000)
do
  curl "http://localhost:8888/euparlameter/ep11/json_abg_detail.php?id=$i&v_dbids=4995,5004,5276,4096,3939,3708,3082,2636,2340,2189,220" -o "static/mep$i.json"
done
