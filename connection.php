<?php

$server = "localhost";
$user = 'root';
$password = "";
$database = 'studentData';

$conn = mysqli_connect($server, $user, $password, $database);
if ($conn) {
	# cechode...
	// echo "connection succesfull";
?>
	<script>
		alert("connection succesfull !");
	</script>

<?php
} else {
	# code...
	// echo "connection lost";
?>
	<script>
		alert("connection LOST !");
	</script>
<?php

}


?>