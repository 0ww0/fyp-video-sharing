 <ul class="sidebar-nav">
          <li class="sidebar-brand">MARA Stream</li>

	<li><center>
		

		 <?php echo $this->element('picture2',array('profile'=>$profiles)); ?>
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


			

          
        </ul>

