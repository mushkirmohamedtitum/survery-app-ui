<?php
$translation = include('./translations/sectionC1.php');
$questions = $translation['questions'];
?>

<div class="mb-3 row">
    <div class="col-md-6 text-bottom">
        <label for="b1_5">B1.5. <?= $questions[1]['label']; ?> </label>
    </div>
    <div class="col-md-6">
        <select name="b1_5" id="b1_5" class="form-control">
            <option value="" selected disabled>Choose</option>
            <?php
            foreach ($questions[1]['options'] as $index => $value) {
                echo "<option value='$index'> $value </option>";
            }

            ?>
        </select>
    </div>
</div>