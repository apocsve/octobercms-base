<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
