 <ul class="sidebar-nav">
          <li class="sidebar-brand">MARA Stream</li>

	<li><center>
		

		 <?php 
		 	
			if ($this->Session->read('Auth.User.role_id') == 1) {
			 echo $this->element('picture',array('profile'=>$profiles));
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				 echo $this->element('picture',array('profile'=>$profiles));
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				 echo $this->element('picture3',array('lecturer'=>$lecturers));	
			}
		
		 
		  ?>
	</center>
		</li><br/>

		<?php echo "<font color=white>"."<center>"."<b>".$this->Session->read('Auth.User.fullName')."</b>". '</center>'."</font>";
			
			echo "<font color=white>"."<center>" ;
			if ($this->Session->read('Auth.User.role_id') == 1) {
				echo "Admin";
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				echo "Student";
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				echo "Lecturer";				
			}

			echo "</center>". "</font>";

			?>

	
<br/>


			



          <li><?php 

          	if ($this->Session->read('Auth.User.role_id') == 1) {
				echo $this->Html->link(__('Dashboard'), array('controller'=>'profiles','action' => 'index')); 
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				echo $this->Html->link(__('Dashboard'), array('controller'=>'profiles','action' => 'index')); 
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				echo $this->Html->link(__('Dashboard'), array('controller'=>'lecturers','action' => 'index')); 			
			}

          




          ?></li>

           <li><?php 
           		if ($this->Session->read('Auth.User.role_id') == 1) {
				 echo $this->Html->link(__('Video'), array('controller'=>'videos','action' => 'admin_index'));
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				 echo $this->Html->link(__('Video'), array('controller'=>'videos','action' => 'index'));
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				 echo $this->Html->link(__('Video'), array('controller'=>'videos','action' => 'index'));				
			}
			?>           </li>

				<li><?php 
           	if ($this->Session->read('Auth.User.role_id') == 1) {
				echo "";
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				 echo $this->Html->link(__('Courseware'), array('controller'=>'videos','action' => 'studware'));
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				 echo $this->Html->link(__('Courseware'), array('controller'=>'videos','action' => 'lectware'));				
			}
			?>           </li>
          
          <li><?php 
           		if ($this->Session->read('Auth.User.role_id') == 1) {
				 echo $this->Html->link(__('Forum'), array('controller'=>'topics','action' => 'admin_index'));
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				 echo $this->Html->link(__('Forum'), array('controller'=>'topics','action' => 'index'));
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
					 echo $this->Html->link(__('Forum'), array('controller'=>'topics','action' => 'index'));				
			}
			?>           </li>
            <li><?php 
           		if ($this->Session->read('Auth.User.role_id') == 1) {
				 echo $this->Html->link(__('User'), array('controller'=>'users','action' => 'admin_index'));
			}
			if ($this->Session->read('Auth.User.role_id') == 2) {
				 echo $this->Html->link(__('Lecturer'), array('controller'=>'lecturers','action' => 'listlect'));
			}
			if ($this->Session->read('Auth.User.role_id') == 3) {
				 echo '';				
			}
			?> </li>
		
			
  
   
          
        </ul>

