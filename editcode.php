 
 <?php
 
 $s_id = $_GET['Id'];
            $showquery = "SELECT * FROM studentDetails WHERE Id={$s_id}";
            $showdata = mysqli_query($conn, $showquery) or die("query unsuccessful");
            $arrdata = mysqli_fetch_array($showdata);

            // posting data in database

            if (isset($_POST['update'])) {

                $sid = $_GET['Id'];
                $name = $_POST['name'];
                $class = $_POST['class'];
                $age = $_POST['age'];

                // $insertdata = "INSERT INTO studentDetails (Name, Class, Age) 
                //   VALUES ('$name','$class','$age')";

                $updatequery = "UPDATE studentDetails
                  SET Id='$sid',
                  Name='$name',Class='$class',Age='$age'
                  WHERE Id=$sid";

                $res = mysqli_query($conn, $updatequery);

                if ($res) {
                    # code...
            ?>
                    <script>
                        alert("Data updated successfully");
                    </script>
            <?php


                }
            }

            // end here
            ?>