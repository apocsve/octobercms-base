<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
