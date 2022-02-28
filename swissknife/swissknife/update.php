<?php

/*
1 - isset to call a function
2 - create a connection to the database
3 - store the user input into variables
4 - set up our INSERT query, run it
5 - close connection
6 - redirect the user back to flicks.php
*/

function updateRecord(){
    // Create a connection to our DB
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'movflicks_database';
            
    // Create connection to database
    $connection = mysqli_connect($servername, $username, $password, $database);
    
    // Store userinput into variable
    $id = $_POST['update-ID'];
    $movieTitle = $_POST['update-title'];
    $movieGenre = $_POST['update-genre'];
    $movieDirector = $_POST['update-director'];

    // Define our UPDATE query, then run it
    $sql = "UPDATE movflicks_table SET title='$movieTitle', genre='$movieGenre', director='$movieDirector' WHERE id='$id'";
    $updateQuery = mysqli_query($connection, $sql); // Execute our SQL query

    if(!$updateQuery){
        echo 'Error :'.$sql.mysqli_error($connection);
    }

    // Close connection
    mysqli_close($connection);

    // Redirect to flicks.php
    header('location: flicks.php');

}

if(isset($_POST['submit-update'])){
    updateRecord();
}


?>