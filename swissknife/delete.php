<?php

/*
1 - isset to call a function
2 - create a connection to the database
3 - store the user input into a variable
4 - set up our DELETE query, run it
5 - close connection
6 - redirect the user back to flicks.php
*/
function deleteRecord(){
       // Create a connection to our DB
       $servername = 'localhost';
       $username = 'root';
       $password = '';
       $database = 'movflicks_database';
               
       // Create connection to database
       $connection = mysqli_connect($servername, $username, $password, $database);

       // Create ID variable to store user ID input
       $id = $_POST['delete-ID'];

       // Define SQL Query
       $sql = "DELETE FROM movflicks_table WHERE id='$id'";

       // Execute SQL Query
       $deleteQuery = mysqli_query($connection, $sql);

       if(!$deleteQuery){
           echo 'Error :'.$sql.mysqli_error($connection);
       }

       // Close DB connection
       mysqli_close($connection);

       // Redirect to flicks.php
       header ('location: flicks.php');

}

if(isset($_POST['submit-delete'])){
    deleteRecord();
}

?>