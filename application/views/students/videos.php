<h2><span>Videos.</span></h2>
<div class="clr"></div>
<p style="width:200px; float:left;">Watched Videos.</p>
<!--<p style="width:200px; float:right;font-weight: bold;"><i> required fields</i></p>-->
<div class="clr"></div>
<ul style="margin-left: 100px;">
    <?php if(isset($notice_board) && count($notice_board)>0){ 
        foreach($notice_board as $v){
    ?>
    <li>
        <p class="ui-widget-header" style="padding-left: 10px;"><?php echo $v->comments; ?>&nbsp;</p>
        <p><?php echo $v->embed_code; ?></p>
    </li>
    <?php
        }
    }else{ ?>
    <li>
        <p>No Videos.</p>
    </li>
    <?php } ?>
</ul>