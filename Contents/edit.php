<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
<?php
$id=$_GET['id'];
include"koneksi.php";
$select="Select * from register where id='$id'";
$hasil=mysqli_query($mysqli, $select);
while($buff=mysqli_fetch_array($hasil)){
?>
  <div class="container-fluid">
    <div class="col-md-8 col-md-offset-4 form-login">

        <div class="outter-form-login">
            <form action="Contents/editproc.php" enctype="multipart/form-data" class="inner-login" method="post">
			<input type="hidden" name="id" value="<?php echo $buff['id'];?>" />
			<input type="hidden" name="pp" value="<?php echo $buff['pp'];?>" />
            <h3 class="text-center title-login">EDIT DATA</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="namadep" placeholder="Nama Depan" value="<?php echo $buff['namadep'];?>">
                </div>

				<div class="form-group">
                    <input type="text" class="form-control" name="namabel" placeholder="Nama Belakang" value="<?php echo $buff['namabel'];?>">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $buff['username'];?>">
                </div>
				
				<div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $buff['password'];?>">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="usia" placeholder="Usia" value="<?php echo $buff['usia'];?>">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin" value="<?php echo $buff['jk'];?>">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir" value="<?php echo $buff['ttl'];?>">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo $buff['email'];?>">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="notel" placeholder="Nomor Telepon" value="<?php echo $buff['notel'];?>">
                </div>
                
                <div align="center">
					<input type="submit" class="btn btn-primary" value="SUBMIT" />
					<a href="index.php?module=profil#pos" class="btn btn-primary">BACK</a>
				</div>
                
            </form>
        </div>
    </div>
  </div>

    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<?php
};
mysqli_close($mysqli);
?>
  </body>
</html>