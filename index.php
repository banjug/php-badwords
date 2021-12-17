<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        $lorem = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate accusamus nemo deleniti natus dolores dolorem unde, officia sint incidunt vero modi soluta culpa ipsum? Quos quia in delectus ullam non!'

    ?>
    <h1>Stringa:</h1>
    <p>
       <?php echo $lorem ?>
    </p>
    <h2>Lunghezza stringa:</h2>
    <p>
        <?php echo strlen($lorem) ?>
    </p>

    
</body>
</html>