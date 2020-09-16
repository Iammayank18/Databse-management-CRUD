<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="heading">
        <h1>
            Update your data
        </h1>
    </div>
    <div class="main">
        <div class="menu">
            <ul>
                <li> <a href="index.php" >Upload data</a> </li>
                <li> <a href="view.php" > Read data</a> </li>
            </ul>
        </div>
        <div class="main">

            <form action="" method="POST">

                <?php

                include "./connection.php";
                include "./editcode.php";
                // end here
                ?>
                <label for="">
                    Your Id : <input type="text" value="<?php echo $arrdata['Id']; ?>" name="name" id="">
                </label>

                <br>
                <label for="">
                    Enter your name : <input type="text" value="<?php echo $arrdata['Name']; ?>" name="name" id="">
                </label>
                <br>
                <label for="">
                    Enter your class : <input type="text" value="<?php echo $arrdata['Class']; ?>" name="class" id="">
                </label>
                <br>
                <label for="">
                    Enter your age : <input type="text" value="<?php echo $arrdata['Age']; ?>" name="age" id="">
                </label>
                <br> <!-- submmiting form data in database -->
                <input type="submit" value="Update" name="update" onclick="msg()">

            </form>

        </div>
    </div>
</body>

</html>