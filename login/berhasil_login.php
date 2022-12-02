<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Biodata</title>
</head>

<body style="background-color:pink ;">
    <p>
        <h3>Biodataku</h3>
        <br>
        <ul>
            <li>Nama            : Satria Shafa Helga</li>
            <li>TTL             : Blitar 13,september 2004</li>
            <li>Jurusan         : TKJ </li>
	    <li>Kelas           : 12 </li>
            <li>Kelas Industri  : Sysadmin</li>
        </ul>  
    </p>

    <p>	
Logout dan kembali ke halaman login
<a href="logout.php" class="btn">Logout</a>
    </p>

</body>

</html>
