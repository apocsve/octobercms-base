<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
