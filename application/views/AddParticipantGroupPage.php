
Upload an Xls file:<br />
<?php echo form_open_multipart('upload/upload_xls', array('name' => 'uploadXlsForm', 'class' => 'form-horizontal')); ?>
<input type="file" class="input-medium" accept="application/vnd.ms-excel">  
<button type="submit" class="btn">Upload</button>
<?php echo form_close(); ?>
<hr />
Or enter the details Manually:<br />
<?php echo form_open_multipart('upload/upload_xls', array('name' => 'addParticipantGroupForm')); ?>
<input type="text" name='first_name'/>
<?php echo form_close(); ?>
