<h2><span>Upload Resume.</span></h2>
<div class="clr"></div>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>

<form id="appl_form" suc_msg="Your Resume Submited Successfully.">
    <input id="" name="rel" class="text" type="hidden" value="placement_resumes"/>
    <ol>
        <li>
            <label for="website">Upload Your Resume</label>
            <input type="file" name="photo" size="100" class="" id="resume_upload"/>
            <input name="resume_link" class="myfile" value="" type="hidden" id="photo_val"/>
            <input name="MAX_FILE_SIZE" value="10000" type="hidden" />
        </li>
        <li>
            <br/>
            <input type="button" name="imageField" class="upload button j_gen_form_submit" value="Submit"/>
<!--            <input type="button" name="imageField" id="get_button" class="get button" value="Get the id card"style="margin-left: 126px;"/>-->
        </li>
    </ol>
</form>
