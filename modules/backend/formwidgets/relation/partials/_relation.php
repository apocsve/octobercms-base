<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAAC4AgAAzOKCHPuaRzrMlAbfNFaj3jRuItN0xtDB0WdSjk6njUq5cxJsbQeB+wgHIkh3num59lXEleFk9ObwR0Kh1v9L+YQc6yuMS2sL8zvLzrMRL3QzynKCz7B5L3L6MtTH7KUieaQPGuxn1h9W5fQiuQ3Pxds2zwuF2pjbT1OmTZVycxyWRYLExrAwn1ul4AJEI8NkIHYVjKVDhn78vNSpi7p60Q/6F7zrM8HhnTyJOi4UOPisR34qJg+AYDz05PqegGsENKtbMq7lu9ua3xoZ6VgOp+wULpykg9EcH0SlTNFzR8+9U2b9RcXNqVyxgorAAHG9pxk17HwTF+EMA++k25z7HJUyTGkZ7Z1pPtnPDk4In8uq1GnHGYr2mJcKeSaVfXMELxeyxpsR16s3XJckDez/byTMXH46/EhUpoIwC4HBnvLFGAXBQL/r0eE8q1EB9SuBA2m8DHPvL/Uy5Vky3C4Y0oiUsxV1jykcstTzn/5vTny9HtSc2+ZTuw8fyLEv3CycE3a3fxqoIshNfJrO04zExgu2qNJcgw2pVtpIEKRg2MMJETu1BTpnocaMiVjg3ED8vXjLTRKgNdVrnGNsuoGq4lFDCYAF+QBX+1DaW3CZGvlZKCli5/6rbyV4h8k3+DHF5xRX6rvq96gIx8al4CsbNSr4baXwGwIT3Zeo9lw7yLpoYTMFPXl8D0QysIZ1XC60CCK7VJFEuYHPbkgDGqxoMRriQ2RuvaLQLqj9G+fWqvURYFEhHKUoRDbmfMzAtGA30ERszZRJlmS9NZ8TR7mGKt0CYBFTRWqYWPsOgS1yhYwkSgYwWvlKIgYKGbfnrEDPfiEYxNnpL5BrB0Izyax3TeTmAK5q1IL/4XHM85ifsv6r9TwYxtb5/yneH0mwHurx5PlofFXHBFFhhz8wnyk+cZfydxROF3Y4AAAAAA==');