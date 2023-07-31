<?php

require "../backend/connect.php";


$id = $_GET['id'];
$deletequery = "delete from cement where id = '$id'";

$query = mysqli_query($connect,$deletequery);

if ($query)
{
    ?>
    <script>
        alert("Deleted succesfully!");
        location.replace("managecement.php");
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