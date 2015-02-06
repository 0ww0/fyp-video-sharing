

<?php foreach ($lecturers as $lecturer): ?>
	<?php if($lecturer['Lecturer']['picture'] != NULL) { echo "<img src='".$this->webroot . $lecturer['Lecturer']['picture']."' style='border-radius:10em;' width='50%'/>"; }else { echo $this->Html->image('image/default',array('width'=>'50%' , 'style'=>'border-radius:10em')) ;}?>&nbsp;
<?php endforeach; ?>
