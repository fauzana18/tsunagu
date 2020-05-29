<?php
    include"koneksi.php";
	$id=$_GET['id'];
	$selbuk="Select * from buku where id = '$id'";
	$resbuk=mysqli_query($mysqli, $selbuk);
	$buku=mysqli_fetch_array($resbuk);
	$select="Select * from register";
	$result=mysqli_query($mysqli, $select);
	$buff=mysqli_fetch_array($result);
?>
<h2 class="text-uppercase">FORUM DISKUSI BUKU "<?php echo $buku['judul'];?>"</h2> 

<div class="panel-body">
      <ul class="list-group">
		<?php
		
		$skomentar = "SELECT * from forum where judul='$buku[judul]'";
		$selectkmt = mysqli_query($mysqli, $skomentar);
		while($select_result = mysqli_fetch_array($selectkmt))
		{
		$idk					= $select_result['id'] ;
		$nama					= $select_result['username'] ;
		$komentar				= $select_result['komentar'] ;
		$tgl					= $select_result['tgl'] ;
		$ava					= $select_result['ava'] ;
		
		
		?>

                    <li class='list-group-item'>
                        <div class='row'>
						
                            <div class='col-xs-2 col-md-1'>
                                <img src='<?php echo $ava;?>' class='img-circle img-responsive' alt='avatar user' width='65' />
							</div>
                            <div class='col-xs-10 col-md-11'>
                                <div class='comment-text'>
                                    <?php echo $komentar;?>
                                </div>  
								
								<div>
                                    <div style='font-size:10;' class='mic-info'>
                                        oleh: <?php echo $nama;?>
                                    </div>
									
									<div style='font-size:10;' class='mic-info'>
										tanggal: <?php echo $tgl;?>
                                    </div>
                                </div>
								
								<?php if(isset($_SESSION['username'])&&$buff['stat']=="1"){?>
								<div align="right">
									<a href="Contents/hapuskomentar.php?id=<?php echo $idk;?>" class="btn btn-danger">HAPUS</a> 
								</div>
								<?php } ?>
							
                            </div>
                        </div>
                    </li> 
			<?php }
			?>      
    </ul>                
</div>

<li class='list-group-item'>
    <div class='row'>
	
		<div class='col-xs-2 col-md-2'>
		</div>
		
		<div class='col-xs-5 col-md-4'>
			<form role="form" method='POST' action='Contents/insert-komentar.php'>
				<input type="hidden" name="id" value="<?php echo $buku['id'];?>" />
				<div class="register-top-grid">					
					 
					<span>Komentar</span>
					<textarea id="komentar" placeholder="komentar" name="komentar" required="required" class="form-control"></textarea><br/>                     						 
					<input type="submit" class="btn btn-primary" value="SUBMIT">					 
				</div>
				     
			</form>
		</div>
	</div>
</li>