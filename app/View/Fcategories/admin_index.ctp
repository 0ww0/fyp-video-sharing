
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="fcategories index">
		
			<h2><?php echo __('Category for Forum'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
             		 	<li class="active"> <?php echo "List of Forum Category";?></li>
             		  <li class="active"> <?php echo $this->Html->link(' Add new Category', array('controller' => 'fcategories', 'action' => 'admin_add'));?></li>
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
					    <th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($fcategories as $fcategory): ?>
	<tr>
		<td><?php echo h($fcategory['Fcategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($fcategory['Fcategory']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Related'), array('action' => 'related', $fcategory['Fcategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fcategory['Fcategory']['id']), null, __('Are you sure you want to delete # %s?', $fcategory['Fcategory']['id'])); ?>
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
