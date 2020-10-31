<?php

require_once ('../config/init.php');

$html = file_get_contents("../html/headerMenuPosts.html");

$sql="SELECT * FROM `posts`";
$result=$conn -> query($sql);
if($result-> num_rows > 0){
    while($row = $result -> fetch_assoc())
    {
        $html .='<div class="container col-md-10"><br><br><br>'
                    . '<div class="card">'
                        . '<div class="card-header">'
                            . '<h2 class="card-title headline">'.$row['headline'].'</h2>'
                            . '<h4>'.$row['userName'].'</h4>'
                        . '</div>'
                        . '<div class="card-body">'
                            . '<p class="text">'.$row['text'].'</p>'
                            . '<p class="date">'.$row['date'].'</p>'
                        . '</div>'
                    . '</div><br>'
                . '</div>';
    }
}
else{
    $html .= '<h1 style="text-align: center; font-color: lightgray; margin-top: 270px;">Nincsenek még bejegyzések!</h1>';
}

$html .= file_get_contents("../html/footer.html");

echo $html;

$conn->close();