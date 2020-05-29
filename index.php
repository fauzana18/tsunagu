<?php session_start(); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Welcome to Tsunagu Library</title>

	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
	<div class="row">
        <div class="col-md-12 header" id="site-header">
		<header>
		<h1 class="title-site">TSUNAGU LIBRARY</h1>
		<?php 
			if(isset($_SESSION['username'])){
		?>
			Hi 
			<?php
				include"Contents/koneksi.php";
				$username = $_SESSION['username'];
				$select="Select * from register where username='$username'";
				$buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
    
			?>
			<a href="?module=profil#pos" class="btn btn-danger btn-xs"><?php echo $buff['username'];?></a>
			<a href="Contents/logout.php" class="btn btn-danger btn-xs" style="float:right">Logout</a>
				
		<?php
			} else {
		?>
			<a href="Contents/login.php" class="btn btn-danger btn-xs" style="float:right">Login</a>
			<a href="Contents/register.php" class="btn btn-danger btn-xs" style="float:right; margin-right:5;">Register</a>
		<?php 
			}
		?>
		<br/><br/>
		</header>
		
		<nav class="menus">
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<div class="dropdown">
					<button class="dropbtn">Kategori 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<?php 
						include "Contents/koneksi.php";
						$selkat="Select * from kategori";
						$reskat=mysqli_query($mysqli, $selkat);
						while($kat=mysqli_fetch_array($reskat)){ ?>
						<a href="?module=kategori&pos&id=<?php echo $kat['id'];?>"><?php echo $kat['kategori']; ?></a>
						<?php
						};
						?>
						<?php if(isset($_SESSION['username'])){if($buff['stat']=="1") echo'<a href="?module=tambahkate#pos">+Kategori</a>';}?>
					</div>
				</div>
				<?php if(isset($_SESSION['username'])){ if($buff['stat']=="1"){ echo'<li><a href="?module=kelola#pos">Kelola Akun</a></li>';}}?>
				<?php if(isset($_SESSION['username'])){ if($buff['stat']=="2"){ echo'<li><a href="?module=sumbang#pos">Sumbang Buku</a></li>';}}?>
				<?php if(isset($_SESSION['username'])){ if($buff['stat']=="2"){ echo'<li><a href="?module=request#pos">Request Buku</a></li>';}}?>
				<li><a href="?module=about#pos">Tentang</a></li>
				<?php if(!isset($_SESSION['username'])||isset($_SESSION['username'])&&$buff['stat']!="1"){ echo'<li><a href="?module=bantuan#pos">Bantuan</a></li>';}?>
				
				<form action="?module=cari#pos" class="form-inline" style="float:right;" method="post">
					<input type="text" class="form-control" name="judul" placeholder="Ketikkan Judul Buku" style="margin-right:5;" />
					<input type="submit" class="btn btn-danger btn-xs" value="Cari" />
				</form>
			</ul>
			
		</nav>
        </div>
    </div>
	
	
	
	<div class="row">
        <div class="col-md-8 articles" id="site-content">
           <article class="posts">
				
    <div class="content">
        <?php if(isset($_GET['module']))
			include "Contents/$_GET[module].php";
		else
			include "Contents/home.php";?>
    </div>
			</article>
        </div>
		
        <div class="col-md-4 sidebar" id="site-sidebar">
            <aside class="widgets">
				<h3 class="widget-title">Latest Posts</h3>
					<ul>
					<?php 
						include "Contents/koneksi.php";
						$sel="Select * from buku order by id desc";
						$res=mysqli_query($mysqli, $sel);
						while($b=mysqli_fetch_array($res)){ ?>
						<li><a href="?module=detail&pos&id=<?php echo $b['id'];?>"><?php echo $b['judul'];?></a></li>
						<?php }; ?>
					</ul>
			</aside>
        </div>
    </div>
	
	
	<div class="row">
        <div class="col-md-12 footer" id="site-footer">
            <footer class="copyright text-center"><p>&copy; 2019 tsunagulibrary.com</p></footer>
        </div>
    </div>
	
</div>

<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>