<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');