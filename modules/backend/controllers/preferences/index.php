<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');