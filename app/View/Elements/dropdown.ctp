	<?php 
		
		if ($this->Session->read('Auth.User')) {

			if ($this->Session->read('Auth.User.role_id') == 1 || $this->Session->read('Auth.User.role_id') == 2) {
				echo '<li>' . $this->Html->link('Dashboard', array('controller' => 'profiles', 'action' => 'index')). '</li>';
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				echo '<li>' . $this->Html->link('Dashboard', array('controller' => 'lecturers', 'action' => 'index')). '</li>';
			}
			
			
			
			echo '<li>' . $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')). '</li>';
		}
		else{
			
		
			echo '<li>' .$this->Html->link('Login', array('controller' => 'users', 'action' => 'login')). '</li>';
			
			echo '<li>' . $this->Html->link('Register', array('controller' => 'users', 'action' => 'register')). '</li>';
			}
		?>

