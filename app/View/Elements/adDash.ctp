		<?php 
		//Admin
		if ($this->Session->read('Auth.User.role_id') == 1) {
		echo '<h1>Admin Dashboard</h1>';
		echo '<ol class="breadcrumb">';
        echo '<li class="active"><i class="glyphicon glyphicon-user"></i> &nbsp;Dashboard</li>';
        echo '<li>'. $this->Html->link(' Edit Profile ', array('controller' => 'profiles', 'action' => 'edit',$profile['Profile']['id'])) .'</li>';
		echo '<li>'. $this->Html->link(' Change Picture ', array('controller' => 'profiles', 'action' => 'upload',$profile['Profile']['id'])) .'</li>';
	
        echo '</ol>';

        
       
			echo '<div class ="panel panel-primary">';//panel-primary

		echo '<div class ="panel-heading">';//panel-heading
		echo __('</h3 class="panel-title">'.'<b>'.'Admin Section'.'</b>'.'<br/>'.'</h3>');
		echo '</div>';//panel-heading	

		echo '<div class= "panel-body">';//panel-body
		
		
		

		echo '<div class ="row">';//div row

	
		
		echo '<div class="col-lg-4 ">';//div col-xs-12

	 
		echo "string";
		


		echo '</div>';//div col-xs-12
		echo '<div class="col-lg-4 ">';//div col-xs-12

	 
		echo "string";
		


		echo '</div>';//div col-xs-12

		//this is segment

		echo '<div class="col-lg-4 ">';//div col-xs-12

	 		echo "string";


		echo '</div>';//div col-xs-12

		echo '</div>';//div row



		echo '</div>';//panel-body
		echo '</div>';//panel-primary

        
		echo '<div class ="panel panel-primary">';//panel-primary

		echo '<div class ="panel-heading">';//panel-heading
		echo __('</h3 class="panel-title">'.'<b>'.'Admin Section'.'</b>'.'<br/>'.'</h3>');
		echo '</div>';//panel-heading	

		echo '<div class= "panel-body">';//panel-body
		
		
		

		echo '<div class ="row">';//div row

	
		
		echo '<div class="col-xs-6 ">';//div col-xs-12

	 

			echo __('<h4>'.'Course'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Course ', array('controller' => 'courses', 'action' => 'admin_index')) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Course ', array('controller' => 'courses', 'action' => 'admin_add')) .'</div>';

			echo __('<h4>'.'Faculty'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Faculty ', array('controller' => 'faculties', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Faculty ', array('controller' => 'faculties', 'action' => 'admin_add' )) .'</div>';

			echo __('<h4>'.'Program'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Program', array('controller' => 'programs', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Program ', array('controller' => 'programs', 'action' => 'admin_add' )) .'</div>';

			echo __('<h4>'.'Role'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Role ', array('controller' => 'roles', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Role ', array('controller' => 'roles', 'action' => 'admin_add' )) .'</div>';

			echo __('<h4>'.'Comment'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' Delete Comment ', array('controller' => 'comments', 'action' => 'admin_index' )) .'</div>';
		
		

			echo __('<h4>'.'Rating'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' Delete Rating ', array('controller' => 'ratings', 'action' => 'admin_index' )) .'</div>';
		


		echo '</div>';//div col-xs-12

		//this is segment

		echo '<div class="col-xs-6 ">';//div col-xs-12

	 	echo __('<h4>'.'Video'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Video ', array('controller' => 'videos', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Video ', array('controller' => 'videos', 'action' => 'add' )) .'</div>';

			echo __('<h4>'.'Forum'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Forum ', array('controller' => 'topics', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new topic ', array('controller' => 'topics', 'action' => 'add' )) .'</div>';

		echo __('<h4>'.'User'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of User ', array('controller' => 'users', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new User ', array('controller' => 'users', 'action' => 'admin_add' )) .'</div>';

		echo __('<h4>'.'Forum Category'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Forum Category ', array('controller' => 'fcategories', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Category ', array('controller' => 'fcategories', 'action' => 'admin_add' )) .'</div>';

		echo __('<h4>'.'Video Category'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' List of Video Category ', array('controller' => 'vcategories', 'action' => 'admin_index' )) .'</div>';
		echo "&nbsp;";
		echo '<div class = "btn btn-default">'. $this->Html->link(' Add new Category ', array('controller' => 'vcategories', 'action' => 'admin_add' )) .'</div>';

	

		echo __('<h4>'.'Post'.'</h4>')   ;
		echo '<div class = "btn btn-default">'. $this->Html->link(' Delete Post ', array('controller' => 'posts', 'action' => 'admin_index' )) .'</div>';
	


		echo '</div>';//div col-xs-12

		echo '</div>';//div row



		echo '</div>';//panel-body
		echo '</div>';//panel-primary
			echo '<div class ="panel panel-primary">';//panel-primary

		echo '<div class ="panel-heading">';//panel-heading
		echo __('</h3 class="panel-title">'.'<b>'.'Admin Section'.'</b>'.'<br/>'.'</h3>');
		echo '</div>';//panel-heading	

		echo '<div class= "panel-body">';//panel-body
		
		
		

		echo '<div class ="row">';//div row

	
		
		echo '<div class="col-xs-6 ">';//div col-xs-12

	 
		echo "string";
		


		echo '</div>';//div col-xs-12

		//this is segment

		echo '<div class="col-xs-6 ">';//div col-xs-12

	 		echo "string";


		echo '</div>';//div col-xs-12

		echo '</div>';//div row



		echo '</div>';//panel-body
		echo '</div>';//panel-primary
		}
		?>
		

