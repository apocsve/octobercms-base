<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');