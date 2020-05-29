<?php
    include"koneksi.php";
    $username = $_SESSION['username'];
    $select="Select * from register where username='$username'";
    $buff=mysqli_fetch_array(mysqli_query($mysqli, $select));
	$url="../Images/$buff[pp]";
    
?>
        <h2>PROFIL</h2><br />
		<div align="center">
			<a href='?module=editpp&id=<?php echo $buff['id'];?>'><?php echo "<img src='Images/".$buff['pp']."' width='200' height='200'>"; ?></a>
		</div>
        <table align="center" width="" border="0">
            <tr>
                <td align="center"><?php echo $buff['namadep'];?>&nbsp<?php echo $buff['namabel'];?></td>
            </tr>
            <tr>
                <td align="center"><?php echo $buff['email'];?></td>
            </tr>
            <tr>
                <td align="center"><?php echo $buff['notel'];?></td>
            </tr>
            <tr>
                <td align="center">
                    <a href='?module=edit&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">Ubah Profil</a>
					<a href='?module=rak&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">Rak Buku</a>
                </td>
            </tr>
			
<?php
if(isset($_SESSION['username'])&&$buff['stat']=="1"){
?>
			<tr>
				<td align="center">
					<a href='?module=pesan&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">Lihat Pesan</a>
					<a href='?module=list&id=<?php echo $buff['id'];?>' class="btn btn-danger btn-xs">List Request</a>
				</td>	
			</tr>
<?php
}
?>
        </table>
<?php

    mysqli_close($mysqli);
    // session_destroy();
?>
