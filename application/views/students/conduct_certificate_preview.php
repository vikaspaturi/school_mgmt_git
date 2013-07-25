<?php
if($this->session->userdata('preview_conduct_certificate')){
    $s_data=$this->session->userdata('preview_conduct_certificate');
    $data[0]=$s_data;
}else{
    $data=0;
}
if(count($data) && $data){
foreach($data as $k=>$v){?>
<form id="appl_form" action="/students/conduct_certificate" >
    <input type="hidden" name="preview" value="1"/>
    <div style="border:2px solid; height:630px; width:750px;position:relative;">

        <h3 align=center>MY COLLEGE</h3>
        <h5 align=center>#123,Road No.:1,M.G Road, NAVI MUMBAI, MAHARASTRA-012345 </h5>
        <div align=right style="margin-left:15px;margin-top: 30px;margin-right:15px">
            <h5 >Date: <?php echo date('d-m-Y'); ?></h5>
            <h5 >Unique Number: <?php echo $v['stu_number']; ?></h5>
        </div>
        <div style="margin-left:10px;"">
            <img src=<?php echo base_url() . 'css/images/college_logo.png'; ?> width="100" height="100"/>
        </div>
        <div style="margin-left:15px;margin-top: 30px;margin-right:15px">
            <h3 align=center> <u>CONDUCT CERTIFICATE</u></h3>
            <p align=justify >This is to certify that Mr/Miss:<?php echo $v['name']; ?>,
                S/O,D/O Sri: <?php echo $v['co']; ?>,  is a bonafied Student of : <?php echo get_select_name($v['course'], 'courses'); ?>
                in this college During the academic year From: <?php echo dateFormat($v['from_date'],'Y'); ?> To: <?php echo dateFormat($v['to_date'],'Y'); ?>. And during that time His/Her Conduct Has been satisfactory.
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
<p>No Certificate found.!</p>
<?php } ?>