<?php
/**
	CakePHP Feedback Plugin

	Copyright (C) 2012-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/
?>
<div id="page-container" class="row">

		<!-- element action -->
	
	<div id="page-content" class="col-sm-9">

	<div class="profiles form">
	<h2><?php echo __('<br />'.'Add a comment' ); ?></h2>
	<?php
	echo $this->Form->create
		(
			'Feedback.Courseware',
			array
			(
				'url' => array
				(
					'plugin' => 'feedback',
					'controller' => 'coursewares',
					'action' => 'add',
					'inputDefaults' => array('label' => false),
					'role' => 'form',
					$foreign_model,
					$foreign_id
				)
			)
		);
	echo $this->Form->input('Courseware.name', array('default' => 'Anonymous' ,'type' =>'hidden','label' => __('Name'),'value'=>$this->Session->Read('Auth.User.fullName')));
	echo $this->Form->input('Courseware.email', array('default' => 'anonymous@anon.com' ,'type' =>'hidden','label' => __('Email'),'value'=>$this->Session->Read('Auth.User.email')));
	echo $this->Form->input('Courseware.author_website', array('label' => __('Website'),'type' => 'hidden'));
	echo $this->Form->input('Courseware.hairy_pot', array('type' => 'hidden'));
	echo $this->Form->input('Courseware.reply', array('class' => 'form-control','label' => __('Comments')));
	echo $this->Form->input('Courseware.foreign_model', array('type' => 'hidden', 'value' => $foreign_model));
	echo $this->Form->input('Courseware.foreign_id', array('type' => 'hidden', 'value' => $foreign_id));
	echo $this->Form->input('Courseware.remember_info', array('type' => 'checkbox', 'label' => __('Remember my info')));

	echo $this->Form->submit('Save Comment', array('class' => 'btn btn-large btn-primary'));
	echo $this->Form->end(); 
	?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->

			