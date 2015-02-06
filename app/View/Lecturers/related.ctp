<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Programs index">
		
			<h2><?php echo __('Related'); ?></h2>
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

             		 <li class ="active"> <?php echo "Related";?></li>

             		
              
            		</ol>
			<hr/>



			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<h5>List of Student</h5>
					<tbody>
<?php if (!empty($lecturer['Profile'])): ?>

	
	<?php foreach ($lecturer['Profile'] as $profile): ?>
	<tr>
		
		<td> 
			<?php echo $this->Html->link($profile['fullName'], array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?></li></td>
	</tr>
	<?php endforeach; ?>

<?php endif; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
		
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->







				
