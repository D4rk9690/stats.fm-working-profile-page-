<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<style>

		@font-face {
  font-family: myFirstFont;
  src: url(./font/StatsfmSans-Bold.ttf);
}


		body {
			font-family: myFirstFont;
			margin: 0;
			padding: 0;
            background-color: #111112;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 20px;
            padding-top: 150px;
			padding-left: 400px;
			padding-right: 400px;
			background-color: #18181c;
			border-radius: 10px;
			font-family: myFirstFont;
		}


		.containerstats {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 20px;
			padding-left: 200px;
			padding-right: 200px;
			border-radius: 10px;
		}

		.picture {
			flex: 1;
			max-width: 200px;
			margin-right: 20px;
		}

		.picture img {
			display: block;
			width: 100%;
			height: auto;
			border-radius: 50%;
		}

		.info {
			flex: 3;
		}

		.name {
			font-size: 36px;
			font-weight: bold;
			margin: 0 0 10px;
            color: white;
			font-family: myFirstFont;
		}

		.bio {
			font-size: 16px;
			margin: 0 0 20px;
            color:white;
			font-family: myFirstFont;
		}

        .bio a{
			font-size: 16px;
			margin: 0 0 20px;
            color: #1ed760;
            font-weight: bold;
			font-family: myFirstFont;
		}


		.stats {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			list-style: none;
			padding: 0;
			margin: 0;
            color: white;
			font-family: myFirstFont;
		}

		.stats li {
			flex-basis: 20%;
			margin: 10px 0;
			padding: 20px 20px 0px 50px;
			text-align: center;
			font-family: myFirstFont;
		}

        /* .stats li:hover{
            			border: 1px solid #1ed760;
			border-radius: 5px;
			box-shadow: 0 0 5px #1ed760;
        } */

		.stats li h3 {
			font-size: 18px;
			font-weight: bold;
			margin: 0 0 5px;
		}

		.stats li p {
			font-size: 14px;
			margin: 0;
		}
	</style>


<?php 
// INFO PROFILE
$infouser = json_decode(file_get_contents("./user.json"));
$profilelink = $infouser->profile->spotifyid;
$profilebio = $infouser->profile->bio;
$profilegender = $infouser->profile->gender;

//  API CALL
$data = json_decode(file_get_contents("https://beta-api.stats.fm/api/v1/users/".$profilelink ."/streams/stats?range=lifetime"));
$datadone = $data->items;

// STATS SETTINGS
$stream = number_format($datadone->count);



// STREAMED TIME SETTINGS
$ms = $datadone->durationMs;
$second = $datadone->durationMs / 1000;
$minutes = $second / 60;
$hours = $minutes / 60;
$days = $hours / 24;
$months = $days / 30;

// STREAMED MORE

$artist = $datadone->cardinality->artists;
$albums = $datadone->cardinality->albums;
$tracks = $datadone->cardinality->tracks;

?>


</head>
<body>
	<div class="container">
		<div class="picture">
			<img src="./profile.jpg" alt="Profile Picture">
		</div>
		<div class="info">
			<div class="name"><span style="color: #a3a3a3"> Hello,</span> Noah_Dep <span style="color: #a3a3a3; font-size: 16px"><?php echo $profilegender ?></span></div>
			<div class="bio"><?php echo $profilebio ?></div>
			<div class="bio"> <p style="font-weight: bold; color: #a3a3a3;"> 21 Friends</p></div>
			
		</div>
	</div>
	<div class="containerstats">
	<ul class="stats">
				<li>
					<h3><?php echo $stream ?></h3>
					<p style="font-weight: bold; color: #a3a3a3;"> Streams</p>
				</li>
				<li>
					<h3><?php echo number_format($minutes) ?></h3>
					<p style="font-weight: bold; color: #a3a3a3;">Minutes</p>
				</li>
				<li>
					<h3><?php echo number_format($hours); ?></h3>
					<p style="font-weight: bold; color: #a3a3a3;">Hours</p>
				</li>
				<li>
					<h3><?php echo number_format($artist) ?></h3>
					<p style="font-weight: bold; color: #a3a3a3;">Artists</p>
				</li>
				<li>
					<h3><?php echo number_format($albums) ?></h3>
					<p style="font-weight: bold; color: #a3a3a3;">Albums</p>
				</li>
				<li>
					<h3><?php echo number_format($tracks) ?></h3>
					<p style="font-weight: bold; color: #a3a3a3;">Tracks</p>
				</li>
			</ul>
	</div>
</body>
</html>
