<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <?php echo $this->Html->Link(' E-Educator', '/', array('class' => array('navbar-brand glyphicon glyphicon-film'))); ?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li > <?php echo $this->Html->link(__('Home'), array('controller'=>'pages','action' => 'home')); ?></li>
            <li><?php echo $this->Html->link(__('About'), array('controller'=>'pages','action' => 'about')); ?></li>
            <li><?php echo $this->Html->link(__('Contact'), array('controller'=>'pages','action' => 'contact')); ?></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
    
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span><b class="caret"></b></a>
              <ul class="dropdown-menu">

                 <?php echo $this->element('dropdown'); ?>
             </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>