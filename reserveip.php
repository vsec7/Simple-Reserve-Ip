#!/usr/bin/php
<?php


// I LOVE CANS21
// Versailles ~ Sec7or ~ SHL ~ JCA
// Versi selanjutnya akan tambah CMS Detector nya
// USAGE : php reserveip.php <domain.com>

echo "+-----------------------------+\n";
echo "|      Simple Reserve IP      |\n";
echo "|     Versailles <3 Cans21    |\n";
echo "| Sec7or ~ SurabayaHackerlink |\n";
echo "+-----------------------------+\n";

if(isset($argv[1])){
$f = file_get_contents("http://viewdns.info/reverseip/?host={$argv[1]}&t=1");

preg_match('/Reverse IP results for (.*?) \((.*?)\)<br>/',$f,$r);

preg_match('/Last Resolved Date(.*?)<\/table>/',$f,$t);
preg_match_all('/<td>(.*?)<\/td><td align="center">/',$t[1],$d);

print "URL : ".$r[1]."\n";
print "IP : ".$r[2]."\n";
print "Count : ".count($d[1])." Domains\n";


$i = 1;
foreach ($d[1] as $dom){
print $i.". ".$dom."\n";
$i++;
}

}
else{
	echo "usage: php reserveip.php <domain/ipaddress>\n";
}

echo "\n\n";

exit;
