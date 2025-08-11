<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // PHP code goes here
    echo"Hello World";
    ?>
    <?php
    $h3_color="green";
    $name="John Doe";
    echo "<h1 style='color:blue;'>my name is $name</h1>";
    ?>
    <H1 style="color: orange;">
        my brother name is <?php echo $name; ?>
    </H1>
    <h2 style="color:blueviolet">
        my son name is <?php echo $name; ?>
    </h2>
    <h3 style="color:green">my daughter name is <?php echo $name; ?></h3>
    <h3 style="color:purple">my pet name is <?php echo $name; ?></h3>
    <h3 style="color:teal">my favorite plant name is <?php echo $name; ?></h3>
</body>
</html>