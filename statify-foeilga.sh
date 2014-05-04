#!/bin/bash
for i in $(seq 1000)
do
  curl "http://localhost:8888/euparlameter/ep11/json_abg_detail.php?id=$i&v_dbids=3485,3301,5327,2171,2691,5579,5297" -o "static_foeilga/mep$i.json"
done
