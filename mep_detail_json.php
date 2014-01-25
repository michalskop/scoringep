<?php
  //get mep data
  echo file_get_contents ( 'http://192.168.90.40:8888/euparlameter/ep11/json_abg_detail.php?id='.$_GET['mepid'].'&v_dbids='.$_GET['v_dbids']);
  
?>
