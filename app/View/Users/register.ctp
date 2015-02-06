
<?php echo $this->Form->create('User',array('class'=>'form-signin')); ?>


<center><?php echo $this->Html->image('image/logo',array( 'class'=>array('form-signin','form-control-2')));?></center>



	<h2 class="form-signin-heading">Register</h2>
	<?php
		echo $this->Form->input('fullName',array('label'=>false,'placeholder'=>'Full Name','class'=>'form-control'));
		echo $this->Form->input('email',array('label'=>false,'placeholder'=>'Email address','class'=>'form-control'));
		echo $this->Form->input('username',array('label'=>false,'placeholder'=>'Username','class'=>'form-control'));
		echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password','class'=>'form-control'));
		echo $this->Form->input('role_id', array('type' => 'hidden', 'value' => '2'));
	?>

<?php echo $this->Form->submit( 'Register', array('class' => 'btn btn-lg btn-primary btn-block'));  ?>
<br/>

<p align="right"><b>Already register, Let </b><?php echo $this->Html->link('Log You In', array('controller' => 'users', 'action' => 'login')); ?></p>
