<div class="container lotw">

	<h2><?php echo $this->lang->line('lotw_title'); ?></h2>

	<!-- Card Starts -->
	<div class="card">
		<div class="card-header">
			<?php echo $this->lang->line('lotw_title_upload_p12_cert'); ?>
		</div>

		<div class="card-body">
			<?php if($error != " ") { ?>
				<div class="alert alert-danger" role="alert">
			  	<?php echo $error; ?>
				</div>
	    	<?php } ?>

	    	<div class="alert alert-info" role="alert">
		    	<h5><?php echo $this->lang->line('lotw_title_export_p12_file_instruction'); ?></h5>

		    	<ul>
		    		<li><?php echo $this->lang->line('lotw_p12_export_step_one'); ?></li>
		    		<li><?php echo $this->lang->line('lotw_p12_export_step_two'); ?></li>
		    		<li><?php echo $this->lang->line('lotw_p12_export_step_three'); ?></li>
		    		<li><?php echo $this->lang->line('lotw_p12_export_step_four'); ?></li>
		    	</ul>
	    	</div>

			<?php echo form_open_multipart('lotw/do_cert_upload');?>
				<div class="form-group">
				    <label for="exampleFormControlFile1"><?php echo $this->lang->line('lotw_title_upload_p12_cert'); ?></label>
				    <input type="file" name="userfile" class="form-control-file" id="exampleFormControlFile1">
				 </div>

				<button type="submit" value="upload" class="btn btn-primary"><?php echo $this->lang->line('lotw_btn_upload_file'); ?></button>
			</form>

	    </div>
	</div>
	<!-- Card Ends -->

</div>
