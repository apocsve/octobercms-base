<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');