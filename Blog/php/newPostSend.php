<?php

require_once ('../config/init.php');

if (!empty($_POST['userName'])) {
    if (preg_match_all("^[A-Z ÁÉÚŐÓÜÖ][a-z áéúőóüö]+^", $_POST['userName'])) {
        if (!empty($_POST['headline'])) {
            if (preg_match_all("^[A-Z ÁÉÚŐÓÜÖ][a-z áéúőóüö]+^", $_POST['headline'])) {
                if (!empty($_POST['text'])) {
                    
                    $name = $_POST['userName'];
                    $headline = $_POST['headline'];
                    $text = $_POST['text'];
                    
                    $sql = "INSERT INTO `posts`(`userName`, `headline`, `text`, `date`) VALUES ('$name','$headline','$text', CURRENT_TIMESTAMP)";
                    if ($conn->query($sql) === TRUE) {
                        echo "<script>window.location='posts.php'</script>";
                    }
                    else{
                        echo "<script>alert('Sikertelen rögzítés! Kattintson az OK gombra a folytatáshoz!'); window.location='newPost.php'</script>";
                    }
                } else {
                    echo "<script>alert('A szöveg mező nem lehet üres! Kattintson az OK gombra a folytatáshoz!'); window.location='newPost.php'</script>";
                }
            } else {
                echo "<script>alert('A cím nagybetűvel kell hogy kezdődjön! Kattintson az OK gombra a folytatáshoz!'); window.location='newPost.php'</script>";
            }
        } else {
            echo "<script>alert('A cím nem lehet üres! Kattintson az OK gombra a folytatáshoz!'); window.location='newPost.php'</script>";
        }
    } else {
        echo "<script>alert('A név nagybetűvel kell hogy kezdődjön, és tartalmaznia kell szóközt is! Kattintson az OK gombra a folytatáshoz!'); window.location='newPost.php'</script>";
    }
} else {
    echo "<script>alert('Töltse ki a név mezőt! Kattintson az OK gombra a folytatáshoz!'); window.location='newPost.php'</script>";
}

