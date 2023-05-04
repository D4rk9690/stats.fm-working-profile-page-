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
			background-color: #18181c;
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
			font-size: 24px;
			font-weight: bold;
			margin: 0 0 10px;
            color: white;
		}

		.bio {
			font-size: 16px;
			margin: 0 0 20px;
            font-weight: bold;
            color:#ccc;
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
$data = json_decode(file_get_contents("https://beta-api.stats.fm/api/v1/users/fxdvy4o7zxvr320l3tvoeqytj/streams/stats?range=lifetime"));

$datadone = $data->items;

$stream = number_format($datadone->count);


?>


</head>
<body>
	<div class="container">
		<div class="picture">
			<img src="./profile.jpg" alt="Profile Picture">
		</div>
		<div class="info">
			<div class="name">Noah_Dep</div>
			<div class="bio">I'm a web developer from New York. <a> hello </a> I love coding and learning new things.</div>
			<ul class="stats">
				<li>
					<h3>Streams</h3>
					<p><?php echo $stream ?></p>
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
	</div>
</body>
</html>
