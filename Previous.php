<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="Css/Home.css"/>
	<script src="JS/Practice.js"></script>
	<script src="JS/Content.js"></script>
</head>
<body>
	<!-- Navigation -->
<nav class="navbar navbar-expand-md bg-warning sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="Img/Brand.png" height="50px"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	<span class="navbar-toggler-icon bg-primary"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link btn-outline-info" href="Home.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn-outline-info" href="#">Syllabus</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn-outline-info" href="#">Books</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn-outline-info" href="#">Notes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn-outline-info" href="#">Video Lectures</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn-outline-info" href="Previous.php">Previous Years Papers</a>
			</li>
		</ul>
	</div>
</div>
</nav>

<!--Page Heading-->
<div class="heading">
<hr>
<h1 align="center">Previous Year Papers</h1>
<hr>
</div>

<!--Content-->
<div class="container-fluid">
<div class="row">
	<div class="col-md-2">
		<div class="cards">
			<img class="card-img-top" src="Pdf/first.png">
			<div class="card-body">
			<table cellpadding="4px" border="2px">
				<tr align="center" colspan="2">
				<td><h4>2011</h4></td>
				<td></td>
				</tr>
				<tr>
				<th>Subjects</th>
				<th>Download</th>
				</tr>
				<tr>
				<td>English</td>
				<?php
				$files=scandir("Pdf/PDF/2011");
				for($a=1;$a<count($files);$a++)
				{
				?>
				<td><a download="<?php echo $files[$a]?>" class="btn btn-outline-secondary" href="<?php echo "Pdf/PDF/2011/".$files[$a]?>">Download</a></td>
				<?php
				}
				?>
				</tr>
				<tr>
				<td>Maths</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="cards">
			<img class="card-img-top" src="Pdf/first.png">
			<div class="card-body">
				<table cellpadding="4px" border="2px">
				<tr align="center" colspan="2">
				<td><h4>2012</h4></td>
				<td></td>
				</tr>
				<tr>
				<th>Subjects</th>
				<th>Download</th>
				</tr>
				<tr>
				<td>English</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Maths</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="cards">
			<img class="card-img-top" src="Pdf/first.png">
			<div class="card-body">
				<table cellpadding="4px" border="2px">
				<tr align="center" colspan="2">
				<td><h4>2013</h4></td>
				<td></td>
				</tr>
				<tr>
				<th>Subjects</th>
				<th>Download</th>
				</tr>
				<tr>
				<td>English</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Science</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Social Science</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="cards">
			<img class="card-img-top" src="Pdf/first.png">
			<div class="card-body">
				<table cellpadding="4px" border="2px">
				<tr align="center" colspan="2">
				<td><h4>2015</h4></td>
				<td></td>
				</tr>
				<tr>
				<th>Subjects</th>
				<th>Download</th>
				</tr>
				<tr>
				<td>Science</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="cards">
			<img class="card-img-top" src="Pdf/first.png">
			<div class="card-body">
				<table cellpadding="4px" border="2px">
				<tr align="center" colspan="2">
				<td><h4>2016</h4></td>
				<td></td>
				</tr>
				<tr>
				<th>Subjects</th>
				<th>Download</th>
				</tr>
				<tr>
				<td>Maths</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Science</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Social Science</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="cards">
			<img class="card-img-top" src="Pdf/first.png">
			<div class="card-body">
				<table cellpadding="4px" border="2px">
				<tr align="center" colspan="2">
				<td><h4>2017</h4></td>
				<td></td>
				</tr>
				<tr>
				<th>Subjects</th>
				<th>Download</th>
				</tr>
				<tr>
				<td>English</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Maths</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Science</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Social Science Part A</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Social Science Part B</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Hindi A</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
				<tr>
				<td>Hindi B</td>
				<td><a class="btn btn-outline-secondary" href="#">Download</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
</div>
</div>

<!--Footer-->
<footer class="footer">
<div class="container-fluid padding">
	<div class="row">
		<div class="col-md-4">
		<h1 class="white" align="center">Support</h1>
		<hr class="light">
			<div class="white">
			<address align="center">
			<p>tarunkethwalia18@gmail.com</p>
			<p>gk.baro@gmail.com</p>
			<p>rs9555801907@gmail.com</p>
			</address>
			</div>
		</div>

		<div class="col-md-4">
		<h1 class="white" align="center">Contact Info.</h1>
		<hr class="light">
			<div class="white" align="center">
			<p>+91-9891198501</p>
			<p>+91-7599227302</p>
			<p>+91-9555801907</p>
			</div>
		</div>

		<div class="col-md-4">
		<h1 class="white" align="center">Address</h1>
			<div class="white">
			<hr class="light">
			<p align="center"><a href="http://www.dpgitm.com/">
			DPGITM </a><br/>
			Marble Market, Sector 34 <br/>
			Gurgaon
			</p>
			</div>
		</div>
		<div class="col-12" align="center">
		<hr class="light">
		<h3><span  class="white">&copy;</span> <span class="Edu">Edu</span><span class="zone">Zone</span></h3>
	</div>
	</div>
</div>
</footer>
</body>
</html>
