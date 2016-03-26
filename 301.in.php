<?php
if($_SERVER["HTTP_HOST"] == "miu4.com")
{
header("HTTP/1.1 301 Moved Permanently");
header("Location:http://www.miu4.com"."");
}
?>