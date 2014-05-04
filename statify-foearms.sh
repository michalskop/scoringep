#!/bin/bash
for i in $(seq 1000)
do
  curl "http://localhost:8888/euparlameter/ep11/json_abg_detail.php?id=$i&v_dbids=5249,4462,5216,5217,4662,44475227,5243,4458,4657,4661" -o "static_foearms/mep$i.json"
done
