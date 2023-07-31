<?php

require "../backend/connect.php";


$id = $_GET['id'];
$deletequery = "delete from sand where id = '$id'";

$query = mysqli_query($connect,$deletequery);

if ($query)
{
    ?>
    <script>
        alert("Deleted succesfully!");
        location.replace("managesand.php");
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