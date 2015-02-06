<br/>
<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">
		
		<div class="Users view">

			<h2><?php  echo __('User'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
					<li class="active"> <?php echo "View User information";?></li>
             		  <li class="active"> <?php echo $this->Html->link(' List of All User', array('controller' => 'users', 'action' => 'admin_index'));?></li>
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr> 
			 		  <td><strong><?php echo __('Username'); ?></strong></td>
					  <td>
		                    	<?php echo h($user['User']['username']); ?>
		                        &nbsp;
		              </td>
                       </tr>


					<tr> 
			 		  <td><strong><?php echo __('FullName'); ?></strong></td>
					  <td>
		                    	<?php echo h($user['User']['fullName']); ?>
		                        &nbsp;
		              </td>
                    </tr>

					<tr> 
			 		  <td><strong><?php echo __('Email'); ?></strong></td>
					  <td>
		                    	<?php echo h($user['User']['email']); ?>
		                        &nbsp;
		              </td>
                    </tr>	

                    <tr> 
			 		  <td><strong><?php echo __('Role'); ?></strong></td>
					  <td>
		                    	<?php echo h($user['Role']['name']); ?>
		                        &nbsp;
		              </td>
                    </tr>	

                    <tr> 
			 		  <td><strong><?php echo __('Created'); ?></strong></td>
					  <td>
		                    	<?php echo h($user['User']['created']); ?>
		                        &nbsp;
		              </td>
                    </tr>	

                 	


                    </tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
		