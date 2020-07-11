<?php
session_start();
global $dbconn;
connectionDBB();
function connectionDBB(){
    global $dbconn;
    $dbconn=mysqli_connect('localhost','root','','projektiweb');
    if(!$dbconn){
        die("Koneksioni me DB nuk u be!". mysqli_error($dbconn));
    }
}


function login($email,$fjalekalimi){
    global $dbconn;
    $sql="SELECT antariid, emri, mbiemri, telefoni, email,fjalekalimi,roli FROM antaret ";
    $sql.=" WHERE email='$email' AND fjalekalimi='$fjalekalimi'";
    $result=mysqli_query($dbconn,$sql);
    if($result){
        $antari=array();
        $data=mysqli_fetch_assoc($result);
        $antari['antariid']=$data['antariid'];
        $antari['emridhembiemri']=$data['emri'] . " " . $data['mbiemri'];
        $antari['roli']=$data['roli'];
        $_SESSION['antari']=$antari;
        header('Location: home.php');
    }else{
        die("Nuk arrita te marr shenimet!". mysqli_error($dbconn));
    }
}
 
