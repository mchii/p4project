<?php
include("includes/header.php");
?>

<html>

<body>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <div id="main">
                            <form action="login.php" method="post">
                                <h2><b>Login<b /></h2><br />
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                                <label>User Name:</label>
                                <input type="text" name="uname" placeholder="User Name"><br />

                                <label>Password:</label>
                                <input type="password" name="password" placeholder="Password"><br /><br />

                                <button type="submit" class="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
include("includes/footer.php");
?>

</html>