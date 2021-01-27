<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- If we're doing PHP in conjunction with our HTML code, we do this. -->
    <h2>Scalar Data Types</h2>
    <h3>String, Integers, Floats & Booleans</h3>





    <!-- p'tit bijou dans la leçon -->
    <form method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>

    <?php
    // we are setting name to the submitted value of the form, the syntaxe below is how we require it in PHP. Very different from javascript. 
    // so far PHP is coo.
    // faut pas savoir (même si je comprendre) et y demeurrer, on marche
    $name = $_GET["person"];
    echo $name . " is a boss";
    ?>

    <a href="main.php">Click to go to PHP Page</a>
</body>

</html>