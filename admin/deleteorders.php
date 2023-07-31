<?php

require "../backend/connect.php";


$id = $_GET['orderid'];
$deletequery = "delete from orders where orderid = '$id'";

$query = mysqli_query($connect,$deletequery);

if ($query)
{
    ?>
    <script>
        alert("Deleted succesfully!");
        location.replace("manageorders.php");
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