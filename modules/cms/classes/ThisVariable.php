<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');