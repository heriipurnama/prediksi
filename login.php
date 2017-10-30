<?php

$error=''; 

include "koneksi.php";
//koneksi();
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    
   // $koneksi = $koneksi();
              
    $query = mysqli_query(koneksi(), "SELECT * FROM user WHERE username='$username' AND password='$password'");
    //print_r($query);
    //die();
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == 1)
        {  
            //header("Location: admin/halaman_admin.php");
            header("Location: Admin");
        }
        else if($row['level'] == 2)
        {
            header("Location: kaprodi/halaman_prodi.php");
        }
        else if($row['level'] == 3)
        {
            
            header("Location: wali/halaman_wali.php");
        }
		else if($row['level'] == 4)
        {
            
            header("Location: mhs/halaman_mhs.php");
        }
        else
        {
            $error = "Failed Login";
        }
    }
}           
?>