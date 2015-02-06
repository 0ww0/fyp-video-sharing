
	<?php 
		//Lecturer
		if ($this->Session->read('Auth.User.role_id') == 3) {
		echo '<h1>Lecturer Dashboard</h1>';
		echo '<ol class="breadcrumb">';
        echo '<li class="active"><i class="glyphicon glyphicon-user"></i> &nbsp;Dashboard</li>';
        echo '<li>'. $this->Html->link(' Edit Profile ', array('controller' => 'lecturers', 'action' => 'edit',$lecturer['Lecturer']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' Change Picture ', array('controller' => 'lecturers', 'action' => 'upload',$lecturer['Lecturer']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' Add Course ', array('controller' => 'lecturers', 'action' => 'add_course',$lecturer['Lecturer']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' List of Student ', array('controller' => 'lecturers', 'action' => 'related',$lecturer['Lecturer']['id'])) .'</li>';
	
        echo '</ol>';
		echo '<div class ="panel panel-primary">';//panel-primary

		echo '<div class ="panel-heading">';//panel-heading
		echo __('</h3 class="panel-title">'.'<b>'.'Lecturer Section'.'</b>'.'<br/>'.'</h3>');
		echo '</div>';//panel-heading	

		echo '<div class= "panel-body">';//panel-body
		
		
		

		echo '<div class ="row">';//div row

		echo '<div class="col-xs-12 col-sm-6 col-lg-8">';//div col-xs-12
	 		echo  '<br/>' .'<ul class="list-group">'.
	 	 '<li class="list-group-item">' .
         '<b>Full Name : </b>' . h($lecturer['Lecturer']['fullName']) . '<br/>' .'</li>'.
         '<li class="list-group-item">' .
         '<b>Email : </b>' . h($lecturer['Lecturer']['email'])  . '<br/>' .'</li>'.
         '<li class="list-group-item">' .
         '<b>Bio : </b>' . h($lecturer['Lecturer']['bio'])  . '<br/>' .'</li>'.
          '<li class="list-group-item">' .
         '<b>Program : </b>' . h($lecturer['Program']['name'])  . '<br/>' .'</li>'.
          '<li class="list-group-item">' .
         '<b>Faculty : </b>' . h($lecturer['Faculty']['name'])  . '<br/>' .'</li>';

		  echo '<li class="list-group-item">' . '<b>Course : </b>';
        foreach($lecturer['Course'] as $course){ 
        echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    	} 
    	echo '<br/>'. '</li>';
		 echo '<li class="list-group-item">' .
		 '<b>Status : </b>'
		 ;
			if (($lecturer['Lecturer']['status']) == 3 ) {
				echo "Lecturer".'</li>'.'</ul>';
			}
		
		

		echo '</div>';//div col-xs-12
		
		



		echo '</div>';//panel-body
		echo '</div>';//panel-primary
		}
		?>
		