<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:home.php');
}
?>
    <div>
    <center>
        <h1>silahkan login</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <tr>
                        <td>pasword</td>
                        <td><input type="password"></td>
                    </tr>
                </tr>
            </table>
            <button type="submit" name="login"><span>login</span></button>
        </form>
    </center>
    </div>
    <?php
    if(isset($_SESSION['message'])){
        unset($_SESSION['message']);
    }
    ?>
</body>
</html>