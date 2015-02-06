


<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Video Category index">
		
			<h2><?php echo __('Video Category: '); ?> <?php echo $vcategory['Vcategory']['name']; ?></h2>
			<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "Related";?></li>
			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Video Category ', array('controller' => 'vcategories', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Category ', array('controller' => 'vcategories', 'action' => 'admin_add')).'</li>';
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "students";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "Lecturer";
			}?>


            		</ol>
			

		
			
			
				
				
			



			<hr/>
				<h3><b><?php echo "Video"; ?></b><br/></h3>
				<?php echo $this->element('related1'); ?>








		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->








