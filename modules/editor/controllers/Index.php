<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');