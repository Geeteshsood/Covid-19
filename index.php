<!DOCTYPE html>
<html>
<head>
	<style>
		<style type="text/css">
	#email{
	width: 70%;
	height: 4rem;
	border-radius: 30px;
	border-color: cyan;
	font-size: 1.8rem;
}
::placeholder{
	
	text-align: center;
	color:blue;
}
.h{
  margin-left: 350px;
  font-size: 4rem; 
  letter-spacing: 13px;
  position: relative;
}
.h::before{
	content: "TRACKER";
	 letter-spacing: 13px;
	color: black;
	position: absolute;
	top: 1;
	left: 0;
	width: 100%;
	border-right: 0.4rem solid black;
	animation: slide 5s linear infinite;
	overflow: hidden;
}
@keyframes slide{
	0%{
width: 0%;
	}
	50%{
width: 100%;
	}
	100%{
width: 0%;
	}
}
.form-control{
	font-family: fontawesome;
}
	</style>
	<title>Covid Tracker</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="frontpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="header" id="topheader">
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container ">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar">
      <li class="nav-item active">
        <a href="#"  class="h" style="text-decoration: none"> TRACKER </a>
      </li> 
    </ul>
    
  </div>
</div>
</nav>
<div class="header" id="topheader">
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container ">
  <a class="navbar-brand font-weight-bold text-white" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

   
  </div>
</div>
</nav>
<section class="header-section">
	<div class="center-div">
		<h1 class="font-weight-bold">
			COVID TRACKER
		</h1>
		<p>We're All In This Together</p>
		<div class="header-button">
			<a href="worldcovid19.php">World</a>
			<a href="indiacovid19.php">India</a>
		</div>
	</div>
</section>
</div>
<!-- FOR NAVBAR -->
<!-- FOR three div -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>