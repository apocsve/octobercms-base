<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');