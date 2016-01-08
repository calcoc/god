<div id ="container">
<?php foreach ($items as $item): ?>
 <div class ="item <?= $i++?>">
   <a href="<?= $item->link ?>">

     <h3 class="headline" >
        <?= $item->title;?>
    </h3>
   
   <p class='description'>
 <?php
   $description = $item->description;
   	preg_match('|src="(.*?).jpg"|i', $description, $match);
	if(!empty($match)){echo '<img src="'.$match[1].'.jpg" />';
	}else{echo'<img src= "./NoImage.png">';} ?>
    </p> 
    </a>
  <div class = "bottom">
  <div id = "time" >
  </div>
  <div id="cook">
    <input type="hidden" id="title<?= $i++?>" name="title" value="<?= $item->title;?>">
    <input type="hidden" id=""name="" value="">
    <input type="button" id="after" value="後で読む">
  </div>
  </div>
  </div>
<?php endforeach ?>

</div>
