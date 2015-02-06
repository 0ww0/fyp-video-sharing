<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
           <div class="panel-group" id="accordion">

            <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
         Profile
        </a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">
         
       <?php echo $this->Html->link(__('Profile'), array('controller'=>'profiles','action' => 'index')); ?>
      </div>
    </div>
  </div>


   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
         Video
        </a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse">
      <div class="panel-body">
        <?php echo $this->Html->link(__('List of Video'), array('controller'=>'videos','action' => 'index')); ?><br/>
        <?php echo $this->Html->link(__('Add New Video'), array('controller'=>'videos','action' => 'add')); ?><br/>
        <?php echo $this->Html->link(__('Private Video'), array('controller'=>'videos','action' => 'index_private')); ?>
      </div>
    </div>
  </div>


        
    

        
      
        
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
         Forum
        </a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <div class="panel-body">
        
        <?php echo $this->Html->link(__('List of Forum'), array('controller'=>'topics','action' => 'index')); ?><br/>
       <?php echo $this->Html->link(__('Add Forum Topic'), array('controller'=>'topics','action' => 'add')); ?>
      </div>
    </div>
  </div>

        
    
  
        
  


</div>
        
   

          </div>
        </div><!--/span-->
