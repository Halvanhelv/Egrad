<li>
    <a href="category/<?=$category['alias'];?>"  ><?=$category['title'];?></a>
    <?php if(isset($category['childs'])): ?>
    <ul>

            <?= $this->getMenuHtml($category['childs'],$tab='',$tpl='4');?>

    </ul>
    <?php endif; ?>
</li>