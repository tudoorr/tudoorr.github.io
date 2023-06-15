<?php
  $url = 'https://webhook.site/ca0e24bf-ffeb-464e-90da-84193ee5ca40?ip=' . $_SERVER["REMOTE_ADDR"];
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'GET',
    )
  );
  file_get_contents($url, false, stream_context_create($options));
?>
