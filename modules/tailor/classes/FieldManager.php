<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');