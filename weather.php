<?php

$index = 0;
$city_id = ["524901", "536203","1496747","1486209","551487"];
$api_key = '179288fd1aa430264f96b18a0750c2ce';



$username = $_COOKIE['user'];

date_default_timezone_set('Europe/Moscow');

$date = date('m/d/Y h:i:s a', time());

$mysql = new mysqli('localhost', 'root', 'root', 'weather');

$file = fopen('book.csv', 'w');

$title =array( array('City', 'Weather', 'Details', 'Temp'));
foreach ($title as $l){

fputcsv($file, $l, ';');

}

while ($index <= 4) {

$api_url = 'http://api.openweathermap.org/data/2.5/weather?id='.$city_id[$index].'&appid='.$api_key;

$weather_data = file_get_contents($api_url);
$data = json_decode($weather_data, true);

$weathernamecity = $data['name'];
$weathermean = $data['weather']['0']['main'];
$weatherindetails = $data['weather']['0']['description'];
$temp = $data['main']['temp'] - 273.15;
$windspeed = $data['wind']['speed'];
$humidity = $data ['main']['humidity'];

$strweather = $weathernamecity.' '.$weathermean.' '.$weatherindetails.' '.$temp.' '.$windspeed.' '.$humidity;

$list =array( array("$weathernamecity", "$weathermean", "$weatherindetails", (string)"$temp"));

$mysql -> query("INSERT INTO `weather_data` (`name`, `weather`, `details`, `temp`, `wind_speed`, `humidity`)
VALUES('$weathernamecity', '$weathermean', '$weatherindetails', '$temp', '$windspeed', '$humidity')");



foreach ($list as $line){

fputcsv($file, $line, ';');

}

$index = $index + 1;

}

$mysql -> close();
fclose($file);

$filename = "book.csv";


$mysql2 = new mysqli('localhost', 'root', 'root', 'weather');
$in = md5(rand());
$coin = "copy.csv";
$copy = 'assets/history/'.$in.$coin;

copy($filename,$copy);


$mysql2 -> query("INSERT INTO `record` (`username`, `data`, `filename`)
VALUES('$username', '$date', '$copy')");
$mysql2 -> close();

$a = "localhost";
$b = "root";
$c = "root";
$d = "weather";

$induction = mysqli_connect($a, $b, $c, $d);

function file_force_download($filename) {
  if (file_exists($filename)) {
    // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($filename));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
    // читаем файл и отправляем его пользователю
    readfile($filename);
    exit;
  }
}

file_force_download($filename); 





header('Location: /info.php');

?>