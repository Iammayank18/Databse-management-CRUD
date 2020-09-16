<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CHECK DATA</title>
</head>

<body>

    <div class="heading">
        <h1>LIST OF STUDENTS</h1>
    </div>
    <div class="main">
        <div class="menu">
            <ul>
                <li>
                    <a href="index.php">BACK TO HOME</a>
                </li>
            </ul>

        </div>
        <br>
        <div class="data">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>CLASS</th>
                        <th>AGE</th>
                        <th>EDIT</th>
                        <TH>DELELTE</TH>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "connection.php";

                    $selectData = "SELECT * FROM studentDetails";
                    $conn = mysqli_query($conn, $selectData);
                    $num = mysqli_num_rows($conn);

                    while ($fetch = mysqli_fetch_array($conn)) {


                    ?>
                        <tr>
                            <td><?php echo $fetch['Id']; ?></td>
                            <td><?php echo $fetch['Name']; ?></td>
                            <td><?php echo $fetch['Class']; ?></td>
                            <td><?php echo $fetch['Age']; ?></td>
                            <td><a href='edit.php?Id=<?php echo $fetch['Id']; ?>'>EDIT</a></td>
                            <td><a href='delete.php?Id=<?php echo $fetch['Id']; ?>'>DELETE</a></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    </div>
</body>

</html>