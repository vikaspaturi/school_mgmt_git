<?php // echo '<pre>'; print_r($leaves); echo '</pre>'; ;?>
<h2 align='center'><span>Leaves Count Status</span></h2>
<div class="clr"></div>

<?php if(!empty($leaves)){  ?>
    <h2>Leaves Taken:</h2>
    <table border="2" class="sample">
            <tr>
                <th>Leave Type</th>
                <th>Number of Leaves</th>
            </tr>
            <?php $count=0; foreach($leaves as $s_k=>$s_v){ ?>
            <tr>
                <td><?php echo $s_v['name']; ?></td>
                <td><?php echo $s_v['number_of_leaves'];  $count+=$s_v['number_of_leaves']; ?></td>
            </tr>
            <?php }  ?>
    </table>
    <br/>
    <p>You have total <?php echo (15-$count);  ?> Remaining Leaves.</p>
    <br/>

<?php }else{  ?>
<h2>No leaves taken till now.</h2>
<p>You have 15 Leaves remaining.</p>
<?php }  ?>