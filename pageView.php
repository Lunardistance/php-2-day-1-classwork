<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
   session_start();
    $data = $_SESSION["e"];

    $array = explode(",", $data);

    $displayed = "<ul>";
        foreach ($array as $value){
            echo "<li>".$value."</li>";
        }

    $displayed .= "</ul>";
?>

<a href="page.php?e=">back</a>
</body>
</html>