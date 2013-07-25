<ul class="collegeUpdates">
    <?php if(isset($notice_board) && count($notice_board)>0){ 
        foreach($notice_board as $v){
    ?>
    <li>
        <img src="<?php echo base_url(); ?>css/images/user-upd.png" alt="user"/><?php echo $v->message; ?>
    </li>
    <?php
        }
    }else{ ?>
    <li>
        <p>No College News.</p>
    </li>
    <?php } ?>
</ul>