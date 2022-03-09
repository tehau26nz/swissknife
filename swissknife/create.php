<?php

/*
if(isset($_POST['create-button'])){
    echo 'Working YES';
}*/

//Create record function
function createRecord(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'movflicks_database';

    // Create connection to database
    $connection = mysqli_connect($servername, $username, $password, $database);

    // Check for successful connection
    if(!$connection){
        die ('Connection unsuccessful:'.mysqli_connect_error());
    }else{
        echo 'Successful connection!';
    }

    // Storing userinput into variables
    $movieTitle = $_POST['create-title'];
    $movieGenre = $_POST['create-genre'];
    $movieDirector = $_POST['create-director'];

    // Inserting data in the table

    $sql = "INSERT INTO movflicks_table (title, genre, director) VALUES ('$movieTitle','$movieGenre','$movieDirector') ";

    // Check if inserting data is successful

    if(mysqli_query($connection, $sql)){
        echo '';
    }else{
        echo 'Error: '.$sql.mysqli_error($connection);
    }

    // Close the connection
    mysqli_close($connection);

    // Redirect to the main page flicks.php
    header( 'location: flicks.php');

}

if(isset($_POST['create-button'])){
        createRecord();
}
?>