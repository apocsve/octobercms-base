<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
