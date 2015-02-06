
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
    
    <div class="actions">
    
      <ul class="list-group">
      <li class="list-group-item"><?php echo __('List'); ?></li> 
        <li class="list-group-item"><?php echo $this->Html->link(__('Comment Index'), array('controller'=>'comments','action' => 'index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Course Index'), array('controller'=>'courses','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Faculty Index'), array('controller'=>'faculties','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Forum Category Index'), array('controller'=>'fcategories','action' => 'admin_index'), array('class' => '')); ?></li> 
        <li class="list-group-item"><?php echo $this->Html->link(__('Post Index'), array('controller'=>'posts','action' => 'index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Program Index'), array('controller'=>'programs','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Role Index'), array('controller'=>'roles','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Topic Index'), array('controller'=>'topics','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('User Index'), array('controller'=>'users','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Video Index'), array('controller'=>'videos','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__(' Video Category Index'), array('controller'=>'vcategories','action' => 'admin_index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php  echo $this->Html->link(__('Rating Index'), array('controller'=>'ratings','action' => 'index'), array('class' => '')); ?></li> 
        
   
         <br/>     

        <li class="list-group-item"><?php echo __('Add'); ?></li> 
        <li class="list-group-item"><?php echo $this->Html->link(__('Admin Index'), array('controller'=>'comments','action' => 'index'), array('class' => '')); ?></li>    
        <li class="list-group-item"><?php echo $this->Html->link(__('Admin Index'), array('controller'=>'comments','action' => 'index'), array('class' => '')); ?></li> 
         <br/>     

       

        
      </ul><!-- /.list-group -->
      
    </div><!-- /.actions -->
    
  </div><!-- /#sidebar .col-sm-3 -->




 Course
 
  <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'courses','action' => 'admin_add')); ?>
 <br/>
 Faculty
 
  <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'faculties','action' => 'admin_add')); ?>
  <br/>
 Forum Category

 <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'fcategories','action' => 'admin_add')); ?>
  <br/> 
  
    Program
   
    <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'programs','action' => 'admin_add')); ?>
    <br/>
   
      Role
      
       <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'roles','action' => 'admin_add')); ?>
       <br/>
         Topic   

       <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'topics','action' => 'add')); ?>
  <br/>
     User
         
       <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'users','action' => 'admin_add')); ?> 
      <br/>
         Video
  
        <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'videos','action' => 'add')); ?>
     <br/>
         Video Category
          
     
       <?php echo $this->Html->link(__('Admin Add'), array('controller'=>'vcategories','action' => 'admin_add')); ?>
            <br/>
        