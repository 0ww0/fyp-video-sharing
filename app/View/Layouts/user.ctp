<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('E-Educator', 'E-Educator');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $title_for_layout; ?>
  </title>
  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('admin/bootstrap');
     echo $this->Html->css('admin/simple-sidebar');
     echo $this->Html->css('datepicker/datepicker');
     echo $this->Html->css('admin/font-awesome.min');
    echo $this->Html->script('admin/jquery-1.10.2');
    

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
 
</head>
<body>
  <div id="wrapper">
      
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
       <?php echo $this->element('sidebar2'); ?><br/>
      
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">

        <div class="content-header">

      <?php echo $this->element('navbar'); ?>
      
    <br/>
          <h2>
            <a id="menu-toggle" href="#" class="btn btn-default btn-large"><i class="glyphicon glyphicon-list"></i></a>
         
          </h2> 

        </div>
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
   
          <br/>
      
      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
   
        </div>
      </div>
 
    </div>
  
  
   
   
   
 
 




  
  <?php echo $this->Html->script('admin/bootstrap'); ?>
    <?php echo $this->Html->script('datepicker/bootstrap-datepicker'); ?>
    <?php echo $this->fetch('script_execute'); ?>
      <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    $('.datepicker').datepicker({ format: 'yyyy-mm-dd'});
    </script>
    
</body>

</html>
