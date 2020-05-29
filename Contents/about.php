<?php
    include"koneksi.php";
	if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $select="Select * from register where username='$username'";
    $buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
	}
	$select1="Select * from web";
    $buff1=mysqli_fetch_array(mysqli_query($mysqli, $select1));
?>

<h2>TENTANG TSUNAGU LIBRARY</h2>
<p><?php echo $buff1['tentang']; ?></p>

<?php
if(isset($_SESSION['username'])&&$buff['stat']=="1"){
?>
	<a href='?module=tentang&id=<?php echo $buff['id'];?>' class="btn btn-primary">EDIT</a>
<?php
}
?>