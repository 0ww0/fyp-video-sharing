
	
		 <?php echo $this->element('adDash'); ?>
		
				<?php 
		//Admin
		if ($this->Session->read('Auth.User.role_id') == 2) {
		echo '<h1>Student Dashboard</h1>';
		echo '<ol class="breadcrumb">';
        echo '<li class="active"><i class="glyphicon glyphicon-user"></i> &nbsp;Dashboard</li>';
        echo '<li>'. $this->Html->link(' Edit Profile ', array('controller' => 'profiles', 'action' => 'edit',$profile['Profile']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' Change Picture ', array('controller' => 'profiles', 'action' => 'upload',$profile['Profile']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' Add Course ', array('controller' => 'profiles', 'action' => 'add_course',$profile['Profile']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' Add Lecturer ', array('controller' => 'profiles', 'action' => 'add_lecturer',$profile['Profile']['id'])) .'</li>';
	
        echo '</ol>';

        
     
		
		echo '<div class ="panel panel-primary">';//panel-primary

		echo '<div class ="panel-heading">';//panel-heading
		echo __('</h3 class="panel-title">'.'<b>'.'Student Profile'.'</b>'.'<br/>'.'</h3>');
		echo '</div>';//panel-heading	

		echo '<div class= "panel-body">';//panel-body
	

		echo '<div class ="row">';//div row

		echo '<div class="col-xs-12 col-sm-6 col-lg-8">';//div col-xs-12
	 		echo  '<br/>' .'<ul class="list-group">'.
	 		'<li class="list-group-item">' .
         '<b>Full Name : </b>' . h($profile['Profile']['fullName']) . '<br/>' .'</li>'.
         '<li class="list-group-item">' .
         '<b>Email : </b>' . h($profile['Profile']['email'])  . '<br/>' .'</li>'.
          '<li class="list-group-item">' .
         '<b>Faculty : </b>' . h($profile['Faculty']['name'])  . '<br/>' .'</li>'.
          '<li class="list-group-item">' .
         '<b>Program : </b>' . h($profile['Program']['name'])  . '<br/>' .'</li>'.

          '<li class="list-group-item">' .
         '<b>Bio : </b>' . h($profile['Profile']['bio'])  . '<br/>' .'</li>';
         
        echo '<li class="list-group-item">' . '<b>Course : </b>';
        foreach($profile['Course'] as $course){ 
        echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    	} 
    	echo '<br/>'. '</li>';
    	echo '<li class="list-group-item">' . '<b>Lecturer : </b>';
        foreach($profile['Lecturer'] as $lecturer){ 
        echo $this->Html->link($lecturer['fullName'], array('controller'=>'lecturers','action'=>'related',$lecturer['id'])).'&nbsp;'; 
    	} 
    	echo '<br/>'. '</li>';


		 echo '<li class="list-group-item">' .
		 '<b>Status : </b>'
		 ;
			if (($profile['Profile']['status']) == 2 ) {
				echo "Student".'</li>'.'</ul>';
			}
		
		

		echo '</div>';//div col-xs-12
		
		

		echo '</div>';//div row



		echo '</div>';//panel-body
		echo '</div>';//panel-primary
		}
		?>
		
		

		









			
		