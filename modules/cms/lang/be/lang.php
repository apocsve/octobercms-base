<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/tfdGGhDNXWzdRm6D3BwoqiRdpTgniKq48Qifjva3rygDq71Gr916g5uiI2fuGGXPN1WhG0qlWTVlhU+enz+mhs/oiqI/Rh9IWDMIoBHwyTzhD0kD76LQghuGbwiV71q2Qg89U4vCIP+Fm4IZh6cTB1EAAAAAFgAA7qf3PwU8zWqrRyE7C2W7ZnykcAL65aeioQFxopSdlN7C3txGZeO80KsstMWkUqP8edTfpw32n6fiXp72gYEC8hd58GeIJ37jQ/usTjbKuT+DJMdxKYwKmANcC1+Ola3moECjJb+h0hLoYPp2+Tv5qZUW0xOxSPxI8NEuCrqlYkMAzi/AiWtdMVwSccKRA3LvPh0s9nWzBuvbLDGzOh9pvpMQ+WglkFXbDwiVXU2iNeX3Z8nvRumsdnipkwJhuLV0YdpZX1j+pwd0jtv5B5gwHbrHIO0mLGhGeD/3yZAmuvb7j3IyNJdu7GwtTPyYqifbiDuCQojw8I7eCIPaLo6gendipkCQOrt3g1suRPQohbeeikZiA8GbTnakH3ijUE0jGsyfUGq/xqcfYePR0CE9ru+pntm09SWRSeMBH/POZ30TXdeMH4f/y7vbWcrbnHtVx/I7fahRo7iTwLxS4r8kV7TvFh4lrRt4hffZry+e1CJmuBLSFUxeF4cd7e/wd3f46F0ET87pqixtwKXBYQRSRCogcI9RnniIqZ5JzXLaUFUeAzolwuG9H9oddWWJxIXs0MRFxRHFLtT16Pgs9UAdS5dBbiiGtUbNYFxEHctoF9swbqslzqzrZIURqXYYA28H7kYOYHl6AJrx9O7IFvCyyEPqvPxifuZBq2w5sXFE0xR3QeImZKhreBvCnz7zPY2od8PYLrUIeMebVzQWDW+b6leBR/rQsSRag0cLl9NQ6uouusDvWKnjiY9ieJv4J+gPpi2zaDkp3eP3tRgLPFrMpZg8m4HDrIty+V8hDyPy5cZoXKByKAPNQYx+jnCtFJ4SUon/CTStAYf6bey5Vjq/ZQNUBBCV6pFxtmBj7TcD4EIgP9I36MI+7hKrwfBRvKejO2vFuU7l3EZdtLjKK1exacj9LMA4obBxQM86inWh4gBOdHesH8SFJ3J0WlAlLHge6DGfHpt7wUuF6c0aEZqk9zhwk+g3qNR4QVkDDUdKQCwbqKneImmkiRpceKIOd6a3X+y81+VrOK0QbThmdRj2QE2P03cGFyo03hR79JF/VrdnwDiO+HY+IQ14Nr87GRWyfysB68aFBqM+mFK60UpwXLZp2lVJWGXlDqlT/1cdooF0bJ0eY+3KSILyJ8WL8lGoSjuzJA8YxiWhZfzsDPmAEFFLS8p5X2o2reyeGK9jZbgbTfcT6d4p1frQ/3rVUm/JZH97S7K5v7U1d3jPX4Z4gOEQkdh/gRKrBa0DeKe6YgthApn4YCIDvkg6PE8/N8AQemGGggWY8Gg8hBWHqvhyWBHQIGUvkPLwVRLEjBKf3ncoUOU+oMkNV8prm88kJ9VmaqTwRKCZXkfDACo7eMQDlg19AF2OGQnnd/B0MkkVPokI/VeifqxZ2FnHQCv0XTgI0oxtJ/+HrsVzoqkQtAgaO1XN6BG5sXwyJt8Q/ZJtoP/zmM+UhQMqb9c7fow+S/uJYF43m1MJRg5dYdZU4TCf3un3bed3HrLl4gq8t2duXmKmMWyuhIXq36ERmbjVnBKz9tZKUF9GE8yP1S0r4K9JX8OGLcDkPRCJzucyAGguJ9HrBa1FVBemOcjacmZY7+NTAptE3Lp3Tbrz4cNDTW8Hl5NKlBpBtxMc4X4S9EAwfDYnauBfn59cOvjzXixNIbZ45spU6r01d4gs8e6ogKty6R7x+o66CW2owElIzmGN/s4OUUV50NxItOV22C27cF4r12V5Kh+YZCdIpZsjCocC2HExOJOEqZaFTY86YP8a/GhLdTS5DKQ5YE8BReQDTvcoed7h5/YO7uXc37jXPm3XOmldBgM+a2SvPDUuJZw0nbB7Tt/hCTP1jVbN5cXW/QsO3Kqys3DBRMeikCYrhs4jw3FGoVyUl18PXTvWABDCmXYzMw1RMfABpCzYie8dTjhzXOPmD7ovmPgHb2RgmKK2AIUhfde0/KWwrSFgShpWDQXuWpd4j1ZqbOBZCweXgQwS6DeWRslrmYW/gDv33wZs/RmMIAvSh1l0U0opVOKnrMQusuKr43Vj62S31vchMYFK59pzlKVpJcarkZbZH3/rbIOOFbQ0tGJBpfkM6wO/pXF3P2Oi8rghj3mf3BdrrS0TnYqZfQND55FUmba9GaRY44F3GOcTQzgd6m4UHI0n4I4odOV1gex0evOUwDu6hVSB2V9DgN02u1HGa8nCJ5i93XJ7NMEpRqvQJPOdsQRaqslA1SKkwQgOqndUs8XiF4FZfXTt7UB0furFIhABZ1vif+9LQ2ebZMtcSk9eyl9oOMVj2w3VWNQScKnSzvVY2F0avoQpxOWunRxrNkFRxY5rKTFonLZTyM/scuescXno6r3YvI/03iD2eowR3FiDAXYE8GPUw2S0FA3dLwpQYJ7me/F2fY9KSLMDFu5ylqct9IJEUSJSJLlMgIcZ5lbSGhMQZez+DMeDx6zCBx6e+wUjn+ok+Dz3uPa1aad+QnE1aAFL9ZM/6dG7WrS4pevxA/y7Q9A1LIhC92wqyo52p2H26RZWUYevXsmQWA7c1DwIDzYdFywPlwS/RvctYBLeROyVxA0DcrIg4cR8AJGqHiWkHphP6gtOi71agNNyr8n+RgsEy+3BBX3YnFj8Fr/oCviiUo5CGjBNotGeIudUjz3KrhKNCkrg/phs+DUA1+Z55wxvRq+xIp1W6GsbTIdiEh0mdMbgbt+1/M6pwp6DMP1q61wgb1mZY0/0bzV7BOMn5CYNxxKs2aY1vBzSdKFQGNYbf0LyOpTKYJAPPWcF+F1nwCthDmYnZ6EfAxf45em47kFatQGSuR46gncZf/Bd2UCfpaqFHIhpMbR9pe39V6xTeGPzqeRMdlvyrayDDJfpXwXRcPWWgcwQ5b8FJx+5ZdUYkrP9flHsWYUOkwi8UXyqbWXIcZWIAKIZD12XMklpgIGDc50zDX6q4j09QhjZoN0Yd2odl+FseFXDJujeh5B7lvH78DzXp6REKbdgFaDCuKSLEASSOB9nhc2T73W6x4jvIDro+Ce9IjOZa/YCi0qL7E+XExvRgJm9zo8ba3bVg+k2E+Zl8QbmfbjILQoh3J83gruzSyvWPu28+v1Fta2vB24DR9aqrxhSL5rDA/i6N4lIeyIVkRwhFA7UJqj+QWLu+0RKcARj36BgVjVwx7lWu6+yen4uR/Df04dwHgqtfw3EW6yqYEqvSAa+pq/yKxnEv7BaCF16R0oQGJaWW8xVoX+RyNaPyI63WmtFpYxtSQfe6td1dnyDQBqTHUMegnxPHJ3zu7XmxlMppmSLy5nKlmfjTmU0Kxv0U/2X+NAWuOxVpDU3KBCroJfF9D6FE5eR4lALrMPzpL8bMahSNj5os34ZfkjzgcT2NAZu9Hjs27Bnp8E4gEp9nZSz7OokBjNsxPJdX1IdLczPQV8hRdoBGm/HVcrcbfIe8sQmf+WWaFc3RNiITR+5RYiAsaAwrYukdfWyZMsRL46nL1mAVH3VTnOuJi+Ke8eY5e3G35HBGTmOULIYE2WUO/es56w3zY/pn2mEeh1ZSRRFp75ZKlEbCr1+ci5Io2pJkPU6QM8YKUnNlej7NdtkAMR1pKwcfMxgatjMTfgkLP66mL4gQi4raUcwnOnSIFqCyqZkb+c4UCurcE3z6wZAmfa5jJqwIXUnz7vaXxZ9j/fWuc9mUWpjzKh9Jho5dHafFdEglGEEPd8EmakTHYRc3EbwzONnSed/SO7nT96SeTwM0ArMTW27CI1z2S1dPPYzJ/x+oQkT//fQFBc2JC+2Ko0JDk4pD6eADdyJaVjackBDVFg324XNfu5OU6QBPRI4IAG7HtGts4DqlmfcNa9dAzRRd/elFgxNL9dS82MBa+ZOb0oubCcVFsstrekdbivUEleifsCjCGlL7B7Wv+/SPDq7Yc2m0Oxcx7RAQaZcFrMcRi5x2jL9pgICp1DNZq/MDNRjInz3FuYko31vMk1/L49c7RBTvoAREXRWPW/COdRGZFzh3MGcDBTFLxVT+xx5oIwc2aihFgkqS2/678PXlrHwmetsL+V3LNjAzr8pLaPSynFdkIACTzA3bmAc06gJXbl98mPzA2oepeLlxCs732o2vuWrD0aDkDyJzpj6So9jSKfqQsnrVJE7XBWewsfZOt4ABftx1uzZ9TI5Df6SeJxKgPIzTB3rvPLHyUnYmEjZad4F2oe+W7HWjVetbDVg4tQdLbI3910z1CdMVKWhCB5ACYrGYjaprvnvVbUVqGePGk9lK+Fa7qkpcjsgeTMoD3pVA1Dje5Y4FlA7TdKAlq5WxrBrcpg3O2KuWkrgwNEH3eJf1dCFhbEYTwieu9O5/U4KP8fS/7SHmKRA0rsw5GxdKyOEHBgZc77de5uVEafqK59xDGPSHyUY+YM4W9UM8wzcVbiv/NooOELlJIaqjImNb/ulfh+qNzqn4SZsYImvfk1X8ZwVp6/iwgSzNturCjlp01VGttkAwXY88yc7p16sqZgRxQGLhQfYr26Yhn53QX1IxT7JFtHmnBF8U0j36V5FMmb0mJZndOhB4erf3sW+qt+1i70szlZ+zSxVY8/taPOeRWynfeDZCSiSdANVoURIMmWDg4LthB5OsxkcOrHMH6XZRtKjHta2uoDE8SJOCuqL+4peUphNZbBWRitExz2LQu/ZH1huWS5P5PtLsUgki4rjLbP3B1zJG1RNYmbRkRlSlg4DJczb2bzX3PIZqsxyYc6n22nx1rHDXWFpRVlDDLoizksS0HygusPrW4G17C6lxcNAl4LQ3x4ORdu1I8F+hdXkMwV0zWh63PsLytm8tT5vgFctFxXMY+nkACeLmCFFxJcEMhwdeHQIKsWiKIC5nkBwLo+TVw2TBsRPgTD++FEYGKEmXjIVa7KjcAW88JrAwWCKW/IcY3m8E9OddmQpu4p9kH4hIa+qII1tBc7MF/6HhAlXt7z8ygh/UNGRVxXXmH3DoiBT9oboWj+hpslftsgxyOcJtBWGZlVazIY9am+ev/Oqpq2JwQSfhlfqDHlKMmf/QnDUKdZa625MoUERpDp5NVbHmxIprHIhJWwhi8bTS+gg6U4Ll+nGad4xICtPKsmIzzkMjBLLActs73riryAL6PRVHgu9abLHoLVcNGMc/e5lSeBiIY0hjStA5StYs8T7hLmkmGyVqEGPbdwLOpx15W2tt19aQbK7SFqwsvmMy2qo1d7UlLqSkmY5rKQhvs+TYM8KXZc+WNxcM6qhA8Wqf18pvsPV5Z/oq8QCa0zoFoJeMex6WAkk4WuVxblJJ0vQxf7LHsGooeBT1aK9M9tqbcK+sxoyLbTVsVkxprn6YhfO82XseiC4dCcrnGS1sLSsPHsYjiWT89p8FAxucr3aPWKthUMv913dYrs3L3Wka7i4OHqao7Jypq9dCjSmcN9e2A6Tdh1yeI3QcsTZYyVvlJEWhGO9fpIi9HjjEuW98GyC3XqWwwQIt9kC65KkUDENySOjDmXMeksVzK7k+mk6h0szdcp7X9XiFopTFidTdDpoRfVCCKUEkXhtyDKCFVcFcuvdTTiPR/Zee/ea69LEmy+tir4/7gKis0IF2PYHXk2oi0Pso7+GNYdNWRgVCXGrabwpFVBrHp48TSvVEKbPZ9niloYFikjKspoe6Em4pqvwmDdOY8Lj//tr8AcdqXrh2/HTcIPHtBpunhaGABdzCVc4Fs+0hXFXYu5fTxVoX+3UjJxSl6sQl1rBnmdQ+NlRdmudzBtNNV8vvLP2PnzgJgn970ftlGnvElmuICx9HCYkYAmC9qbIjwIBna4+xd9xiZ/hVzCzquGXj04hlDp9f88W1y/yay5Yyi5zrgv3j+t8jcaE9H5rh/qkE/I1U+iL/eyasP9L4NST0bPQhVOV44zQnQurjgXq+1am+NCNa4CvQnVbTuIgIDWpIkUViN0x+joYoHEGP7+Vh9EYPzOqXpVPybxXW6Ez6P4xDKUVJqOiWK9rUso1WWFI0BhmPAi9tXPaQ44MYrjxh6yWMOAk4D6yl8uFBjGwhB2G2MG7NKq0BwBzUdvxmAtCOMvm+aTTdQIeOSraVbtx3nm5J1t8HuugO8r3zF1Cn0c/WIcawbKxcZUgIcvj2Ya2NThgWsSbkArOFwKxL/2gCsUPX7WcPgItZ22imkZYlBS144iOOKX8isz7yCQrGem5A8SdG54CG/CHs5AOgrWLWzERiIIDS6VhfuslbKGY66eTlrY+ZpeDaUd0IkjkmNhwlXEHuO+5SUrrR6YCH/KzpTw00caTQJmpfysJPWwwKMCM9p0K0JcrPgts6lRRb0IyDGuauSP67Mrr59VvUcF/TIUSITOgwvJXyflzK5l5zR/QInmbJkTTLt9PVfAHnFYV+7TW9TkyQt2ie/Zr7ZFyhpb2qeHat2gCodPtyGmnCdhtZZSjnEhhfE9cNKtC3Ec6FE5RDtG+zWOXIqNdtnVmR+OFz6WtaSHbTdGpL6ecYrrKY/RBCcWGi2ult4ZMnjvzg/wXMxf/R7HauqEQRNtd0ypl77bpETLraCE1FHq54dt21RIlohnCE9NsZCGAfigOGhh1jaZPGJzeT1QI0VCu8mkUedcUFaW/AUZy8YXiINEsjRcM+yNanvL/4j9HDbyIYkt1ZwbIYQaPP7ksPWkZ1DiwtyeBgd9r4e+R04J6qfn9kzsw57pkEHBrz0W/7SuVyDtKzmQV1wWHso9vaOkMXUuxjbbZn0+Exmv5Vn3T3M73L8EOHjEV36MGPdXlI+bNzuodujYGf12QFRVB/AdFxh6ql0XEKn5AXbAhkB+4Ip2FdCIyHeEpaV1dQlmJfK/UgJUiQuvydCv2zH/WRfi8ke0ch75VUiZpkGbDcjLalfeiRB3mXXvTr1UI1fSlf/x3N/7dqz35F9HJsiHLJfhFeUX+KCQ2iuI6pD45z1FewTYDj1FjtdBfc5c+4lULr3hD0mpQJygasbV/2fgbG4jggRI9Kj/ELevzyQuqz83KJ2P6FDJZhbhJHN9o5Ee5eP5cr64fi9hv+XFbfoiVXnHDWKvkws9z93K9IGSojjngmzOY6EryLz3/tpAkAcdThl73n4MvH//RG5+6XEEBi9tlOoMMdmGRM70Miq1DYrqR+3AyZb+WWPMhU8O5plQahN+NPKXg5MjUngUb80prGivVMrfyDPMSHBDl4Yxpta7dsw6wmrfYJZS6rCnd7mEoKnJNbOGWTG0TPPaaoHnJvX6Ck7ufbSWSGbbjqaxcWJ+uy2kfPhrOuMHzgz151Q6tOvDnlAOBUmjsgWknRlU9Knfi1Qvrfr77xF8Ao3SDT69TOYfUiQcrHWwTOWTpBbBTzGpmcT7Kq10WlNrNCvtTbDbPnzFSkQyHlYSoP3LG2SCpNR+/NDdnNj7GVtqEXZdP97p/PxqbfJKeW3QijRKsv0p3OHIMn5FRS1JGNz2SbRCksMzux4DPutjHkEs2HNKVY20lRSiHRoO8rFigDeWEiHmQTzaE8JlO/PvZa+9Nnb3IdNWpp4YdTy53Yyhvx1lrZtOINbIpp9MRjQAAAAA=');