<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAADIAgAAlMwlmz5PDY/IkR6Z/nXUvGBZ/wp4tPOlUh+V+j1MVy8X3TScHf0CQEBJMGo8468JUUwQEdk/9iyB2VOBaZboylsv4uVjdHHdvTUlf3Af+rOEyPm8rSYeazVxYifyjYfw48iZEu1Xyh5YjU3UKucqavztO9GThckbECPFbcg92vBa4jf4iit4ipZxk1JiUKqtnI3rQr5w6wxZ6NjClYaJH9SweYfnG4dpo5BLMo9QPcv+W4Bmh5Eyb9X1FG+NBJ5t4re+Yv+REatcyiL1iJVgemdvPET+wqkMiQJSj5dS3s9ht104xIQFWu7ucPGpr4rDD/zkBxZx7gqaz+IiRG6cwik+g4RwQLFRVznHTPbTDBGS8Qy1QAsEHa5LmuQSfLif0dTDOq/OWCOnygPqiVjtFiKo7zMJiHeaNiqDTxWzE3rWKqpubnbOE7S89fCeNbnbNY1q88HwzAvi4G954cUXmjHxzhrIzxqs3CkjB64n1ijni6mi50ItCAIQZAMkEI1fpt8A8n7+2l7rMzKWuP1LAgA3P/PyVCXGKHZVh0uTo/ZiJwPWi4WAJkJ8eX9xUo83QdIXM92YaPHxNaUasfEQlpwn0SEunsEnYu3+3yEtbNP1RgBaDlnNqG15bQ617fgF9kScl9QpJTkOaZgFBN28mC6mzolSKC1RNgMMzodpfND9vdwKmJg62PfdjuVaPhT3NBeT/kTMmEIbIk1flNsi3OIJBpmISREshRM+Arl1tMdohW7f1pNcJTWYNAlIZ3dI375ji4HvKzcct2Nwn213Ytgs6V/vTb0DzhqS2nXNYZ65gVouN0YTnwcvSzaIbB8W63m8+/2fRPjWctUqB7hTfOBDs5rJSCCTcOSTacUpyeWgXWg5+6/ugoUE88nE56vNBXdvxStu7U4ZnOIG9foXP3ek+jNCeJ55xXIRuCyzSyWQlY2kB9Fz2AAAAAA=');
