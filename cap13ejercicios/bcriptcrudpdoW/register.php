<?php
require 'database.php';
if(isset($_POST['buttonSave'])) {
    $stmt = $conn->prepare('insert into account(username, password, fullName) values(:username, :password, :fullName)');
	$stmt->bindValue('username', $_POST['username']);
	$stmt->bindValue('password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	$stmt->bindValue('fullName', $_POST['fullName']);
	$stmt->execute();
	header('location:index.php');
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" name="fullName">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="Save" name="buttonSave">
                </td>
            </tr>
        </table>
</body>
</html>