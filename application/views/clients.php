

<?php if(isset($message)): ?>
<div class="alert alert-info" role="alert" id="infoMessage"><?php echo $message;?></div>
<?php endif; ?>




<div class="container">
	<h2><?php echo lang('clients_title'); ?></h2>
	<table class="table table-striped">
		<tr>
			<th><?php echo lang('name'); ?></th>
			<th><?php echo lang('api_key'); ?></th>
			<th><?php echo lang('date'); ?></th>
			<th><?php echo lang('actions'); ?></th>
		</tr>
		<?php foreach ($apikeys as $apikey):?>
			<tr>
	            <td><?php echo htmlspecialchars($apikey->api_name,ENT_QUOTES,'UTF-8');?></td>
	            <td><?php echo $apikey->api_key;?></td>
	            <td><?php echo nice_date(unix_to_human($apikey->api_date,TRUE,'eu'),'d-m-Y h:m:s'); ?></td>
				<td>
					<div class="dropdown" style="display:inline">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    <?php echo lang('copy_url_button'); ?><span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="#"><?php echo lang('update_ip_button'); ?></a></li>
					  </ul>
					</div>
					<button class="btn btn-primary" data-id="<?php echo $apikey->api_id; ?>" data-toggle="modal" data-target="#regenerateApikey"><?php echo lang('regenerate_button'); ?></button>
			  	<button class="btn btn-danger" data-id="<?php echo $apikey->api_id; ?>" data-toggle="modal" data-target="#deleteApikey"><?php echo lang('delete_button'); ?></button></td>
			  		
				</td>
			</tr>
		<?php endforeach;?>
	</table>

	<button class="btn btn-default" data-toggle="modal" data-target="#newApikey"><?php echo lang('add_new_button'); ?></button>
		  

</div>


<div class="modal fade" id="deleteApikey" tabindex="-1" role="dialog" aria-labelledby="deleteApikey">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo lang('delete_api_key'); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo lang('delete_api_key_message'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('close_button'); ?></button>
        <button type="button" class="btn btn-danger" id="buttonDelete" ><?php echo lang('delete_button'); ?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="regenerateApikey" tabindex="-1" role="dialog" aria-labelledby="regenerateApikey">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo lang('regenerate_api_key'); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo lang('regenerate_api_key_message'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('close_button'); ?></button>
        <button type="button" class="btn btn-danger" id="buttonUpdate" ><?php echo lang('update_button'); ?></button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="newApikey" tabindex="-1" role="dialog" aria-labelledby="newApikey">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo lang('new_api_key'); ?></h4>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="nameApikey"><?php echo lang('name'); ?></label>
		    <input type="text" class="form-control" id="nameApikey" placeholder="Name">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('close_button'); ?></button>
        <button type="button" class="btn btn-danger" id="buttonCreate" ><?php echo lang('new_button'); ?></button>
      </div>
    </div>
  </div>
</div>