<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');