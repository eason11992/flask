<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>陳奕廷的自介</title>
	<style type="text/css">
		*{font-family: "標楷體";margin-left:auto;margin-right:auto}
	    h1{color:blue;font-size:60px;}
	    h2{color:#33ff33;font-size:40px;}
	</style>
<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h1text").innerText = "靜宜資管";
  			document.getElementById("h2text").innerText = "資管導論";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h1text").innerText = "陳奕廷";
  			document.getElementById("h2text").innerText = "Chen,Yi Ting";
		}
	</script>
</head>
<body>
	<?php echo date("Y-m-d") ?>
	<table width=600>
		<tr>
			<td>
				<img src="cliff.jpg"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>
			<td>
				<h1 id="h1text">陳奕廷</h1>
				<h2 id="h2text">Chen-Yi Ting</h2>	
			</td>
		</tr>
	</table>
<table width="60%"border="1">
		<tr>
			<td>
				大象席地而坐電影配樂<br>
   <audio controls>
		<source src="elephant.mp3" type="audio/mP3">
	</audio><br>
			</td>
			<td>
				<個人網頁:<a href="https://www1.pu.edu.tw/~tcyang">https://www.pu.edu.tw/</a><br>
    fb:</a><br>
    e-Mail:<a href="mailto:559066a@gmail.com">559066a@gmail.com</a><br>
			</td>
			<td>
		【PIG X FAMILY】 假如統神一家去演間諜家家酒的話?<br>
     <iframe src="https://www.youtube.com/embed/wi1V1nPexUk" allowfullscreen></iframe>
			</td>	
		</tr>
	</table>
	<table width="60%" border="1">
		<tr>
			<td>
	<iframe src="https://console.dialogflow.com/api-client/demo/embedded/ee2340f9-75a3-4b1b-b998-4251c027955c">
    </iframe>
			</td>

</body>
</html>