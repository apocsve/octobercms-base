<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
