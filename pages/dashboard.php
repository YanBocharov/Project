<?php
include("auth_session.php");
?>
<?php
require_once('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Клиентская страница</title>
    <link rel="stylesheet" href="../styles/css/dashboard.min.css" />
    <link rel="stylesheet" href="../styles/css/style.min.css">
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date and time</th>
        </tr>

        <?php
        $products = mysqli_query($connect, query: "SELECT * FROM `users`");
        $products = mysqli_fetch_all($products);
        foreach ($products as $product) {
            echo '
                    <tr>
                        <td>' . $product[0] . '</td>
                        <td>' . $product[1] . '</td>
                        <td>' . $product[2] . '</td>
                        <td>' . $product[4] . '</td>
                    </tr>
                ';
        }
        ?>


    </table>
</body>

</html>