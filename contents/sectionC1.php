<?php
$translation = include('./translations/sectionC1.php');
$questions = $translation['questions'];
?>

<div class="content">
  <div class="container-fluid">
    <form role="form" action="" method="post" id="form">
      <div class="card card-primary">
        <div class="card-header">
          <b><?= $translation['title'] ?></b>
        </div>

        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th colspan="4"><b><?= $questions[1]; ?></b></th>
              </tr>
            </thead>

            <tbody>
              <!-- C1.a -->
              <tr>
                <td colspan="3"><?= $questions[2]; ?></td>
                <td><input type="number" name="c1_a" id="c1_a" class="form-control" placeholder="c1_a" /></td>
              </tr>

              <!-- C1.b and C1.c - Farm income -->
              <tr>
                <td rowspan="2"><?= $questions[3]['category']; ?></td>
                <td><i><?= $questions[3]['rows'][0]['sub']; ?></i></td>
                <td><?= $questions[3]['rows'][0]['desc']; ?></td>
                <td><input type="number" name="c1_b" id="c1_b" class="form-control" placeholder="c1_b" /></td>
              </tr>

              <tr>
                <td><i><?= $questions[3]['rows'][1]['sub']; ?></i></td>
                <td><?= $questions[3]['rows'][1]['desc']; ?></td>
                <td><input type="number" name="c1_c" id="c1_c" class="form-control" placeholder="c1_c" /></td>
              </tr>

              <!-- C1.d and C1.e - Non-farm income -->
              <tr>
                <td rowspan="2"><?= $questions[4]['category']; ?></td>
                <td><i><?= $questions[4]['rows'][0]['sub']; ?></i></td>
                <td><?= $questions[4]['rows'][0]['desc']; ?></td>
                <td><input type="number" name="c1_d" id="c1_d" class="form-control" placeholder="c1_d" /></td>
              </tr>

              <tr>
                <td><i><?= $questions[4]['rows'][1]['sub']; ?></i></td>
                <td><?= $questions[4]['rows'][1]['desc']; ?></td>
                <td><input type="number" name="c1_e" id="c1_e" class="form-control" placeholder="c1_e" /></td>
              </tr>

              <!-- C1.f - Other income -->
              <tr>
                <td><?= $questions[5]['category']; ?></td>
                <td><i><?= $questions[5]['rows'][0]['sub']; ?></i></td>
                <td><?= $questions[5]['rows'][0]['desc']; ?></td>
                <td><input type="number" name="c1_f" id="c1_f" class="form-control" placeholder="c1_f" /></td>
              </tr>
            </tbody>
          </table>

          <!-- C1.g -->
          <div class="px-5 mb-3">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="c1_g">C1.g. <?= $questions[6]['label']; ?></label>
              </div>
              <div class="col-md-6">
                <select name="c1_g" id="c1_g" class="form-control" required>
                  <option value="" selected disabled>Choose</option>
                  <?php foreach ($questions[6]['options'] as $index => $value): ?>
                    <option value="<?= $index + 1; ?>"><?= $value; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>

          <!-- C1.h -->
          <div class="px-5 mb-3">
            <div class="mb-3 row">
              <div class="col-md-6">
                <label for="c1_h">C1.h. <?= $questions[7]['label']; ?></label>
              </div>
              <div class="col-md-6">
                <select name="c1_h" id="c1_h" class="form-control" required>
                  <option value="" selected disabled>Choose</option>
                  <?php foreach ($questions[7]['options'] as $index => $value): ?>
                    <option value="<?= $index + 1; ?>"><?= $value; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
           </div>
        </div>
        <div class="card-footer">
                    <button type="reset" class="btn btn-default">Reset Button</button>
                    <button type="submit" name="btnsubmit" id="btnsubmit" class="float-right btn btn-primary">Submit
                        Button</button>
                </div>
      </div>
    </form>
  </div>
</div>
