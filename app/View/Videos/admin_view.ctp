

<br/>



				<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
					<li class="active"> <?php echo "View Video";?></li>
             			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
					echo '<li>' . $this->Html->link(' Public Video ', array('controller' => 'videos', 'action' => 'index_public')).'</li>';
					echo '<li>' . $this->Html->link(' Private Video ', array('controller' => 'videos', 'action' => 'index_private')).'</li>';
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "students";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "Lecturer";
			}?>
              
            		</ol>
            		
			 <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo h($video['Video']['name']); ?></h3>
            </div>
            <div class="panel-body">
             	<div>

			<?php 
				if($video['Video']['filename'] != NULL) {
				echo "<video  poster='' src=".$this->webroot . $video['Video']['filename']."  controls
 				 preload='auto'  class='all-skin minimalist' data-swf='/flash/flowplayer.swf' data-ratio='0.4167' width ='100%' 

 				 />";
			}else {
				echo 'No Video supplied';
			}
			?>
			</div>
            </div>
          </div>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8"><?php echo $this->Ratings->display_for($video); ?></div>
  <div class="col-xs-6 col-md-4">

	<p><?php echo __('<b>Category</b> : '); ?>
	<?php foreach($video['Vcategory'] as $category){ 
        echo $this->Html->link($category['name'], array('controller'=>'vcategories','action'=>'related',$category['id'])).'&nbsp;'; 
    	} ; ?></p></div>
</div>


<br/>





<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
  <li><a href="#property" data-toggle="tab">Property</a></li>
  <li><a href="#user" data-toggle="tab">User</a></li>
  <li><a href="#academic" data-toggle="tab">Academic</a></li>
</ul>



<div class="tab-content">
  <div class="tab-pane active" id="description">
  <br/>
<div class="panel panel-default">
  <div class="panel-body">

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8"> <p><?php echo h($video['Video']['description']); ?></p></div>
  <div class="col-xs-6 col-md-4"><p><?php echo h($video['Video']['date']); ?></p></div>
</div>


			

  </div>
</div>
  
	
  </div>
  


  <div class="tab-pane" id="property">
	<br/>


	<div class="panel panel-default">
  <div class="panel-body">
   <p><?php echo __('<b>Extension</b> : '); ?>
		
			<?php echo h($video['Video']['extension']); ?>
			&nbsp;</p>
		
		<p><?php echo __('<b>MimeType</b> : '); ?>
		
			<?php echo h($video['Video']['mimeType']); ?>
			&nbsp;</p>
		
		<p><?php echo __('<b>File Size</b> : '); ?>
		
			<?php echo h($video['Video']['filesize']); ?>
			&nbsp;</p>
  </div>
</div>
  		
</div>
  



 <div class="tab-pane" id="user">
 	<br/>


 	<div class="panel panel-default">
  <div class="panel-body">
   <p><?php echo __('<b>Submitted By</b> : '); ?>
	
			<?php echo h($video['User']['fullName']); ?>
			&nbsp;</p>
		
		<p><?php echo __('<b>Status</b> : '); ?>
		
			<?php if (($video['Video']['status']) == 1 ) {
				echo "Admin".'</li>'.'</ul>';} 
					if (($video['Video']['status']) == 2 ) {
				echo "Student".'</li>'.'</ul>';} 
					if (($video['Video']['status']) == 3 ) {
				echo "Lecturer".'</li>'.'</ul>';} 


			?>
			&nbsp;</p>
		
		<p><?php echo __('<b>Visibility</b> : '); ?>
		
			<?php echo h($video['Video']['visibility']); ?>
			&nbsp;</p>
  </div>
</div>
		
		
		
 </div>
 		

 		 <div class="tab-pane" id="academic">	
	<br/>
	<div class="panel panel-default">
  <div class="panel-body">
   		

   		<p><?php echo __('<b>Course<b/> :'); ?>
			<?php foreach($video['Course'] as $course){ 
        echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    	} ; ?>
			&nbsp;</p>
   		<p><?php echo __('<b>Program<b/> :'); ?>
			<?php echo $this->Html->link($video['Program']['name'], array('controller' => 'programs', 'action' => 'view', $video['Program']['id'])); ?>
			&nbsp;</p>
		
		<p><?php echo __('Faculty'); ?>
			<?php echo $this->Html->link($video['Faculty']['name'], array('controller' => 'faculties', 'action' => 'view', $video['Faculty']['id'])); ?>
			&nbsp;</p>
 		 </div>
	</div>



			</div>










</div>

<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>





	<p><?php echo $this->Comments->display_for($video); ?></p>


			<br/>



