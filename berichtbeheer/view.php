<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    $query = " SELECT * FROM `messages` ";
    $result = mysqli_query($conn, $query);

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Records</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>

    <style>
        table {
            border: 2px solid;
        }

        table tr {
            border: 5px solid;
        }

        table td {
            border: 1px solid;
        }
    </style>


    <body>

        <div class="container">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Naam</td>
                    <td>Email</td>
                    <td>Telefoonnummer</td>
                    <td>Categorie</td>
                    <td>Beschrijving</td>
                    <td>Delete</td>
                </tr>

                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    $MessageID = $row['id'];
                    $MessageName = $row['name'];
                    $MessageEmail = $row['email'];
                    $MessageNumber = $row['number'];
                    $MessageCategory = $row['category'];
                    $MessageDescription = $row['description'];

                ?>

                    <tr>
                        <td><?php echo $MessageID ?></td>
                        <td><?php echo $MessageName ?></td>
                        <td><?php echo $MessageEmail ?></td>
                        <td><?php echo $MessageNumber ?></td>
                        <td><?php echo $MessageCategory ?></td>
                        <td><?php echo $MessageDescription ?></td>

                        <td><a href="delete.php?Del=<?php echo $MessageID ?>">Delete</a></td>
                    </tr>




                <?php
                }
                ?>

            </table>
            <a href="../adminpagina/index.php"> Terug naar de adminpagina </a>
        </div>

        </form>

    </body>

    </html>



<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>