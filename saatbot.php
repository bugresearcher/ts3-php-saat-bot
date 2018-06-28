<?php
//PHP Saat Bot Teamspeak 3 Türkiyede Ýlk bugresearcher.com // 

require_once("TeamSpeak3/TeamSpeak3.php");
date_default_timezone_set('Europe/Istanbul'); // ELLEMEYÝN OTOMATÝK Olarak Türkiye Saati Olacaktir.
TeamSpeak3::init();

$kullanici = "serveradmin";
$sifre = "YatqaSifre";
$serverIP = "ip";
$botkanal1 = 2;
$botkanal2 = 3;
$botkanal3 = 4;
$botkanal4 = 5;
$botkanal5 = 6;
$isim = "SaatBot";

try
{
   $ts3 = TeamSpeak3::factory("serverquery://{$kullanici}:{$sifre}@{$serverIP}:10011/?server_port=9987&blocking=0&nickname={$isim}");

  $botkanal1 = $ts3->channelGetById($botkanal1);
  $botkanal2 = $ts3->channelGetById($botkanal2);
  $botkanal3 = $ts3->channelGetById($botkanal3);
  $botkanal4 = $ts3->channelGetById($botkanal4);
  $kanal = $ts3->channelGetById($botkullanicikanal);

  $zaman = time();
   $gercek = date('[Y-m-d] [H:i:s]',$zaman);
  echo $gercek."\t[INFO] girildi\n";

  $kes[0] = "-----";
  $kes2[0] = "-¦¦¦-";
  $kes3[0] = "-¦¦¦-";
  $kes4[0] = "-----";

  $kes[1] = "¦--";
  $kes2[1] = "-¦-";
  $kes3[1] = "¦¦-";
  $kes4[1] = "¦¦-";

  $kes[2] = "-----";
  $kes2[2] = "¦¦¦--";
  $kes3[2] = "¦--¦¦";
  $kes4[2] = "-----";

  $kes[3] = "-----";
  $kes2[3] = "¦¦---";
  $kes3[3] = "¦¦¦¦-";
  $kes4[3] = "-----";

  $kes[4] = "¦¦¦--¦";
  $kes2[4] = "¦--¦-¦";
  $kes3[4] = "------";
  $kes4[4] = "¦¦¦¦-¦";

  $kes[5] = "-----";
  $kes2[5] = "----¦";
  $kes3[5] = "¦¦¦¦-";
  $kes4[5] = "-----";

  $kes[6] = "-----";
  $kes2[6] = "----¦";
  $kes3[6] = "-¦¦¦-";
  $kes4[6] = "-----";

  $kes[7] = "-----";
  $kes2[7] = "¦¦¦¦-";
  $kes3[7] = "¦¦--¦";
  $kes4[7] = "¦-¦¦¦";

  $kes[8] = "-----";
  $kes2[8] = "-----";
  $kes3[8] = "-¦¦¦-";
  $kes4[8] = "-----";

  $kes[9] = "-----";
  $kes2[9] = "-----";
  $kes3[9] = "¦¦¦¦-";
  $kes4[9] = "-----";

  $zaman = date('H:i', time());
  $saatikes = explode(':', date('H:i') );
  $zaman1 = str_split($saatikes[0],1);
  $zaman2 = $zaman2[0];
  $zaman3 = $zaman2[1];
  $zaman4 = str_split($saatikes[1],1);
  $zaman5 = $zaman1[0];
  $zaman6 = $zaman1[1];

  $botkanal1 =  "[cspacer]".$zaman1[$saatikes]."¦".$zaman1[$saatikes2]."¦¦¦¦¦".$zaman1[$saatikes3]."¦".$zaman1[$saatikes4];
  $botkanal1 =  "[cspacer]".$zaman2[$saatikes]."¦".$zaman1[$saatikes2]."¦¦-¦¦".$zaman1[$saatikes3]."¦".$zaman1[$saatikes4];
  $botkanal1 =  "[cspacer]".$zaman3[$saatikes]."¦".$zaman1[$saatikes2]."¦¦-¦¦".$zaman1[$saatikes3]."¦".$zaman1[$saatikes4];
  $botkanal1 =  "[cspacer]".$zaman4[$saatikes]."¦".$zaman1[$saatikes2]."¦¦¦¦¦".$zaman1[$saatikes3]."¦".$zaman1[$saatikes4];

  if($botkanal1["channel_name"] != $botkanal1)
  {
  $botkanal12["channel_name"] = $botkanal1;
  $botkanal1 = time();
  $zaman = date('[Y-m-d] [H:i:s]',$botkanal1);
  echo $zaman."\t[INFO] guncellendý\n";
  }

  if($kanal2["channel_name"] != $botkanal1)
  {
  $kanal2["channel_name"] = $botkanal1;
  $botkanal1 = time();
  $zaman = date('[Y-m-d] [H:i:s]',$botkanal1);
  echo $zaman."\t[INFO] guncellendi \n";
  }

  $zaman = time();
  $zaman = date('[Y-m-d] [H:i:s]',$zaman);
  die($zaman."\t[INFO] Bitti.\n");
}
catch(Exception $e)
{
  $zaman = time();
  $zaman = date('[Y-m-d] [H:i:s]',$zaman);
  echo "Failed\n";
  die($zaman."\t[ERROR]  " . $e->getMessage() . "\n". $e->getTraceAsString() ."\n");
}