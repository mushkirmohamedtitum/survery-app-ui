<?php
$translation = include('./translations/sectionC3.php');
$questions = $translation['questions'];
?>

<div class="content">
    <div class="container-fluid">
        <form role="form" action="" method="post" id="form">
            <div class="card card-primary">
                <div class="card-header">
                    <b><?= $translation['title'] ?></b>
                
    <div>
               <!-- Household Food Consumption -->
      <div>
            <p>
            <label for="c3_1_1">C3.1.1.<?= $questions[1]['label']; ?></label>
            <select name="c3_1_1" id="c3_1_1" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                  <option value="" selected disabled>Choose</option>
                  <?php foreach ($questions[1]['options'] as $index => $value): ?>
                    <option value="<?= $index; ?>"><?= $value; ?></option>
                  <?php endforeach; ?>
                </select>
                <label for="c3_1_a">C3.1.a.<?= $questions[2]; ?>
                <input type="number" id="c3_1_a" name="c3_1_a" class="form-control" placeholder="Number of days">
            </p>
        </div> 

        <div>
            <p>
            <label for="c3_2">C3.2.<?= $questions[3]['label']; ?></label>
            <select name="c3_2" id="c3_2" class="form-control" required style="width: 100px; padding: 3px; font-size: 0.9em;">
                  <option value="" selected disabled>Choose</option>
                  <?php foreach ($questions[3]['options'] as $index => $value): ?>
                    <option value="<?= $index; ?>"><?= $value; ?></option>
                  <?php endforeach; ?>
                </select>
                <label for="c3_2a">C3.2a.<?= $questions[4]; ?>
                <input type="number" id="c3_2a" name="c3_2a" class="form-control" placeholder="Your Age">
            </p>
        </div>

        <div>
            <p>
                 <label for="c3_2_2">C3.2.2.<?= $questions[5]; ?>
                <input type="number" id="c3_2_2" name="c3_2_2" class="form-control" placeholder="Number of members">
            </p>
        </div>
    </div>
    
        <div>
            <div class="table-header">
                    <b><?= $questions[6] ?></b>
        </div>
           <table>
            <thead>
                <tr>
            <th colspan="7"><b><?= $data['table_instruction'];?></b></th>
        </tr>
                <tr>
                    <?php foreach ($data['table_headers'] as $header): ?>
                        <th><?= $header; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['food_groups'] as $group_name => $group_data): ?>
                    <tr>
                        <td><?= $group_name; ?></td>
                        
                        <td style="text-align: left; font-size: 0.9em;"><?= $group_data['examples']; ?></td>
                        
                        <?php 
                        // Loop through the 5 codes/questions for this row
                        $input_types = ['number', 'number', 'number', 'number', 'number'];
                        $placeholders = ['0-7', 'Kg', '%', '%', 'Cost'];
                        
                        foreach ($group_data['codes'] as $index => $code): 
                        ?>
                            <td>
                                <div style="font-size: 0.8em; margin-bottom: 3px;">[<?= $code; ?>]</div>
                                
                                <input 
                                    type="<?= $input_types[$index]; ?>" 
                                    name="<?= $code; ?>" 
                                    placeholder="<?= $placeholders[$index]; ?>"
                                    <?php if ($code === 'c3_3'): ?> min="0" max="7" <?php endif; ?>
                                    required
                                >
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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