<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');