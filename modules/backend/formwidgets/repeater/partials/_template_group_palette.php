<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
