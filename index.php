<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "border";
$password = "aCueiLKVFx0b35Dc";
$dbname = "border";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql_yahodyn = "SELECT * FROM `border` WHERE `border_title` LIKE 'Yahodyn' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_yahodyn);
$row_yahodyn= mysqli_fetch_assoc($result);

$sql_zosin = "SELECT * FROM `border` WHERE `border_title` LIKE 'Zosin' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_zosin);
$row_zosin= mysqli_fetch_assoc($result);

$sql_uhryniv = "SELECT * FROM `border` WHERE `border_title` LIKE 'Uhryniv' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_uhryniv);
$row_uhryniv= mysqli_fetch_assoc($result);

$sql_ravaruska = "SELECT * FROM `border` WHERE `border_title` LIKE 'Ravaruska' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_ravaruska);
$row_ravaruska= mysqli_fetch_assoc($result);

$sql_hrushiv = "SELECT * FROM `border` WHERE `border_title` LIKE 'Hrushiv' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_hrushiv);
$row_hrushiv= mysqli_fetch_assoc($result);

$sql_krakivets = "SELECT * FROM `border` WHERE `border_title` LIKE 'Krakivets' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_krakivets);
$row_krakivets= mysqli_fetch_assoc($result);

$sql_shegyni = "SELECT * FROM `border` WHERE `border_title` LIKE 'Shegyni' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_shegyni);
$row_shegyni= mysqli_fetch_assoc($result);

$sql_smilnytsia = "SELECT * FROM `border` WHERE `border_title` LIKE 'Smilnytsia' ORDER BY `border`.`eventid` DESC LIMIT 1";
$result = $conn->query($sql_smilnytsia);
$row_smilnytsia= mysqli_fetch_assoc($result);


// DFSU
$sql_uhryniv_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Uhryniv' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_uhryniv_dfsu);
$row_uhryniv_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_ravaruska_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Ravaruska' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_ravaruska_dfsu);
$row_ravaruska_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_hrushiv_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Hrushiv' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_hrushiv_dfsu);
$row_hrushiv_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_krakivets_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Krakivets' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_krakivets_dfsu);
$row_krakivets_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_shegyni_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Shegyni' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_shegyni_dfsu);
$row_shegyni_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_smilnytsia_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Smilnytsia' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_smilnytsia_dfsu);
$row_smilnytsia_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_yahodyn_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Yahodyn' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_yahodyn_dfsu);
$row_yahodyn_dfsu= mysqli_fetch_assoc($result_dfsu);

$sql_ustylug_dfsu = "SELECT * FROM `custom` WHERE `border_title` LIKE 'Ustylug' ORDER BY `custom`.`eventid` DESC LIMIT 1";
$result_dfsu = $conn->query($sql_ustylug_dfsu);
$row_ustylug_dfsu= mysqli_fetch_assoc($result_dfsu);



$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta property="og:url" content="http://uaborder.tk/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Черги на кордоні з Польщею онлайн" />
	<meta property="og:description" content="Інформація про черги на кордоні з Польщею в режимі реального часу. Дані оновлюються кожні 15 хв." />
	<meta property="og:image" content="http://expres.ua/gfx/news/chergy_3.jpg" />
	
	
	
	
	<title>Черги на кордоні з Польщею онлайн </title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="bootstrap/css/custom.css">
	<style type="text/css">

</style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123617074-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123617074-1');
</script>

