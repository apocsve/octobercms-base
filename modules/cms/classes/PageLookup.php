<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');