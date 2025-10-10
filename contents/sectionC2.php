<?php
$translation = include('./translations/sectionC2.php');
$questions = $translation['questions'];
?>

<div class="content">
    <div class="container-fluid">
        <form role="form" action="" method="post" id="form">
            <div class="card card-primary">
                <div class="card-header">
                    <b><?= $translation['title'] ?></b>
                </div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_a">C2.a. <?= $questions[1]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_a" id="c2_a" class="mt-2 form-control" placeholder=" Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_b">C2.b. <?= $questions[2]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_b" id="c2_b" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_c">C2.c. <?= $questions[3]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_c" id="c2_c" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_d">C2.d. <?= $questions[4]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_d" id="c2_d" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_e">C2.e. <?= $questions[5]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_e" id="c2_e" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_f">C2.f. <?= $questions[6]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_f" id="c2_f" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_g">C2.g. <?= $questions[7]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_g" id="c2_g" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_h">C2.h. <?= $questions[8]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_h" id="c2_h" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_i">C2.i. <?= $questions[9]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_i" id="c2_i" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_j">C2.j. <?= $questions[10]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_j" id="c2_j" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_k">C2.k. <?= $questions[11]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_k" id="c2_k" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>

<div class="px-5 mb-3 row">
    <div class="col-md-5 text-bottom">
        <label for="c2_l">C2.l. <?= $questions[12]; ?> </label>
    </div>
    <div class="col-md-5">
        <input type="text" name="c2_l" id="c2_l" class="mt-2 form-control" placeholder="Enter the expenditure in local currency">
    </div>
</div>,

<div class="card-footer">
                    <button type="reset" class="btn btn-default">Reset Button</button>
                    <button type="submit" name="btnsubmit" id="btnsubmit" class="float-right btn btn-primary">Submit
                        Button</button>
                </div>