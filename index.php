<?php
$translation = include('./translations/sectionC1.php');
$questions = $translation['questions'];

$routeArr = include('./route.php');
// var_dump($routeArr);
// demo
?>

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

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Path</th>
                    <td></td>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($routeArr as $index => $data) {
                    echo '<tr>
            <th scope="row">' . ($index + 1) . '</th>
            <td><a href="./page.php?pg=' . $data . '">' . $data . '</a></td>
          </tr>';
                }

                ?>

            </tbody>
        </table>
    </div>


    <script src="/assets//js//bootstrap.min.js"></script>
</body>

</html>