<?php include("includes/header.php") ?>

  <?php include("includes/nav.php") ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title>MovieDB</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <style>
            body {
            padding-top: 90px;
            background-color: lightblue;
            font-family: Verdana;
            }


            #create-form, #update-form, #delete-form {
                display: none;
            }
            title{
                color: darkblue;
                text-align: center;
                font-family: verdana;
                font-size: 30px
            }
            .main-div{
                width: 80vw;
                margin: 0 auto;
            }

            h2{
                text-align: center;
            }

            table{
                margin: 15px auto;
                width: 50 vw;
                text-align: center;
            }

            table tr td{
                padding: 12px;
            }

            table th{
                text-align: center;
            }

            .content-wrapper{
                width: 100%;
                margin: 0 auto;
                text-align: center;
            }

            #create-button, #update-button, #delete-button{
                width: 160px;
                height: 38px;
                background-color: blue;
                color: #FFFFFF;
                border-radius: 4px;
                border: 0.5px solide white;
                letter-spacing: 2px;
                cursor: pointer
            }

            .small-button{
                width: 76px;
                height: 30px;
                background-color: green;
                color: #FFFFFF;
                border-radius: 4px;
                border: none;
                cursor: pointer

            }

            input[type="text"]{
                margin: 6px;
                width: 260px;
                height: 32px;
                padding: 4px
            }

        </style>
    </head>
    <body>
        <div class="main-div">
        <?php require_once 'create.php';
        ?>

                <div>
                    <h2 style="text-align:center;">MovieDB</h2>

                    <?php
                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $database = 'movflicks_database';
                    
                        // Create connection to database
                        $connection = mysqli_connect($servername, $username, $password, $database);
                        
                        // Check if connection is unsuccessful
                        if(!$connection){
                            die('Unsuccessful connection:'.mysqli_connect_error());
                        }

                        //  Query the table for the records
                        $sql = "SELECT * FROM movflicks_table"; // Set up our query
                        $result = mysqli_query($connection, $sql);  // Store result into $result
                        $rowCount = mysqli_num_rows($result);   // Returns the numb of rows -> $rowCount

                        if($rowCount > 0){
                            echo"
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Record ID</th>
                                            <th>Title</th>
                                            <th>Genre</th>
                                            <th>Director</th>
                                        </tr>
                                    </thead>
                            ";
                        }

                    ?>  <!-- End the PHP code block -->

                    <?php
                        while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['title']?></td>
                                <td><?php echo $row['genre']?></td>
                                <td><?php echo $row['director']?></td>
                            </tr>
                        <?php endwhile ?>
                    </table>


                </div>
                <div class="content-wrapper">
                    <button id="create-button">Create Record</button>
                    <button id="update-button">Edit Record</button>
                    <button id="delete-button">Delete Record</button>

                    <form action="create.php" method="POST" id="create-form">
                        <input type="text" placeholder="Enter movie title" name="create-title"/><br/>
                        <input type="text" placeholder="Enter movie genre" name="create-genre"/><br/>
                        <input type="text" placeholder="Enter movie director" name="create-director"/><br/>
                        <input type="submit" value="Save" name="create-button" class="small-button"/>
                    </form>

                    <form action="update.php" method="POST" id="update-form">
                        <input type="text" placeholder="Enter record ID" name="update-ID"/><br/>
                        <input type="text" placeholder="Enter movie title" name="update-title"/><br/>
                        <input type="text" placeholder="Enter movie genre" name="update-genre"/><br/>
                        <input type="text" placeholder="Enter movie director" name="update-director"/><br/>
                        <input type="submit" value="Save" name="submit-update" class="small-button"/>
                    </form>

                    <form action="delete.php" method="POST" id="delete-form">
                        <input type="text" placeholder="Enter record ID" name="delete-ID"/><br/>
                        <input type="submit" value="Save" name="submit-delete" class="small-button"/>
                    </form>


                </div>
            </div>
        <script src="script.js"></script>
    </body>
</html>

<?php include("includes/footer.php") ?>