#!/bin/bash
for i in $(seq 1000)
do
  curl "http://localhost:8888/euparlameter/ep11/json_abg_detail.php?id=$i&v_dbids=2039,2041,2043,5428" -o "static/mep$i.json"
done
