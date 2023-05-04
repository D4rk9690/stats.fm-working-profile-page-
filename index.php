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
			text-decoration: none;
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







 .card-group {
	 position: relative;
	 width: 30rem;
	 margin: 3rem auto;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 transition: transform 0.5s ease-in-out;
}
 .card-group.expanded .card-badge .material-icons {
	 transform: rotate(180deg);
}
 .card-group.expanded .card {
	 box-shadow: 0 0.125rem 0.125rem rgba(0, 0, 0, 0.1);
	 transform: none;
}
 .card-group.expanded .card ~ .card {
	 margin-top: 0.5rem;
	 position: static;
}
 .card-group .card-badge {
	 position: absolute;
	 z-index: 1;
	 right: 0.5rem;
	 top: 0.5rem;
	 font-size: 0.75rem;
	 text-transform: uppercase;
	 letter-spacing: 0.5px;
	 background-color: #111112;
	 color: #fff;
	 padding: 0.0625rem 0.25rem 0.0625rem 0.75rem;
	 border-radius: 1rem;
	 border: 0;
	 cursor: pointer;
	 display: flex;
	 align-items: center;
	 outline: 0;
}


.card-group .card-badgee {
	 position: absolute;
	 z-index: 1;
	 right: 0.5rem;
	 top: 0.5rem;
	 font-size: 0.75rem;
	 text-transform: uppercase;
	 letter-spacing: 0.5px;
	 background-color: #111112;
	 color: #fff;
	 padding: 0.0625rem 0.25rem 0.0625rem 0.75rem;
	 border-radius: 1rem;
	 border: 0;
	 cursor: pointer;
	 display: flex;
	 align-items: center;
	 outline: 0;
}
 .card-group .card-badge .material-icons {
	 text-transform: none;
	 line-height: 1;
	 font-size: 1.25rem;
	 margin-left: 0.25rem;
	 transition: transform 0.2s;
}


.card-group .card-badgee .material-icons {
	 text-transform: none;
	 line-height: 1;
	 font-size: 1.25rem;
	 margin-left: 0.25rem;
	 transition: transform 0.2s;
}
 /* .card-group .card-badge:focus {
	 box-shadow: 0 0 0.25rem 0.125rem  #1ed760;
} */
 .card {
	 position: relative;
	 background-color: #18181c;
	 color: white;
	 padding: 1.5rem;
	 width: 30rem;
	 /* border: 1px solid #d5d5d5; */
	 box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15);
	 border-radius: 10px;
	 z-index: 0;
	 transition: transform 0.5s ease-in-out;
}

	.card span{
		color:  #1ed760;
	}
 .card h2 {
	 font-size: 1.25rem;
	 font-weight: 600;
	 margin-bottom: 0.5rem;
}
 .card p {
	 line-height: 1.4;
}
 .card:first-child {
	 z-index: 1;
}
 .card ~ .card {
	 position: absolute;
	 top: 0;
	 z-index: 0;
}
 .card:nth-child(2) {
	 transform: translateY(0.25rem) scaleX(0.98);
}
 .card:nth-child(3) {
	 transform: translateY(0.5rem) scaleX(0.96);
	 z-index: -1;
}
 





/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  /* box-shadow: inset 0 0 5px grey;  */
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #1ed760; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #1ed760; 
}




















