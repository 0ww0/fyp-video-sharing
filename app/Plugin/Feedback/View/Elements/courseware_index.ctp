<?php
/**
	CakePHP Feedback Plugin

	Copyright (C) 2012-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/
?>
<section class="comments-container">
	<header>
		<h2><?php echo __('Comments'); ?></h2>
	</header>
	<div class="comment-list">
	
		<?php foreach ($coursewares as $courseware): ?>
			<article class="comment-content">
				<a id="comment-<?php echo $courseware['id']; ?>"> </a>
				<div class="panel panel-default">
  				<div class="panel-heading">
   				 <h3 class="panel-title">

				<div class="row">
 			 	<div class="col-xs-12 col-sm-6 col-md-8"><?php echo Sanitize::html($courseware['name']); ?></div>
  				<div class="col-xs-6 col-md-4">	<?php
					// permalink
					$timestamp = $this->Comments->Time->timeAgoInWords($courseware['created'], array('format' => 'Y/m/d H:i'));
					$permalink = $this->Html->link($timestamp, '#courseware-'.$courseware['id'], array('title' => __('Permalink')));
					?><?php echo $permalink; ?></div>
				</div>
		
  
  				</div>
				  <div class="panel-body">
				   <?php echo nl2br(Sanitize::html($courseware['content'])); ?>
				  </div>
				</div>
				
				
				
			</article>
		<?php endforeach; ?>
	</div>
</section>
