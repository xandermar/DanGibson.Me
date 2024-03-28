<?php

function msg($m){
  $msgs = array(
    1 => array('type'=>'success','msg'=>'Resume sent successfully!'),
    2 => array('type'=>'danger','msg'=>'An error occured'),
    3 => array('type'=>'success','msg'=>'Your request was sent successfully. Once approved, a resume will be sent. Thanks!!'),
    4 => array('type'=>'success','msg'=>'Your message was sent successfully. It will be reviewed as soon as possible. Thanks!!'),
  );
  $msg_code = '<div class="mt-5 alert alert-'.$msgs[$m]['type'].'" role="alert">'.$msgs[$m]['msg'].'</div>';
  return $m && array_key_exists($m,$msgs) ? $msg_code : false;
}