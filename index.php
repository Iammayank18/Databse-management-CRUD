<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="NUTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>

</head>

<body>

    <div class="heading">
        <h1>Fill Your data</h1>
    </div>
    <div class=main>
        <div class="menu">
            <ul>
                <li><a href="view.php">Read Data</a></li>

            </ul>
        </div>

        <div class="main">
            <form action="" method="post">
                <label for="">
                    Enter your name : <input type="text" name="name" id="">
                </label>
                <br>
                <label for="">
                    Enter your class : <input type="text" name="class" id="">
                </label>
                <br>
                <label for="">
                    Enter your age : <input type="text" name="age" id="">
                </label>
                <br> <!-- submmiting form data in database -->
                <input type="submit" value="Register" name="submit" onclick="msg()">
            </form>
        </div>
    </div>

</body>

</html>
<?php
include "connection.php";
include "postingdata.php";
?>