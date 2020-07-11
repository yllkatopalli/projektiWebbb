<?php
    ob_start();
    require "funksionet.php";
    require "funk.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMP Projekti</title>
    <link rel="stylesheet" href="styleee.css">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="emri">
                <h1>comWEB</h1>
            </div>
            <nav>
			    <ul>
                    <li><a href='home.php'>Home</a></li>
                    <li><a href='about.php'>About</a></li>
                    <li><a href='services.php'>Services</a></li>
                    <li><a class="register" href='signin.php'>Sign In/Register</a></li> 
                    
                    <?php if(isset($_SESSION['antari'])){
                     
                        if($_SESSION['antari']['roli'] == 1){
                     echo "<li><a href='antaret.php'>Anetaret</a></li>";       
                        }
                    } ?>                              
                            
                </ul>
            </nav>
        </div>
    </header>
</body>                                                                               