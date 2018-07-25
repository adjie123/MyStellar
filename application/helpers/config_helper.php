<?php 
function get_api($url)
{
  $base_url     = $url;
  $result   = file_get_contents($url);
  $show         = json_decode($result);
  return $show;
}
 ?>