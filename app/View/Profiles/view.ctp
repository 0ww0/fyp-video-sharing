
<h2><?php echo __('Profile'); ?></h2>
	<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php 
					if ( $this->Session->Read('Auth.User.role_id') == 1) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));
             		}
             		if ( $this->Session->Read('Auth.User.role_id') == 2) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));
             		}
             		if ( $this->Session->Read('Auth.User.role_id') == 3) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index'));
             		}
             		 ?></li>

             		 <li class ="active"> <?php echo "Student Bio";?></li>

             		
              
            		</ol>



            		<div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo h($profile['Profile']['fullName']); ?></h3>
              </div>
              <div class="panel-body">
                <div class="row">
                <div class="col-lg-4">
                <br/>
               <center>
                	
                	<?php if($profile['Profile']['picture'] != NULL) { echo "<img src='".$this->webroot . $profile['Profile']['picture']."' style='border-radius:10em;' width='50%'/>"; }else { echo $this->Html->image('image/default',array('width'=>'50%' , 'style'=>'border-radius:10em')) ;}?>&nbsp;
					</center>	<br/>		
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8"> 
                <ul class="list-group">
                	<li class="list-group-item">
                		<?php echo __('<b>Email: </b>'); ?>
                		<?php echo h($profile['Profile']['email']); ?>
                	</li>	
                	<li class="list-group-item">
                		<?php echo __('<b>Bio: </b>'); ?>
                		<?php echo h($profile['Profile']['bio']); ?>
                	</li>	
                	<li class="list-group-item"><?php echo __('Course'); ?>
		
					<?php foreach($profile['Course'] as $course){ 
       				 echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    					}  ?>
						&nbsp;
					</li>
                	<li class="list-group-item">
                		<?php echo __('<b>Program: </b>'); ?>
                		<?php echo h($profile['Program']['name']); ?>
                	</li>	
                	<li class="list-group-item">
                		<?php echo __('<b>Faculty: </b>'); ?>
                		<?php echo h($profile['Faculty']['name']); ?>
                	</li>	
                	

                </ul>
                </div>

                </div>
              </div>
            </div>
