<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');