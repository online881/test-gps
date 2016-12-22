 <? php? 
  $ the ip = $ _SERVER [ 'REMOTE_ADDR']; // get the IP address of the client 
  $ client = $ _SERVER [ 'HTTP_USER_AGENT ']; // get the ID HTTP client 
  $ today = date ( "Ymd H : i: s"); // get the current date and time 
  $ f = fopen ( "log.csv" , "a"); // open file for appending data 
  $ parama = $ _REQUEST [ 'a ']; // get the value of variable "a" 
  $ paramb = $ _REQUEST [ 'b']; // get the value of the variable "b" 
  $ parama0 = $ _REQUEST [ 'a0']; // get the value of the variable "a0" 
  $ parama1 = $ _REQUEST [ 'a1']; // get the value of the variable "a1"   
  fwrite ($ f, "<a div class = 'row'> <a div class = 'cell1'> $ today has been </ a div> <a div class = 'CELL2'> $ the ip </ a div> <div class = 'cell3'> $ client </ div> <div class = 'cell4'> $ parama </ div> <div class = 'cell5'> $ paramb </ div> <div class = 'cell6'> <a href='https://yandex.ru/maps/?source=serp_navig&text=$parama + $paramb'> Yandex </a> </ div> <div class = 'cell6'> $ parama0 </ div> <div class = 'cell6 '> $ parama1 </ div> </ div> "); // write data to the file 
  fclose ($ f); // close the file 
?>