</head>
<body>
	<div class="table-responsive-sm">
		<table class="table table-bordered table-success font-size-20" id="tableID">
			<thead class="thead-dark">
				<tr>
					<th scope="col" class="border border-secondary" style="width: 28%">Державний кордон<sup>зі сторони України</sup><br><a class="uaborderlink" href="http://uaborder.tk">www.uaborder.tk</a></th>
					<th scope="col" class="border border-secondary" style="width: 18%">Кількість легкових авто перед ППр (дані з сайту ДПСУ)</th>
					<th scope="col" class="border border-secondary" style="width: 18%">Інформація станом на<sup><a href="#footnotes2">2</a></sup></th>
					<th scope="col" class="border border-secondary" style="width: 18%">Кількість легкових авто перед ППр (дані з сайту ДФСУ)</th>
					<th scope="col" class="border border-secondary" style="width: 18%">Інформація станом на</th>
				</tr>
			</thead>
			<tbody>
				<tr class="custom-green">
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/%D0%9F%D1%83%D0%BD%D0%BA%D1%82+%D0%BF%D1%80%D0%BE%D0%BF%D1%83%D1%81%D0%BA%D1%83+%D0%B4%D0%BB%D1%8F+%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D1%96%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE+%D1%81%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%BD%D1%8F+%22%D0%AF%D0%B3%D0%BE%D0%B4%D0%B8%D0%BD%22/@51.1916083,23.8191643,15z/data=!4m16!1m8!3m7!1s0x0:0x7bfa283c5645f110!2z0K_Qs9C-0LTQuNC9!5m1!1s2018-08-10!8m2!3d51.1948357!4d23.8244429!3m6!1s0x0:0xd9e47343ac164a64!5m1!1s2018-08-10!8m2!3d51.1883008!4d23.8095671"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Ягодин</b><sup>Волинська обл.</sup> <br>Швидкість оформлення легкових авто: <span>55</span> авто/год<sup><a href="#footnotes1">1</a></sup></td>
					<td class="border border-success" align="center"><?php echo $row_yahodyn['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_yahodyn['site_update_time'];?> </td>
					<td class="border border-success" align="center"><?php echo $row_yahodyn_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_yahodyn_dfsu['site_update_time'];?></td>
				</tr>
				<tr class="custom-green">
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/%D0%9F%D1%83%D0%BD%D0%BA%D1%82+%D0%BF%D1%80%D0%BE%D0%BF%D1%83%D1%81%D0%BA%D1%83+%D0%B4%D0%BB%D1%8F+%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D1%96%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE+%D1%81%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%BD%D1%8F+%22%D0%A3%D1%81%D1%82%D0%B8%D0%BB%D1%83%D0%B3%22/@50.8598907,24.1482618,15z/data=!4m17!1m9!3m8!1s0x4724600f24bbe277:0x135c2377da3cdb76!2z0KPRgdGC0LjQu9GD0LMsINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDRl9C90LAsIDQ0NzMx!3b1!5m1!1s2018-08-10!8m2!3d50.8609275!4d24.1551215!3m6!1s0x4724601b6913ef89:0x6e1e3e4713f75c9a!5m1!1s2018-08-10!8m2!3d50.8560905!4d24.1436577"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Устилуг</b><sup>Волинська обл.</sup><br>Швидкість оформлення легкових авто: <span>46</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_zosin['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_zosin['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_ustylug_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_ustylug_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/%D0%9F%D1%83%D0%BD%D0%BA%D1%82+%D0%BF%D1%80%D0%BE%D0%BF%D1%83%D1%81%D0%BA%D1%83+%D0%94%D0%BE%D0%BB%D0%B3%D0%BE%D0%B1%D0%B8%D1%87%D1%83%D0%B2-%D0%A3%D0%B3%D1%80%D0%B8%D0%BD%D1%96%D0%B2/@50.5802518,24.0986312,14.5z/data=!4m13!1m7!3m6!1s0x4724e926b11a604f:0x511db6d060ea6ec6!2z0KPQs9GA0LjQvdGW0LIsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDRl9C90LAsIDgwMDEy!3b1!8m2!3d50.5750868!4d24.108216!3m4!1s0x4724e93f79184279:0xc19886c763a40692!8m2!3d50.5783281!4d24.0836781"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Угринів</b><sup>Львівська обл.</sup> <br>Швидкість оформлення легкових авто: <span>42</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_uhryniv['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_uhryniv['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_uhryniv_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_uhryniv_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/%D0%9C%D1%96%D0%B6%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D0%B8%D0%B9+%D0%BF%D1%83%D0%BD%D0%BA%D1%82+%D0%BF%D1%80%D0%BE%D0%BF%D1%83%D1%81%D0%BA%D1%83+%D0%B4%D0%BB%D1%8F+%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D1%96%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE+%D1%81%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%BD%D1%8F+%C2%AB%D0%A0%D0%B0%D0%B2%D0%B0-%D0%A0%D1%83%D1%81%D1%8C%D0%BA%D0%B0+%E2%80%93+%D0%93%D1%80%D0%B5%D0%B1%D0%B5%D0%BD%D0%BD%D0%B5%C2%BB/@50.2725321,23.5841792,13.5z/data=!4m13!1m7!3m6!1s0x473b356c425d38e7:0xb77764ff468ccf02!2z0KDQsNCy0LAt0KDRg9GB0YzQutCwLCDQm9GM0LLRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0ZfQvdCw!3b1!8m2!3d50.2260935!4d23.6172156!3m4!1s0x4724b531eb301d05:0x2ab619783c8d6d0a!8m2!3d50.2744484!4d23.5888052"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Рава-Руська</b><sup>Львівська обл.</sup><br>Швидкість оформлення легкових авто: <span>71</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_ravaruska['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_ravaruska['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_ravaruska_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_ravaruska_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/%D0%9F%D1%83%D0%BD%D0%BA%D1%82+%D0%BF%D1%80%D0%BE%D0%BF%D1%83%D1%81%D0%BA%D1%83+%D0%93%D1%80%D1%83%D1%88%D1%96%D0%B2/@50.0927506,23.299686,14.42z/data=!4m13!1m7!3m6!1s0x473b443e56774ab9:0xe9f23364c04f02ee!2z0JPRgNGD0YjRltCyLCDQm9GM0LLRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0ZfQvdCwLCA4MTAxNg!3b1!8m2!3d50.0937867!4d23.3003693!3m4!1s0x0:0xd7b97eaabc87dd5f!8m2!3d50.0963371!4d23.2774544"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Грушів</b><sup>Львівська обл.</sup><br>Швидкість оформлення легкових авто: <span>41</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_hrushiv['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_hrushiv['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_hrushiv_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_hrushiv_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/Border+crossing+Korczowa+-+Krakovets/@49.9583253,23.1230769,14z/data=!4m8!1m2!2m1!1z0LrRgNCw0LrRltCy0LXRhtGM!3m4!1s0x0:0x64d39e6d60455e1e!8m2!3d49.9551547!4d23.1122142"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Краківець</b><sup>Львівська обл.</sup><br>Швидкість оформлення легкових авто: <span>75</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_krakivets['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_krakivets['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_krakivets_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_krakivets_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/Przej%C5%9Bcie+graniczne+Medyka+-+Szeginie/@49.798925,22.944797,16.08z/data=!4m13!1m7!3m6!1s0x473b70b0d8f3cd55:0xf9df6b1753034834!2z0KjQtdCz0LjQvdGWLCDQm9GM0LLRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0ZfQvdCwLCA4MTMyMQ!3b1!8m2!3d49.8007959!4d22.9823133!3m4!1s0x473b7a00e281c245:0x1aefd22131cdedb8!8m2!3d49.8001054!4d22.9452708"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Шегині</b><sup>Львівська обл.</sup><br>Швидкість оформлення легкових авто: <span>66</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_shegyni['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_shegyni['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_shegyni_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_shegyni_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b><a href="https://www.google.pl/maps/place/Przej%C5%9Bcie+graniczne+Kro%C5%9Bcienko+-+Smolnica/@49.4795062,22.7053878,16.71z/data=!4m13!1m7!3m6!1s0x473b926b2e36b703:0x696c223456fe9e38!2z0KHQvNGW0LvRjNC90LjRhtGPLCDQm9GM0LLRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0ZfQvdCwLCA4MjA2Mw!3b1!8m2!3d49.4801899!4d22.7059857!3m4!1s0x473b926cb5654b81:0x3fe6ff23ee59abfd!8m2!3d49.4813663!4d22.7013065"><img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATYSURBVGhD7ZZvbBNlHMdrjLzipe/ghYEEdYkaaTsUu3ZuEEVUZlhLIsOI4Y8GFaIuEtGpaNhERBMX7CKBLHSbTgkFIoZ0LUNZtnYtpdq1ReafwrqxP66UjaGj5Of9zufK3fW569PZFhL7TT5Zd89zfT7f6z3Xaor5PydYUjIrYtRbwkZ9W8ioj3B/JxHyuhXHcA6ZfmslbNJWc6L9YZMeVDHqz4XLdSvJaTc/YDbfzol/TJVVAc/Bc8nb3LyETLpdNEEWuBI7ydtkTkm7edacJsvOOVZLbG7TKsgFz769nCqWDX2m0iqiqJ65Vks9TWKm3LXHAq7li6lS2YD7xqvV3kE0lcNd+UG5hKFtM9hCHTA0+Sdcu56E2MQY//9DrS9L5tFY/Zb61fcYtGDX38+Dr2lzBCKmUjPRVI5cYM2xepicvgq0XJgYhfl7ayTz5ex57lGqDHKEk95693yoXTCPB1/jMdpchNtHNqKpHPHii9tegalrf/GyfyQuwuudVnjmcB28cdIKZ0b6YdnBrRJZGo6n6LeP+xGtRF5cwmNYSD0nbNKdJZrKES/eGnam5O/Z97xEjBXfklKKiJ67Ze5LkxfAMdo53CdwmWgqR7z4xSvjfAG88sKx6iPvww53i4SNjt2pcTmBipwWmCKayhEvjhsWs8L+TupYo9/OHxPHPRROjctxPkm/hXDDZnsLcU+iCNFUjnhxfOpgxJ/AuuO7+CcQ8sv4BX7cEfWlxuXsfqGCKoPQNvHRUrVNrLcSTeWIFxf2QDQxDPfuXysRe6B5PYxcifPjDe42yZiY8oYqqowAXm18hB7mbptexc37L31G3YNEUznixfEpJDxCz18ehtqTTVDF3U6vdX4B/fEYfxzHFx7YKJGW024uowplhVHXQRTVI1+85tgOmJie4mXl+Ts5DS86PpXMlzPvy1Xwo70CIpX0zcxCyKi7GjLoFxBF9dAkFrVsggMhBwxwX1wojV9gh86dgscPvpk2VwzKn+haChAug7HPHqbKsaGrJXqZQxOZCWJ5nr4yOP/SIoqcOtzV/x40mtuIXubQZLIlTZ6Q9Bjg7Ar2H3ahp5dwv3+0dxI1ttCEskFJHrkUXA/+r5ohVJ55P+Cc01/buIufZWhSrGSS93q7oNfrhsD2bVRpMT99WMfPJVrsoYmxoCafEMkj3p4u6Kt+giqO4Fhvz6nCFVCTn/51MwwORsHr86QKIH7bPqo8crqlOTWPaLGHJqhGJvn4+AjE43GIDcbSSgQ3rEmTx2PiOUSLPTRJJVjlBeQl/M170wr4bfsLU0BN3uPaAp3+UYk8tYSnG0Irb+wFfI3H8l5ATd7t3AKVdWNQ+W4CXP5LGUsEGranCgQ++kAin5cCLPLGbQkelhI++7epAr6jh/JbIBt55hKcZOgxI4SXGdPkc1pgJvICmUoE163mqMlfgf8iL6BW4rfPP4FA/Xv5KZALeQHWjZ2zArmUF8i2BNFiTz7lBdRLDEhKEC325FteQLVE7EYJosWeQsgLqJUYICWIFnsKJS+gVuL3gWj2BYYDpuuFkhdQKtE/FE0SLfZ898PSbrF8j/PVvMoLYAmnf1xS4JufXd1Eiz2NJ0yzscRIwJTsdm0qiLwAlug4M8pfeZRvDLbPJlrFFFNMMbdUNJp/AAANFzA9z3URAAAAAElFTkSuQmCC"></a>Смільниця</b><sup>Львівська обл.</sup><br>Швидкість оформлення легкових авто: <span>42</span> авто/год</td>
					<td class="border border-success" align="center"><?php echo $row_smilnytsia['queue_before_border'];?></td>
					<td class="border border-success" align="center"><?php echo $row_smilnytsia['site_update_time'];?></td>
					<td class="border border-success" align="center"><?php echo $row_smilnytsia_dfsu['before_customs'];?></td>
					<td class="border border-success" align="center"><?php echo $row_smilnytsia_dfsu['site_update_time'];?></td>
				</tr>
				<tr>
					<td class="border border-success"><b>Останній запит до серверів:</b></td>
					<td class="border border-success" align="center">Державної прикордонної служби</td>
					<td class="border border-success" align="center"><?php echo $row_yahodyn['date_insert'];?> </td>
					<td class="border border-success" align="center">Державної фіскальної служби</td>
					<td class="border border-success" align="center"><?php echo $row_uhryniv_dfsu['date_insert'];?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="container">
	<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
	<div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
		<ul class="navbar-nav ml-auto text-center">
			<li class="nav-item">
				<a class="nav-link" href="#">Про проект</a>
			</li>
		</ul>
	</div>

	<div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
		<ul class="navbar-nav mr-auto text-center">
			<li class="nav-item">
				<a class="nav-link" href="#">Контакт</a>
			</li>
		</ul>
	</div>
</nav>
<!-- /Menu -->

<!-- Disqus code -->
	<div id="disqus_thread"></div>
	<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://uaborder.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<!-- /Disqus code -->


<p>Інформація про черги на кордоні з Польщею в режимі реального часу. Дані оновлюються кожні 15 хв. 
Джерела інформації — сайти <a href="http://loda.gov.ua/karta_kordon/">Державної фіскальної служби України</a> та <a href="https://dpsu.gov.ua/ua/map">Державної прикордонної служби України.</a> Щоб не затримуватися у пункті пропуску, перед поїздкою до Польщі пропонуємо Вам ознайомитися з наявними чергами на кордонах.
<br><sup id="footnotes1">1</sup>Декларована швидкість заявлена на сайті (припускаємо що це проектна пропускна спроможність) 
<br><sup id="footnotes2">2</sup>Інформація з серверів ДФСУ і ДПСУ оновлюється з різною періодичністю, тому ми вказуємо останню актуальну
 </p>
</div>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>
