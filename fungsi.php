<?php

// $conn=mysqli_connect("localhost","root","","kub");

// function show_user(){
//     global $conn;
//     $final=[];
//     $hasil= mysqli_query($conn, "SELECT * FROM adm");
//     while($data= mysqli_fetch_assoc($hasil)){
//         $final[]= $data;
    
//     }
//     return $final;
// }

class register{
    function execute($data){
  
    global $conn;
  
    $id = $data["id"];
    $email = $data["email"];
    $password = $data["txt_pass"];
    $name = $data["txt_nama"];
    $level = 1;
  
    $query = "INSERT INTO administrasi VALUES ('$id','$email','$password','$name',$level)";
  
    mysqli_query($conn, $query);
  
    return mysqli_affected_rows($conn);
  
    }
  }
?>