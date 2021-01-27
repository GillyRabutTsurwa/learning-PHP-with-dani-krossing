<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- If we're doing PHP in conjunction with our HTML code, we do this. -->
    <?php
    echo "Hello World from PHP";
    ?>
    <p>PHP en HTML sans escaping</p>
    <?php
    if (1 === 1) echo "Ca marche m'ais n'est pas idéal";
    ?>
    <p>et avec escaping</p>
    <?php {
    ?> <p>C'est mieux, mais je n'aime toujours pas</p> <?php } ?>

    <!-- prettier n'aime pas PHP a ce moment -->
    <!-- j'espere au future on utilise le page pur PHP, sans HTML -->
    <a href="main.php">Pure PHP Page</a>
</body>

</html>