
<div class="col-md-4">
    <ul class="list-unstyled">
        <li>
            <a href="?id=<?=$id;?>"><?=$category['title'];?></a>
        </li>
        <?php if(isset($category['childs'])): ?>
            <?= $this->getMenuHtml_third($category['childs']);?>
        <?php endif; ?>
</div>
