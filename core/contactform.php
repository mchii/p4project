<?php

if (isset($_POST['submit']) && $_POST['submit'] != "") {
    $name = $_POST['name'];
    $number = $_POST['phone'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    // Mailfunction
    if (isset($_POST['category']) && $_POST['category']) $category = ($_POST['category']);


    // zet de mail in de database
    require_once('db_conn.php');
    // if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
    //     echo 'Please Fill in the blanks';
    // } else {
    // $name = $_POST['name'];
    // $number = $_POST['phone'];
    // $mailFrom = $_POST['email'];
    // $message = $_POST['message'];

    $query = " INSERT INTO `messages` (`name` , `email`, `number`, `category`, `description`, `timestamp`) VALUES ('$name', '$mailFrom', '$number', '$category', '$message', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $query);
    // zet de mail in de database End



    switch ($category) {
        case 'goederen':
            // echo "<script>alert('goederen')</script>";
            $mailTo = "200535@student.glu.nl";
            break;
        case 'diensten':
            // echo "<script>alert('diensten')</script>";
            $mailTo = "200535@student.glu.nl";
            break;
        case 'levensmiddelen':
            // echo "<script>alert('levensmiddelen')</script>";
            $mailTo = "200535@student.glu.nl";
            break;
    }

    $subject = "Aanmelding hulp Oekraine";
    $headers = "From: " . $mailFrom;
    $txt = "U heeft een e-mail ontvangen van \n" . "emailadres: " . $mailFrom .

        $number = (($number != "") ?  "\ntelefoonnummer: $number" : "")

        .  "\n\n" . "Bericht: \n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    // Mailfunction End

    print("<script>
alert('Bedankt voor uw interesse. Wij nemen zo spoedig mogelijk contact met u op.');
window.location.href = './index.php';
</script>");
}
