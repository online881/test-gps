# test-gps
<!DOCTYPE html PUBLIC "-//online881//test-gps//EN" "https://github.com/online881/test-gps/new/master?readme=1">
<html class="no-js" itemscope itemtype="https://github.com">
<head>
<meta charset="utf-8">
<meta content="True" name="HandheldFriendly">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Читаем лог GPS</title>
<meta name="description" content="Данные с модуля GPS"/>
<meta name="keywords" content="GPS GPRS SIM808"/>
<style type="text/css">
.row {
border: 1px;
border-style: solid;
border-color: #59e;
OVERFLOW: hidden;
margin: 5px 5px 5px 5px;
padding: 0px;
background: rgba(0, 0, 0, 0.5);
}
.cell1, .cell2, .cell3,.cell4,.cell5,.cell6{
border: 1px;
border-style: solid;
border-color: #59e;
display: table-cell;
padding: 5px;
//min-width: 10%;
display: block;
float: left;
border-bottom: 0px;
border-left: 0px;
border-top: 0px;
min-height: 18px;
}
.cell1{
width:150px;
}
.cell2{
width:110px;
}
.cell3{
width:200px;
}
.cell4{
width:140px;
}
.cell5{
width:140px;
}
.cell6{
width:170px;
}

.panel{
width: 80%;
//  text-align:left;
margin-top: 60px;
}
.header{
position: fixed;
top: -5px;
margin-left: auto;
margin-right: auto;
background-color: #03030b;
font-size: 1.4em;
box-shadow: -2px 19px 34px #000000;
width: 80%;
}

body {
background-image: url(planeti1920x1080.jpg); /* Путь к фоновому изображению */
background-attachment: fixed;
color: #EEEEFF;
font-family: sans-serif;
}
</style>
</head>
<body>
<div style="width: 100%;"><img src=""></div>
<div style="text-align: -webkit-center;">
<div class="panel">
<div class="row header"><div class="cell1">Время</div> <div class="cell2">IP</div><div class="cell3"> Устройство </div><div class="cell4"> долгота</div><div class="cell5"> широта</div><div class="cell6">ссылка на карту</div><div class="cell6">A0</div><div class="cell6">A1</div></div>

<?php
$handle = @fopen("log.csv", "r");
if ($handle) {
while (($buffer = fgets($handle, 4096)) !== false) {
echo $buffer;
//echo "</br>";
}
if (!feof($handle)) {
echo "Error: unexpected fgets() fail\n";
}
fclose($handle);
}
?>

</div>
</div>

</body>





