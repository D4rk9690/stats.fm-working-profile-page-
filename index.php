<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<style>
		body {
			font-family: Arial, sans-serif;
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
		}

		.bio {
			font-size: 16px;
			margin: 0 0 20px;
            color:white;
		}

        .bio a{
			font-size: 16px;
			margin: 0 0 20px;
            color: #1ed760;
            font-weight: bold;
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
		}

		.stats li {
			flex-basis: 30%;
			margin: 10px 0;
			padding: 10px;
			text-align: center;

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

?>


</head>
<body>
	<div class="container">
		<div class="picture">
			<img src="./profile.jpg" alt="Profile Picture">
		</div>
		<div class="info">
			<div class="name">Noah_Dep <span style="color: #a3a3a3; font-size: 16px"><?php echo $profilegender ?></span></div>
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
					<h3>Location</h3>
					<p>New York</p>
				</li>
				<li>
					<h3>Experience</h3>
					<p>5 years</p>
				</li>
				<li>
					<h3>Skills</h3>
					<p>HTML, CSS, JavaScript, PHP</p>
				</li>
				<li>
					<h3>Education</h3>
					<p>Bachelor's Degree in Computer Science</p>
				</li>
				<li>
					<h3>Interests</h3>
					<p>Reading, hiking, playing guitar</p>
				</li>
			</ul>
	</div>
</body>
</html>
