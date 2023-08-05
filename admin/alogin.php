<?php 
session_start();

?>

<?php 

require '../backend/connect.php';

if (isset($_POST['name']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "select * from admin where name='$name' and password='$password' limit 1" ;

    $result = mysqli_query($connect,$sql);

    if (mysqli_num_rows($result)==1)
    {
        $_SESSION['name'] = $name ;

        ?>

        <script>
            alert("Login Successful");
            location.replace("ahome.php");
            </script>

            <?php 
    }

    else {
        ?>
        <script>
            alert("Incorrect Username or password")
        </script>
        <?php 
    }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login page</title>
    <script  src="https://cdn.tailwindcss.com/3.3.0"></script>
    <!-- <style>
        head,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 250, 223);

        }

        input[type='checkbox'] {
            margin-left: 45px;
            margin-top: 8px;
            width: 15px;
            height: 15px;
        }

        #login {
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
            margin-left: 440px;
            margin-top: 50px;
            border: none;
            width: 370px;
            height: 420px;
            background-color: rgba(255, 255, 255, 0.717);
            border-radius: 15px;
            padding-left: 15px;
        }

        .log::placeholder {
            color: black;
        }

        .log {
            background-color: white;
            outline: none;
            margin-left: 32px;
            margin-top: 25px;
            margin-right: 50px;
            padding: 8px 15px;
            border: none;
            border-radius: 17px;
            width: 252px;
            box-shadow: 2px 2px 2px rgb(77, 76, 76);

        }

        #sub {
            margin-top: 20px;
            padding: 6px 75px;
            border: none;
            text-decoration: none;
            margin-left: 33px;
            border-radius: 15px;
            background-image: url(nav/aq7.jpg);
            background-position: center;
            background-size: cover;
            /*linear-gradient(to right,red,white);*/
            color: rgb(0, 0, 0);
            width: 280px;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
        }

        #sub:hover {
            color: rgb(255, 255, 255);
        }

        .btn {
            margin-left: 33px;
            margin-top: 10px;
            width: 121px;
            border-radius: 17px;
            font-size: 15px;
            padding: 5px 15px 7px 15px;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(236, 201, 48);
            letter-spacing: 1px;
            color: rgb(0, 0, 0);
            border: none;
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
        }

        .btn:hover {
            border: none;
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
        }

        .btn a {
            text-decoration: none;
            color: black;
        }

        .btn1 {
            font-size: 10px;
            text-align: center;
            width: 280px;
            margin-top: 20px;
            margin-left: 32px;
            padding: 3px 0px 8px 0px;
            border: none;
            border-radius: 17px;
            background-color: white;
            box-shadow: 2px 2px 5px rgb(115, 114, 114);
        }

        .btn1:hover {
            background-color: rgb(237, 250, 246);
        }

        #gender {
            margin-left: 62px;
            margin-top: 30px;
            margin-right: 60px;
            padding: 7px 66px;
            border-radius: 15px;
            border: 1.5px solid black;
            outline: none;
            width: 355px;
            text-align: center;
        }

        #sub:hover {
            background-color: rgb(255, 212, 58);
        }

        .img {
            margin-left: 0px;

        }

        .b {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            margin-left: 35px;
        }

        #line {
            margin-top: 15px;
            display: inline-flex;
        }

        #line2 {
            margin-top: 15px;
            display: inline-flex;
        }

        #or {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            margin: -2px 10px;
            font-weight: bold;
        }

        h2 {
            color: rgb(0, 0, 0);
            padding-top: 15px;
            margin: 0px 0px 0px 140px;
            font-weight: bolder;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style> -->
</head>

<body class="bg-yellow-200 flex justify-center item-center">
    <div id="login" class="mt-28 w-[400px] bg-white h-72 rounded-md shadow-md shadow-gray-400">
        <h2 class="text-center text-2xl font-bold pt-8 pb-4">Admin Login</h2>
        <div id="signin">
            <form class="text-center" method="post">
                <input class="border-2 placeholder:text-black border-yellow-400 w-72 px-2 py-1 rounded-md outline-none my-3"  type="text" name="name" placeholder="name" required><br>
                <input class="border-2 placeholder:text-black border-yellow-400 w-72 px-2 py-1 rounded-md outline-none my-3"  type="password" name="password" placeholder="password" required><br>
                <input class=" w-72 px-2 py-1 hover:bg-yellow-300 text-lg rounded-md bg-yellow-400 font-bold my-3" type="submit" value="Login" name="submit">
            </form>
        </div>
        
    </div>
    
</body>

</html>


