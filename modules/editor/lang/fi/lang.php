<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');