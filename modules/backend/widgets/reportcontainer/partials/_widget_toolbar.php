<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
