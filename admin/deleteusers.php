<?php 
require "../backend/connect.php";


$id = $_GET['userid'];
$deletequery = "delete from users where userid = '$id'";

$query = mysqli_query($connect,$deletequery);

if ($query)
{
    ?>
    <script>
        alert("Deleted succesfully!");
        location.replace("manageusers.php");
    </script>
    <?php
}

else 
{
    ?>
    <script>
        alert("Deletion failed!");
    </script>
    <?php
}

?>