@import url('https://fonts.googleapis.com/css?family=Krub:400,700');
.cardd *{
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
}


 .cardd {
	 position: absolute;
	 margin: auto;
	 top: 700px;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 width: 250px;
	 height: 300px;
	 border-radius: 10px;
	 box-shadow: 0 10px 25px 5px rgba(0, 0, 0, 0.2);
	 background: #18181c;
	 overflow: hidden;
}
 .cardd .ds-top {
	 position: absolute;
	 margin: auto;
	 top: 0;
	 right: 0;
	 left: 0;
	 width: 300px;
	 height: 80px;
	 background: #1ed760;
	 animation: dsTop 1.5s;
}
 .cardd .avatar-holder {
	 position: absolute;
	 margin: auto;
	 top: 40px;
	 right: 0;
	 left: 0;
	 width: 100px;
	 height: 100px;
	 border-radius: 50%;
	 box-shadow: 0 0 0 5px #151515, inset 0 0 0 5px #000, inset 0 0 0 5px #000, inset 0 0 0 5px #000, inset 0 0 0 5px #000;
	 background: white;
	 overflow: hidden;
	 animation: mvTop 1.5s;
}
 .cardd .avatar-holder img {
	 width: 100%;
	 height: 100%;
	 object-fit: cover;
}
 .cardd .name {
	 position: absolute;
	 margin: auto;
	 top: 20px;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 width: inherit;
	 height: 40px;
	 text-align: center;
	 animation: fadeIn 2s ease-in;
}
 .cardd .name a {
	 color: white;
	 text-decoration: none;
	 font-weight: 700;
	 font-size: 18px;
}
 .cardd .name a:hover {
	 text-decoration: underline;
	 color: #1ed760;
}
 .cardd .name h6 {
	 position: absolute;
	 margin: auto;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 color: white;
	 width: 40px;
}
 .cardd .button {
	 position: absolute;
	 margin: auto;
	 padding: 8px;
	 top: 20px;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 width: inherit;
	 height: 40px;
	 text-align: center;
	 animation: fadeIn 2s ease-in;
	 outline: none;
}
 .cardd .button a {
	 padding: 5px 20px;
	 border-radius: 10px;
	 color: white;
	 letter-spacing: 0.05em;
	 text-decoration: none;
	 font-size: 10px;
	 transition: all 1s;
}
 .cardd .button a:hover {
	 color: white;
	 background: #1ed760;
}
 .cardd .ds-info {
	 position: absolute;
	 margin: auto;
	 top: 220px;
	 bottom: 0;
	 right: 0;
	 left: 0;
	 width: inherit;
	 height: 40px;
	 display: flex;
}
 .cardd .ds-info .pens, .cardd .ds-info .projects, .cardd .ds-info .posts {
	 position: relative;
	 left: -300px;
	 width: calc(250px / 3);
	 text-align: center;
	 color: white;
	 animation: fadeInMove 2s;
	 animation-fill-mode: forwards;
}
 .cardd .ds-info .pens h6, .cardd .ds-info .projects h6, .cardd .ds-info .posts h6 {
	 text-transform: uppercase;
	 color: #1ed760;
}
 .cardd .ds-info .pens p, .cardd .ds-info .projects p, .cardd .ds-info .posts p {
	 font-size: 12px;
}
 .cardd .ds-info .ds:nth-of-type(2) {
	 animation-delay: 0.5s;
}
 .cardd .ds-info .ds:nth-of-type(1) {
	 animation-delay: 1s;
}
 @keyframes fadeInMove {
	 0% {
		 opacity: 0;
		 left: -300px;
	}
	 100% {
		 opacity: 1;
		 left: 0;
	}
}
 @keyframes fadeIn {
	 0% {
		 opacity: 0;
	}
	 100% {
		 opacity: 1;
	}
}
 @keyframes htmlSkill {
	 0% {
		 width: 0;
	}
	 100% {
		 width: 95%;
	}
}
 @keyframes cssSkill {
	 0% {
		 width: 0;
	}
	 100% {
		 width: 90%;
	}
}
 @keyframes jsSkill {
	 0% {
		 width: 0;
	}
	 100% {
		 width: 75%;
	}
}
 @keyframes mvBottom {
	 0% {
		 bottom: -150px;
	}
	 100% {
		 bottom: 10px;
	}
}
 @keyframes mvTop {
	 0% {
		 top: -150px;
	}
	 100% {
		 top: 40px;
	}
}
 @keyframes dsTop {
	 0% {
		 top: -150px;
	}
	 100% {
		 top: 0;
	}
}
 .following {
	 color: white;
	 background: #1ed760;
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







	
<!-- ARTISTS -->

<?php 
$newdataa = json_decode(file_get_contents("https://beta-api.stats.fm/api/v1/users/" .$profilelink ."/top/artists?range=lifetime"));
$newdataalink = $newdataa->items[0];

$name = $newdataalink->artist->name;
$followers = $newdataalink->artist->followers;
$img = $newdataalink->artist->image;
$streamsfirst = $newdataalink->streams;
$minutesfirst = $newdataalink->playedMs;
$spotifyPopularity = $newdataalink->artist->spotifyPopularity;


?>

<div class="name" style="text-align: center; padding-top: 40px; font-size: 25px; margin-bottom: -30px;">Check your top<span style="color: #a3a3a3; text-align: center"> artist</span>.</div>


<div class="cardd">
  <div class="ds-top"></div>
  <div class="avatar-holder">
    <img src="<?php echo $img ?>" alt="<?php echo $name; ?>">
  </div>
  <div class="name">
    <a href="" target="_blank"><?php echo $name; ?></a>
    <p title="Followers" style="font-size: 12px; margin-top: -7px;"> <span class="followers"><?php echo number_format($followers) ?></span></p>
  </div>
  <div class="button">
    <!-- <a href="#" class="btn" onmousedown="follow();" style="padding-top: 25px">Followers <i class="fas fa-user-plus"></i></a> -->
  </div>
  <div class="ds-info">
    <div class="ds pens">
      <h6 title="Number of pens created by the user">Streams <i class="fas fa-edit"></i></h6>
      <p><?php echo number_format($streamsfirst) ?></p>
    </div>
    <div class="ds projects">
      <h6 title="Number of projects created by the user">Minutes <i class="fas fa-project-diagram"></i></h6>
      <p><?php echo number_format(intval(($minutesfirst) /1000) /60) ?></p>
    </div>
    <div class="ds posts">
      <h6 title="Number of posts">Popularity <i class="fas fa-comments"></i></h6>
      <p><?php echo $spotifyPopularity ?></p>
    </div>
  </div>
  </div>
</div>





<?php 
$newdata = json_decode(file_get_contents("https://beta-api.stats.fm/api/v1/users/" .$profilelink ."/top/genres?range=lifetime"));
$newdatalink = $newdata->items;

?>

<div class="name" style="text-align: center; padding-top: 440px; font-size: 25px; margin-bottom: -20px;">Check your top<span style="color: #a3a3a3; text-align: center"> gender</span>.</div>

<div class="card-group">
<button type="button" class="card-badge">
      See all
      <i class="material-icons">+</i>
   </button>

<?php 
foreach($newdatalink AS $key => $data ){
?>

<div class="card" data-index="<?php echo intval($data->position) -1 ?> ">
      <h2><?php echo $data->position ?> | <?php echo $data->genre->tag ?> </h2>
      <p>The <?php echo $data->position ?> music gender you listen the most is <span> <?php echo $data->genre->tag ?></span>, with not less then <span><?php echo number_format($data->streams) ?> </span> streams.</p>
   </div>


<?php 
}

?>
</div>






	<script>

const toggleCards = () => {
   cardGroup.classList.toggle('expanded');
}

const cardGroup = document.querySelector('.card-group');
const cardBadge = document.querySelector('.card-badge');
cardBadge.addEventListener('click', toggleCards);


const target = {
  clicked: 0,
  currentFollowers: 90,
  btn: document.querySelector("a.btn"),
  fw: document.querySelector("span.followers")
};

const follow = () => {
  target.clicked += 1;
  target.btn.innerHTML = 'Following <i class="fas fa-user-times"></i>';

  if (target.clicked % 2 === 0) {
    target.currentFollowers -= 1;
    target.btn.innerHTML = 'Follow <i class="fas fa-user-plus"></i>';
  }
  else {
    target.currentFollowers += 1;
  }

  target.fw.textContent = target.currentFollowers;
  target.btn.classList.toggle("following");
}

</script>
</body>
</html>
