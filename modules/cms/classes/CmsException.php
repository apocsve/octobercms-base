<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');