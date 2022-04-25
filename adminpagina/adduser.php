<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h3> Gebruikers Toevoegen </h3>
                        </div>
                        <div class="card-body">
                            <form action="insert.php" method="POST">
                                <input type="text" class="form-control" placeholder=" Gebruikersnaam " name="username"><br><br>
                                <input type="email" class="form-control" placeholder=" Emailadres " name="email"><br><br>
                                <input type="text" class="form-control" placeholder=" Wachtwoord " name="password" 1><br><br>
                                <button name="submit"> Voeg gebruiker toe </button>
                            </form>
                            <a href="./view.php"> Beheer alle gebruikers </a>
                        </div>
                    </div>
                </div>
            </div>
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