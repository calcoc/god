<div id ="container">

<?php foreach ($items as $item): ?>
 <div class ="item <?= $i++;?>">
  <a href="<?= $item->link ;?>">
    <h3 class="headline-<?=$i;?>">
     <span><?=$i-1;?></span>
    <?=$item->title;?>       
    </h3>

   
   <p class='description'>
 <?php
  $description = $item->description;
  $img =$item->enclosure["url"];
  preg_match('|src="(.*?).jpg"|i', $description, $match);
	if(!empty($match)){echo '<img src="'.$match[1].'.jpg" />';
  }elseif(!empty($img)){
  echo '<img src="'.$img.'" />';
  }else{echo'<img src= "./NoImage.png">';} ;?>
    </p> 
  </a>
  <div class = "bottom">
  <span id = "time" >
  <?=$date = date("Y年m月d日 H時i分" , strtotime($item->pubDate));?>
  </span>
  <div id="cook">
    <input type="hidden" id="<?=$item->title;?>" name="title" value="<?= $item->title;?>">
    <input type="hidden" id="<?=$match[1];?>"name="img" value="<?=$match[1];?>">
    <input type="hidden" id="<?=$item->link;?>"name="img" value="<?=$item->link;?>">
    <input type="button" id="after" value="後で読む">
  </div>
  </div>
  </div>
<?php endforeach ;?>


</div>
