<?php
$labels = ['blackheads'];
$content =  "https://firebasestorage.googleapis.com/v0/b/facialskindiseases-7f368.appspot.com/o/acne%2Fblackheads%2F11.jpg?alt=media&token=d051db56-b2e1-4faf-b502-e873fbcf5530";

$size = getimagesize($content);
var_dump($size);


