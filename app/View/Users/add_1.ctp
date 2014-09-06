<?php echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('role_id',array('type'=>'hidden', 'value'=>$roles[0]['Role']['id']));
		echo $this->Form->input('companyname');
		echo $this->Form->input('country_id');
		echo $this->Form->input('city');
		echo $this->Form->input('phonenumber');
	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element("attirezone/footer"); ?>     
