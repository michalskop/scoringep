#!/bin/bash
for i in $(seq 1000)
do
  curl "http://localhost:8888/euparlameter/ep11/json_abg_detail.php?id=$i&v_dbids=3358,3361,4787,4788,4792,5689,5747,5748" -o "static_foefrack/mep$i.json"
done
