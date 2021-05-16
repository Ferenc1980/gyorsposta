<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="menu.js"></script>
    
    <title>Gyorsposta</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">    
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuid" aria-controls="menuid" aria-expanded="false" aria-label="Toggle navigation">    
			<span class="navbar-toggler-icon"></span>    
		</button>    
		<span class="navbar-brand">Gyorsposta</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=statisztika.php">Statisztika</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=ablak.php">Ablak</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?p=szolgaltatas.php">Új szolgáltatás</a></li>
			
		</ul>
	</div>
</nav>  

<div class="tarolo">
      <?php
        if(isset($_GET["p"])){
          include $_GET["p"];
        }
        else include("fooldal.php");
      ?>  

  </div>
</div>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
    
</body>
</html>