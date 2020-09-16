<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $age = $_POST['age'];

    $insertdata = "INSERT INTO studentDetails (Name, Class, Age) 
     VALUES ('$name','$class','$age')";

    $res = mysqli_query($conn, $insertdata);

    if($res) {
        # code...
?>
        <script>
            alert("Data uploaded successfully");
        </script>
    <?php


}

}

?>