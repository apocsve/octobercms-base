<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAABgAwAAVaKgTDFZMNhxUf73f6pT8aZWj36pf1S+DBjbxHwfJOqAoV5Pnlb/+LL7dO5GTu3FEUWaiVj33E9WUKZDc/ESbspam2g33VrJscNZwmekwdzeEzSnVPnIiWcRTGDF1I2NXFxvi2WHCCAGzeXxdPBUWg3Bo5Ac7u8XlApV8XVb9nkOAp/OOpj7AR3GzWyyD6YuH1jHQt1r9YxCRL4dfsr12gDZK8xhAjTXPxplUPoXfG9Xo9FU1dtsC0L91El7qg7Rb36doxIra2L2SUw3eLcOw3EKdsHhDZIBiEZ/sDB4jrKRv6665btL9bE+GjcHOaPEzUaJcd7EGuaCFQ8Y2BV654BPsbAFvdUtjPNKNZYLyv2HsBxvEmRHm0DZ4zJ8EsNb3udLM+/7kACkOFQ0Il3ySqBhJLTvbwxmmPKphzO954cd1xLTTX4iWGPkoFpIS6CzZwdknD7j9UBq+b6xCZvJjGLTbg4edJ3f6fg0/GvFKM795hrTnK4T//lv1buwjlbUdDjG5Ny3zlMj7luytOR5AQdX6gfnTtqrXV2IDCyeOnfZRrE9Plh1o7TmqiH8fAEZRcImzqvxSQNcVyDiLSokt9VT6+q832lZ4mt8x7qAOgUDdZ6HIk+5GE0uXmamlioDR1LCKEKKmm7gFznhrCAtx41Spvm1NiML2OL+z9D6A0sjShbVRZA12NZnCgN+UhELMACMnXwlcOQeEbNNLA3pdBbwx/v9XKJ2iIBVwYGzJdXVoggKKBL7VzM366kY52VAfHIjsYWzO3wHCQ60Ozeyb9sGa1w3Q3zHYPHqoGAR8UzU9KfZw/HysRRggzteZ4dHxhCQ6DZliLKeWErwPdxtgYeSbWR0JHxxERPLQ2InDI2IY9jvH7I/IkbHo2YWuMclJuBantisN7OvJ2Jnj+yq76+LDFNz9wSkbLh1rJ8pY4GmNN1At6hNBOCqCgcjKW+9tWsNNMUg7E2CcJ7tRWi84Yj/TnTomA+yQQPaADXtnoe2jIiM12XQeDR/0HCSBqkP2YzhoI+1P5dH/3ze3snVZVEqI4qRUiLAzAEvI7Vw+SbboG968/FSSZzwWtT2R/MOvaTecwAZbX8SlKAHoE9/NkRjonoVApx3v+ShKa5D8noT0EbBdho15oJ505dmTCxpAAAAAA==');