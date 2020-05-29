<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar User Baru</title>

    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/logstyle.css" rel="stylesheet">
  </head>
  
  <body>
  <div class="container-fluid">
    <div class="col-md-8 col-md-offset-4 form-login">

        <div class="outter-form-login">
            <form action="registerproc.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Register</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="namadep" placeholder="Nama Depan">
                </div>

				<div class="form-group">
                    <input type="text" class="form-control" name="namabel" placeholder="Nama Belakang">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
				
				<div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="usia" placeholder="Usia">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="E-mail">
                </div>
				
				<div class="form-group">
                    <input type="text" class="form-control" name="notel" placeholder="Nomor Telepon">
                </div>
                
				<div align="center">
					<input type="submit" class="btn btn-primary btn-custom-green" value="SUBMIT" />
				</div>
                
                <div class="text-center forget">
					<a href="../index.php" class="btn btn-primary btn-custom-green">Beranda</a>
                </div>
            </form>
        </div>
    </div>
  </div>

    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>