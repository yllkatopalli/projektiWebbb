<?php include_once "inc/header.php";?>
<?php include_once "inc/funk.php";?>
<head>
    
    
</head>
<body>

<h3 class="titujt">Lista e Antareve</h3>
           
            <table id="members" >    
                
                <tr><th>Emri dhe Mbiemri</th><th>Telefoni</th><th>Email</th> <th></th> <th></th></tr>
                <?php
                    $anetaret = merrAntaret();
                    while ($antari = mysqli_fetch_assoc($anetaret)) {
                        $aid = $antari["antariid"];
                        echo "<tr>";
                        echo "<td>".$antari["emri"].$antari["mbiemri"] ."</td>";
                        echo "<td>".$antari["telefoni"]."</td>";
                        echo "<td>".$antari["email"]."</td>";
                        echo "<td><a href='antaret/modifiko_anetar.php?aid={$aid}'>Edit</a></td>";
                        echo "<td><a href='antaret/fshij_anetar.php?aid={$aid}'>Delete</a></td>";
                        echo "</tr>";
                    }
                ?>
                
            <tr><th></th><th></th><th></th> <th></th> <th><a href="antaret/shto_anetar.php">Shto</a></th></tr>
            </table>
                    <br><br>
<h3 class="titujt">Lista e trajnimeve per antarin: <?php echo $_SESSION['antari']['emridhembiemri']; ?></h3>            
        <table id="members">    
        <tr><th>Emri i Projektit</th><th>data</th><th>pershkrimi</th> <th>Edit</th> <th>Delete</th></tr>
        <?php
            $trajnimet = merrTrajnimet($_SESSION['antari']['antariid']);
            while($trajnimi = mysqli_fetch_assoc($trajnimet)){
                echo "<tr>";
                echo "<td>". $trajnimi['emri']. "</td>";
                echo "<td>". $trajnimi['data']. "</td>";
                echo "<td>". $trajnimi['pershkrimi']. "</td>";
                echo "<td><a href=''>Edit</a></td> ";
                echo "<td><a href=''>Delete</a></td> ";
                echo "</tr>";
            }
        ?>
        <tr><th></th><th></th><th></th> <th></th> <th><a href="antaret/shto_anetar.php">Shto</a></th></tr>
            </table>    
        
</body>
