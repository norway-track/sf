<?php
function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function get_ua()
{
   $ua = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($ua, "Firefox") !== false) $browser = "Firefox";
  elseif (strpos($ua, "Opera") !== false) $browser = "Opera";
  elseif (strpos($ua, "Chrome") !== false) $browser = "Chrome";
  elseif (strpos($ua, "MSIE") !== false) $browser = "Internet Explorer";
  elseif (strpos($ua, "Safari") !== false) $browser = "Safari";
  else $browser = "Неизвестный";
  echo "Ваш браузер: $browser";
}

?>