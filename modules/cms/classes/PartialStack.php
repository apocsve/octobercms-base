<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
