<?php if(empty($staff_periods)){  ?>
<h4>No Work adjustments.!</h4>
<?php }else{  ?>
<h4>Work adjustments:</h4>

<table border="2" class="sample">
    <tr>
        <th width="30%">Subject</th>
        <th width="15%">Cycle</th>
        <th  width="15%">Time</th>
        <th width="30%">Work Adjusted To</th>
    </tr>
    <?php  foreach($staff_periods as $sp_k=>$sp_v){ ?>
    <tr>
        <td>
            <?php echo $sp_v['course_name'].'<br/>'.$sp_v['branch_name'].'<br/>'.$sp_v['branch_name'].'<br/>'.$sp_v['subject_name'].'<br/>'; ?>
        </td>
        <td>
            <?php echo $sp_v['cycle_name'];  ?>
        </td>
        <td>
            <?php echo $sp_v['time_label'];  ?>
        </td>
        <td>
            <select name='work_adjustments[<?php echo $sp_v['id'];  ?>]' id='work_adjustment<?php echo $sp_v['id'];  ?>' class="text required" title="Please select the Teacher." style="width: 260px;">
                 <?php // echo selectBox('Select','staff_records','user_id,name','status="1"','0'); ?>
                <option value="">Select</option>
                 <?php if(isset($teachersOptions) && !empty($teachersOptions)){
                    foreach ($teachersOptions as $key => $value) {
                        if($this_staff_id!=$value['user_id']){
                      ?>
                    <option value="<?php echo $value['user_id'];  ?>"><?php echo $value['name'];  ?></option>
                 <?php
                        }
                    }
                 }  ?>
            </select>
        </td>
    </tr>
    <?php } ?>
</table>
<?php } ?>