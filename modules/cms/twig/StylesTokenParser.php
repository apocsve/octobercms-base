<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAACgAwAA22j2+9d6FxWgPuhAZ5XUn0UsrwYT3ubeIox1/jJx6V7yWg8MCammzlEj4K9WRI0d4aJhSl9ahn/Y10JU+/XA01ACnbEoH8mtpy/DGj3G1O65wQxP8Pnjyp4QAet+MfhxzpXT5CvzlNWk1YGSTYcdhNBZuNlK6iNMGwIDIyz4gs8ccstpfTAgCPBRQRGtHkBzlCoAMMsiOLWSNi/ViHgR3YS/CHqqo0kVY3hznfDtAlxHVpbGPFQIkS1XtEatIjIPVz7qD/H40fE20bpzuWM7QOrhLuBla3ezJisuYHShsAltrPnJVCqqgR5z81ahZb1sIUfO9AI/lHPdVCQIgrgVCNSZ6M4S8b1QhVN0izWMfuTsIfOyP4uJS+mdhMUlvJ6vyln6hKxnNtibnoH8/+m9lfGFIOlgZm/LZmwba2kWGY5DEqnX3i/BYDsWt7J/dXXJ0/8tyClYTlmEUgKkl52Ez4AS3hmhkhPv5ilKE5jx02N0xKLl4+PWvOfxdKeNyRKGKf8FA5ZJgVxPAyCRDCpqyg28RIcE6kfvhXuqP7s7Hvtt4Sgrqrh/aLgOFyrdZKZwpaBDlZcml+So9c+bbOTloUT+SKbp3qsYDwpIlQrBGO/DFPdoBlkshmqj3f42xBzwn2A+Zo2B8I0+KaKjd++G7AgsnNqa//TEChuPrvkEB2MfwwTRhaXuZo5q4R4thhTCF535WD1OqtEjqfZCNrronkC8B/Oo9f68xHmIuEVnYz9AQcKbsA4wNq/7nqwAqPFSPrKgqrCegt96sYglqLer/pVQzIpQW5FADfIH4QuiSQ/jmhmUGWG6NlhldGCN58wdB6g9RKXF9wIqwI6kx3vYvKogBPC3AyN8uy0mdz+YG90arp5ubabbnru68G6RX6ooxkg/QvNEIVndi6xZk/Dl1u0gkAW/EH6TgLWdk7kLbeKiQSPWS77n6sUjC987kPlKFk1SzSUvcvpzWq1ZZ7dQbFtexOcRNiaSPe8/ZMumQlHZm8ree2GE3ca6vtKUYHvoigV58xg/RWHF9jHfuNS9BYgPuMeg5aXtCyqMBpWUv6rjxaN9+QVnabAj0HxLp/ZEdYuoZqUYasYS1LkJKEC66cN+4RLYYxKHbj9CpZ/2T44hhxRPzl3pWhzHpfMG/K7SKap+exLpHPXdBY9QvgEgf1Rhw+5vCbDQtV1mgpMO4kzf3RJgAOGUTsqsfMQOVrxTKT+qWA9syrTG6e2C5say5wAAAAA=');