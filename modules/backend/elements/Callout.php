<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');