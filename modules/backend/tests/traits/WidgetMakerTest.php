<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAAAwBQAAY0meASYvkdtMF8T38bWPUfdlctwe2YfvgkRFS5+CCreRkWk+C3k413GwN0A/cr6TskXYdXbHXQg72SP6CAXCzNxt9822U78gj/pDnmY5+XKl6pXxBOE5rsAsuQp5U5aGjcQG4bZ9k+MHZrsrckMfHddSPdl6w7em1tjduWQwdKWxMYi4MkpjcxEP+MEWdjlZLCtF72O8HNflZlIxPHbSPua0a0B4OH7ot5issvnXnH/IguMyUa6AeOtojcAWL4VheWtXL2ZsCIY+/wn0Z8sjoTRhFDJQ+spITUCoXtBUTtx3WnYGf//B/zu+mJ+m//wmSf0OuYSo9m1b/9ylYlqtuUkXIEKNbosI5gHmyi28QqeDPWwH69+qIHd3ZlcaNyTpHoEOFIqg+VSjxPZ+1mgC83+A1+gjxW83gVAcdsGrHStd4x1J87tD2YvFAeHyUZ5LYzKgWO8elfkED8DN91yPHUANveZWg+3tcNkVwC5c46OwsEf1ubihMDrXT1fwaJ9rt8DPKKzAntVWY61XOY2d0S8gfF12OrkOSW/trlUcCYk6cxeIxsh0kW4yz4Oj7muMcmiAQtctwqeTEcFUSQgZnmzI2I8oOWpM2g3o+Dwd7zh1h7vYWDW9cBcx2GyE8bV4ZrdKnMx0k+dj26UNw1omf2W5S1N0efTt/40uC1X+DAENOcaMDGNkvr1B1XhybQPXkexMcVHTNCFl0MASfSUOH6KNoZjC9p8JUDPYLdp1LW6WuQpd6JfwruSNP2PV6C0K0msLKiZJjxDJqQM4wXxDVXvDlNKDcpcB9d2QWLTOkvyoeEf1iqWN7ivtsXMzHDHgGaJeK7chty5z6Mseyrj8Q30hcT7KISNsWVl9uWrJVqvexJ72HoC0rGlp5a4LE/WFbgCCpEGTPOMUq1EgGDG5OKVQ4U1/oe6K3q3gqotdeAz+LUOSUoHMVt50+NIhtKHHM3RsUMk1K811GcMxkE8P4q50PFb4cyfDIVcf45Ho1xtXUR9AJyIoD1RW1bKVcluaLnES6OSmPqZnooneDqJYMNWNATnvARZ59ERYXTBeuEYO4m5wQ6qgVXAvtDMxpbFrTWOH9Xurg/GEB8xTLvgT/XkQii/kN6Paqx9BBuT2dUFIiRb4fjb/xVVsdAvb0vINIETSxtggz1+9sL43dTdN66xrskJ9DhSN2X1Zo71eSOkIwqkM2+6yF54BLCAHCjnfLPTtZ4DBcKdwgzC4z/Spzw5RyIBQdhFZXe4FROmFJ/b4bfKT3kL+cG52vAE8vqRJiuMFRccbaHuJqNJhKJ6Z+hVOGU4ZXfHcl8vF/e9/ytgjqwoUg7SdxTJkBwbeg0kUtZUIeWSM1TctB72Lq+pFkMk4ewTdR6+uKDWLe9AVAgt7ATKIlxuIL3bgwMz/L+bLCdKt6tL7Zc8Es3205Ps8bLoFBQhQTc2Pk6mqX3Gpxd8/tzpEzbDkEIQgQd+3NF1vQyNNqzNLqaQ5F6Bnqg7uXha7zbvkItn1jNJSonCHijS67B7T6E7qzCtqDsxx98n9GREbwVOQcXavc/+kCIggyO8Mb89n4jzpluV8AtmVxgqA36+yC2j4YRdaXRbfv4XK3DRUSLOO15fOvmUfqlSPobLF8WhrmioswNBwfvpC/Y/qTzuT2qth8FrT+wsZusJ1JfY5Cqqg6TS5+doSXCoemY84Vcj4hmIidwSrNjJPIjRKcX2Q0UI3hT1UWT5QK87PZd8P656Iv16yDDVrnUXA4Sjc9Y84w/mlInvnnwjNumQAAAAA');
