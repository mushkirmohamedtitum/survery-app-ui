<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container p-5">
        <?php
        if (isset($_GET['pg'])) {

            $filePath = './contents';
            include($filePath . "/" . $_GET['pg']);
        }
        ?>
    </div>


    <script src="/assets//js//bootstrap.min.js"></script>
</body>

</html>