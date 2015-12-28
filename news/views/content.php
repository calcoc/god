<div id ="container">
<?php foreach ($items as $item): ?>
 <div class ="item <?= $i++?>">
   <a href="<?= $item->link ?>">

     <h3 class="headline" >
        <?= $item->title;?>
     </h3>
   </a>
   <p class='description'>
 <?php
   $description = $item->description;
   	preg_match('|src="(.*?).jpg"|i', $description, $match);
	if(!empty($match)){echo '<img src="'.$match[1].'.jpg" />';
	}else{echo'<img src= "./NoImage.png">';} ?>
    </p> </div>
<?php endforeach ?>
</div>
