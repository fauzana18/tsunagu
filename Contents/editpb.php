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
$select="Select * from buku where id='$id'";
$hasil=mysqli_query($mysqli, $select);
while($buff=mysqli_fetch_array($hasil)){
?>
  <div class="container-fluid">
    <div class="col-md-8 col-md-offset-4 form-login">

        <div class="outter-form-login">
            <form action="Contents/editprocpb.php" enctype="multipart/form-data" class="inner-login" method="post">
			<input type="hidden" name="id" value="<?php echo $buff['id'];?>" />
			<input type="hidden" name="pp" value="<?php echo $buff['pp'];?>" />
            <h3 class="text-center title-login">UBAH GAMBAR BUKU</h3>
                
				<div class="form-group">
                    <input type="file" name="img" />
                </div>
                
				<div align="center">
					<input type="submit" class="btn btn-primary" value="SUBMIT" />
					<a href="index.php?module=detail&pos&id=<?php echo $id;?>" class="btn btn-primary">BACK</a>
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