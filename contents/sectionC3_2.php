<?php
$translation = include('./translations/sectionC3_2.php');
$questions = $translation['questions'];
?>

<div class="content">
    <div class="container-fluid">
        <form role="form" action="" method="post" id="form">
            <div class="card card-primary">
                <div class="card-header">
                    <b><?= $translation['title'] ?></b>
                </div>
                <div class="px-5 mb-3">
                    <div class="mb-3 row">
                        <b><?= $questions[1]; ?></b>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_a">C3.2.a.<?= $questions[2]['label']; ?></label>
                            <select name="c3_2_a" id="c3_2_a" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[2]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_b">C3.2.b.<?= $questions[3]['label']; ?></label>
                            <select name="c3_2_b" id="c3_2_b" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[3]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_c">C3.2.c.<?= $questions[4]['label']; ?></label>
                            <select name="c3_2_c" id="c3_2_c" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[4]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_d">C3.2.d.<?= $questions[5]['label']; ?></label>
                            <select name="c3_2_d" id="c3_2_d" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[5]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_e">C3.2.e.<?= $questions[6]['label']; ?></label>
                            <select name="c3_2_e" id="c3_2_e" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[6]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_f">C3.2.f.<?= $questions[7]['label']; ?></label>
                            <select name="c3_2_f" id="c3_2_f" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[7]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_g">C3.2.g.<?= $questions[8]['label']; ?></label>
                            <select name="c3_2_g" id="c3_2_g" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[8]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="c3_2_h">C3.2.h.<?= $questions[9]['label']; ?></label>
                            <select name="c3_2_h" id="c3_2_h" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                                <option value="" selected disabled>Choose</option>
                                <?php foreach ($questions[9]['options'] as $index => $value): ?>
                                    <option value="<?= $index; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-default">Reset Button</button>
                        <button type="submit" name="btnsubmit" id="btnsubmit" class="float-right btn btn-primary">Submit Button</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>