<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
