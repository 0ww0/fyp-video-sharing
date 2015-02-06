

<?php foreach ($profiles as $profile): ?>
	<?php if($profile['Profile']['picture'] != NULL) { echo "<img src='".$this->webroot . $profile['Profile']['picture']."' style='border-radius:10em;' width='50%'/>"; }else { echo $this->Html->image('image/default',array('width'=>'50%' , 'style'=>'border-radius:10em')) ;}?>&nbsp;
<?php endforeach; ?>
