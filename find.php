<?php
$home = file_get_contents('http://127.0.0.1/abc/credit.html');//IMAGINE THIS IS REALLY HOME.PHP
$homePageName = "credit.html";//JUST HERE TO SHOW AN EXAMPLE
$search = $_POST['findMe'];
//$search = "example";//THIS WOULD WORK, BUT I WAS SHOWING HOW TO USE FORM

//IF WORD FOUND IN HOME PAGE
if (stripos($home, $search) !== false) {
    header("Location: index.html");
}

else
{
echo "word not found";
}
