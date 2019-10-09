<li>
   <a href="?id=<?=$id;?>"><?=$category['title'];?></a>


</li>
<?php if(isset($category['childs'])): ?>
    <?= $this->getMenuHtml2($category['childs']);?>
<?php endif; ?>
