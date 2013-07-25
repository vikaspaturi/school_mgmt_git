<div>
    <h2 align="center"><span> View Period Time Table </span></h2>
    <div class="user_instructions">
        <p style="width:200px; float:left;">Please enter details below.</p>
        <p style="width:200px; float:right;font-weight: bold;">*<i> required fields</i></p>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <div class="clr"></div>
    <form action="<?php echo site_url('students/student_attendance');?>" id="appl_form2" method="post" >
        <input id="rel" name="rel"  type="hidden" value="submit"/>

        <ol>
            <li>
                <label for="cycle_id">Select Cycle:*</label>
                <select name='cycle_id' id='cycle_id' class="text required" title="Please select the Cycle.">
                     <?php echo selectBox('Select','period_cycles','id,name','status="1"','0'); ?>
                </select>
            </li>
            <li>
                <input type="submit" name="submit"  class="send button j_gen_form_submit" value="Next >"/>
                <div class="clr"></div>
            </li>
        </ol>
    </form>
</div>
