<!-- your code goes here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <li><a href="index.html">Home</a></li>
    </ul>


    <?php
    $texts = [
        ["Lorem ipsum dolor sit amet."],
        ["Lorem ipsum dolor sit amet, consectetur adipisicing."],
        ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."],
    ];

    foreach($texts as $text);
        echo "<p> $text </p>";
    ?>


    <li><a href="index.html">iet uz php</a></li>
</body>
</html>