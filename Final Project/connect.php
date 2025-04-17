<?php 
 // Connects to Our Database 
$link = new mysqli('localhost', 'kripperda', 'JoelleElaine2216', 'masterdirectory');

/* check connection */
if (mysqli_connect_errno()) {
    echo "Could not connect to database, please check your connection details";
    exit();
}

 ?> 