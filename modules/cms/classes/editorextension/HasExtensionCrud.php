<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
