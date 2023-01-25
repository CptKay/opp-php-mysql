<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <?php
        echo "Hello, we are starting to work with Databases and PHP PDO!"; 
    ?>

<?php
include "./includes/connector.php";

?> 

<div class="container">
        <div class="row">
            <h2>Library</h2>
            <table class="table table-hover">
                <!-- Tabellenkopf-->
                <thead>
                    <tr>
                    <?php
                       include "./includes/tableHeader.php"; 
                    ?>
                    </tr>
                </thead>
 
                <tbody>
                    
                    
                    <?php
                       include "./includes/tableData.php"; 
                    ?>
                        
                   
                    <?php
                    
                    ?>
                </tbody>
            </table>
 
           <!--  <input class="btn btn-primary"
                    type="submit" value="Submit"> -->
        </div>
    </div>
    
</body>

</html>