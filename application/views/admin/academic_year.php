<input type="button" onclick="javascript:window.location='<?php echo site_url('admin/edit_academic_year');  ?>';" name="" id="imageField" class=" m_t_b_10 button green  " value="+ Add Academic Year " />


<div class="jqgrid_wrap">
    <table id="grid_table"></table>
    <div id="grid_pager"></div>
</div>

<script type="text/javascript" rel="javascript">
    $(function(){
        jQuery("#grid_table").jqGrid({
                url:site_url+'/admin/academic_year',
                datatype: "json",
                height:'auto',
                autowidth: true,
                mtype: 'POST',
                recordtext: "Viewing {0} - {1} of {2} Academic Year(s)",
                pgtext : "Page {0} of {1}",
                colNames:['S.No','Name','Status','Edit'],
                colModel:[
                        {name:'id',index:'id', width:50},
                        {name:'name',index:'name', width:150},
                        {name:'status',index:'status', width:150},
                        {name:'edit',index:'edit', width:50, sortable:false}
                ],
                rowNum:10,
                rowList:[10,30,50,100],
                pager: '#grid_pager',
                sortname: 'name',
                viewrecords: true,
                sortorder: "asc",
                caption:"Academic Years",
                loadtext:'Loading..'
        });
    });
</script>