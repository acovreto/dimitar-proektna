<?php
// session_start();
include('server.php');



if (isset($_POST['submit']) && !isset($_SESSION['username'])) {
    echo "<script>alert('You must be signed to write comments! Please sign in!')</script>";
    header("Location: sign-in.php");
}
if (isset($_SESSION['username'])) {

    if (isset($_POST['submit'])) {
        $text = strip_tags($_POST['text']);
        if (empty($text)) {
            array_push($errors, "Empty comment!");
        }
        $author = $_SESSION['username'];

        $query = "INSERT INTO comments(author,text )
  VALUES('$author', '$text')";
        mysqli_query($db, $query);
    }
    unset($author);
    unset($_POST['text']);
    header("Location: index.php#comments");
}
