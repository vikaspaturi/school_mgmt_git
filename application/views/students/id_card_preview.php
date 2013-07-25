<?php
if($this->session->userdata('preview_id_card')){
    $data[]=$this->session->userdata('preview_id_card');
}else{
    $data=0;
}
//echo '<pre>'; print_r($data); echo '</pre>';
if(count($data) && $data){
foreach($data as $k=>$v){?>
<form id="appl_form" action="/students/apply_idcard" >
    <input type="hidden" name="preview" value="1"/>
    <div class="id_userview">
        <div class="belt_top p_a"></div>
        <div class="inner">
            <div class="photo_banner">
                <img src="<?php echo base_url(); ?>css/images/college_logo.png" class="f_l" width="60" height="60" />
                <img src="<?php echo base_url(); echo (isset($v['photo']) && !empty($v['photo']))?'uploads/'.$v['photo']:'css/images/no_photo.png'; ?>" class="f_r" id="photo" width="100" height="120" title="pic"/>
                <div class="c_b"></div>
            </div>
            <div class="stud_det_panel">
                <div class="std_lst">
                    <label>STUDENT NAME:</label>
                    <span>	<?php echo $v['name']; ?></span>
                </div>
                <div class="std_lst">
                    <label>STUDENT NUMBER:</label>
                    <span><?php echo $v['stu_number']; ?></span>
                </div>
                <div class="std_lst"><label>BRANCH:</label>	<span><?php echo get_select_name($v['branch'],'branches'); ?></span></div>
                <div class="std_lst"><label>YEAR OF JOIN:</label> <span><?php echo $v['date_of_join']; ?></span></div>
                <div class="std_lst"><label>ADDRESS:</label> <span>	<?php echo $v['address']; ?></span></div>
                <div class="std_lst"><label>MOBILE Number:</label> <span>	<?php echo $v['mobile_no']; ?></span></div>
                <div class="c_b"></div>
            </div>
        </div>
    </div>
    <div class="m_t_10">
        <input type="button" name="imageField" id="imageField" class="button grey " value="Back" onclick="javascript:window.location.reload();"/>
        <input type="button" name="imageField" id="imageField" class="button m_l_20 gblue  j_gen_form_submit" value="Confirm"/>
    </div>
</form>
<?php } }else{?>
<br/>
<p>Please Fill the form and try again.!</p>
<?php } ?>