<?php 
  $services_json = json_decode(getenv("VCAP_SERVICES"),true);
  var_dump($services_json);