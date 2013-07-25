<?php
if($this->session->userdata('preview_bus_pass')){
    $data[]=$this->session->userdata('preview_bus_pass');
}else{
    $data=0;
}
//echo '<pre>'; print_r($data); echo '</pre>';
if(count($data) && $data){
foreach($data as $k=>$v){?>
<form id="appl_form" action="/students/bus_pass" >
    <input type="hidden" name="preview" value="1"/>
    <div style="border:2px solid; width:600px;position:relative;">
        <h4 style="width:115px; margin:0 auto;">LAQSHYA COLLEGE</h4>
    <!--    <div>
            <img src="logo.png" width="50" height="50" style="position: absolute; top:60px; left:510px;">
        </div>-->
        <img src="<?php echo base_url(); ?>css/images/college_logo.png"  height="60" style="position: absolute; top:5px; right: 0px;">
        <img src="<?php echo base_url(); echo (isset($v['photo']) && !empty($v['photo']))?'uploads/'.$v['photo']:'css/images/no_photo.png'; ?>" id="photo" width="100" height="120" title="pic" style="position: absolute; top:80px; left:15px;">
        <div style="margin-left:160px;margin-top: 45px;">

            <pre>STUDENT NAME		:	<?php echo $v['name']; ?></pre>
            <pre>STUDENT NUMBER		:	<?php echo $v['student_number']; ?></pre>
            <pre>BRANCH			:	<?php echo get_select_name($v['branch'],'branches'); ?></pre>
            <pre>COURSE		        :	<?php echo get_select_name($v['course'],'courses'); ?></pre>
            <pre>PICK UP POINT		:	<?php echo get_select_name($v['start_from'],'boarding_points'); ?></pre>
            <pre>ISSUED ON  		:	<?php echo date('d-m-Y'); ?></pre>
            <br/>
            
        </div>
        <div style="clear:both;"></div>
    </div>
    <br/>
    <input type="button" name="imageField" id="imageField" class="send button  " value="Back" onclick="javascript:window.location.reload();"/>
    <input type="button" name="imageField" id="imageField" class="send button  j_gen_form_submit" value="Confirm"/>
</form>
<?php } }else{?>
<br/>
<p>Data not found.!</p>
<?php } ?>