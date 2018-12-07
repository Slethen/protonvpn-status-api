<?php

if (strpos(file_get_contents('https://api.protonmail.ch/vpn/servers') , $_SERVER['REMOTE_ADDR']) !== false)
	{
	echo 'true';
	}
  else
	{
	echo "false";
	}

?>