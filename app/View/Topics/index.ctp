

<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Forum index">
		
			<h2><?php echo __('Forum'); ?></h2>
			<ol class="breadcrumb">
              
             		
             <?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
					echo '<li class="active">' .'<i class="glyphicon glyphicon-user">'.'&nbsp;'.'</i>'.$this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index')).'</li>';
					echo '<li class="active">'."List of Forum".'</li>';
					echo '<li class="active">'.$this->Html->link(' Admin Forum', array('controller' => 'topics', 'action' => 'admin_index')).'</li>';		
					echo '<li class="active">'.$this->Html->link(' Add new Forum topic', array('controller' => 'topics', 'action' => 'add')).'</li>';
					
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
					echo '<li class="active">' .'<i class="glyphicon glyphicon-user">'.'&nbsp;'.'</i>'.$this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index')).'</li>';
					echo '<li class="active">'."Forum".'</li>';
					echo '<li class="active">'.$this->Html->link(' Own Forum Post', array('controller' => 'topics', 'action' => 'index_own')).'</li>';		
					echo '<li class="active">'.$this->Html->link(' Add new Forum topic', array('controller' => 'topics', 'action' => 'add')).'</li>';					
					
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
					echo '<li class="active">' .'<i class="glyphicon glyphicon-user">'.'&nbsp;'.'</i>'.$this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index')).'</li>';
					echo '<li class="active">'."Forum".'</li>';
					echo '<li class="active">'.$this->Html->link(' Own Forum Post', array('controller' => 'topics', 'action' => 'index_own')).'</li>';		
					echo '<li class="active">'.$this->Html->link(' Add new Forum topic', array('controller' => 'topics', 'action' => 'add')).'</li>';
					
					
			}?>
              
            		</ol>
			
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('Fcategory', 'Category'); ?></th>
		
			<th><?php echo $this->Paginator->sort('subject','Forum'); ?></th>
			<th><?php echo $this->Paginator->sort('academic','Academic'); ?></th>
	
			
						</tr>
					</thead>
					<tbody>
<?php foreach ($topics as $topic): ?>
	<tr>
		<td><?php
      	foreach($topic['Fcategory'] as $fcategory){ 
        echo $this->Html->link($fcategory['name'], array('controller'=>'courses','action'=>'related',$fcategory['id'])).'&nbsp;'; 
    	} 
  		 ?>
		</td>
		<td><?php echo $this->Html->link(__($topic['Topic']['subject']), array('action' => 'view', $topic['Topic']['id'])); ?>&nbsp;
			
		<font size="2px"><p class="text-muted"><?php echo h($topic['Topic']['date']); ?><br/>Post by: <?php echo h($topic['User']['fullName']); ?></p></font></td>
		
		
		
	
			<td>
			
			Course: <?php
      foreach($topic['Course'] as $course){ 
        echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    	} 
   		?>
			<br/>
			Program: 
			<?php echo h($topic['Program']['name']); ?>
			<br/>
			Faculty: 
			<?php echo h($topic['Faculty']['name']); ?>
		</td>
		
				
	
			
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<?php echo $this->element('paginate');?>
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
