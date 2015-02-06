<div class="form-signin" >
	<?php echo $this->Html->image('image/logo',array('width'=>'20%', 'class'=>'form-control-2'));?>


</div>


<?php echo $this->Form->create('User',array('class'=>'form-signin')); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
       
        <?php echo $this->Form->input('username',array('label'=>false,'placeholder'=>'Username','class'=>'form-control'));?>
        <?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password','class'=>'form-control'));?>
    
    
<?php echo $this->Form->submit( 'Login', array('class' => 'btn btn-lg btn-primary btn-block'));  ?>
<br/>

<p align="right"> <b>Doesn't have an account, Just </b><?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register')); ?></p>
 

 