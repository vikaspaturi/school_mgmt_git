<?php // print_r($student_data);
if($this->session->userdata('preview_study_certificate')){
    $data[0]=$student_data;
    $s_data=$this->session->userdata('preview_study_certificate');
    foreach($s_data as $k=>$v){
        $data[0][$k]=$v;
    }
}else{
    $data=0;
}
if(count($data) && $data){
    foreach($data as $k=>$v){ ?>
<form id="appl_form" action="/students/study_certificate" >
    <input type="hidden" name="preview" value="1"/>
    <div style="border:2px solid; height:630px; width:750px;position:relative;">
        <h3 align=center>LAQSHYA COLLEGE</h3>
        <h5 align=center>Jaladhija Educational Society's</h5>
        <div align=right style="margin-left:15px;margin-top: 30px;margin-right:15px">
            <h5 >Date: <?php echo date('d-m-Y'); ?></h5>
            <h5 >Unique Number: <?php echo $v['stu_number']; ?></h5>
        </div>
        <div style="margin-left:10px;position: absolute;top: 20px;left: 0;">
            <img src="<?php echo base_url() .'css/images/college_logo.png'; ?>" height="60"/>
        </div>
        <div style="margin-left:15px;margin-top: 30px;margin-right:15px">
            <h3 align=center><u>STUDY CERTIFICATE</u></h3>
            <p align=justify>This is to certify that Mr/Miss:<?php echo $v['name']; ?>,
                S/O,D/O <?php echo $v['son_of']; ?>,  is a bonafide Student of : <?php echo get_select_name($v['course'], 'courses'); ?>
                in this college during the acadamic year From: <?php echo dateFormat($v['from'],'Y'); ?> To: <?php echo dateFormat($v['to'],'Y'); ?>
            </p><br/><br/>
            <h4 align=right>PRINCIPAL</h4>
        </div>
    </div>
    <br/>
    <input type="button" name="imageField" id="imageField" class="send button  " value="Back" onclick="javascript:window.location.reload();"/>
    <input type="button" name="imageField" id="imageField" class="send button  j_gen_form_submit" value="Confirm"/>
</form>
<?php } }else{?>
<br/>
<p>Please submit certificate form properly.!</p>
<?php } ?>