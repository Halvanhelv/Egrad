<li class="dropdown menu-item">
    <?php if(isset($category['childs'])): ?>
        <?php $child = 'dropdown-toggle' ?>
    <?php else: $child = ''   ?>
    <?php endif; ?>
    <a href="category/<?=$category['alias'];?>" class=" <?=$child?>" data-toggle=""><?=$category['title'];?></a>
    <?php if(isset($category['childs'])): ?>
        <ul class="dropdown-menu mega-menu">
            <li class="yamm-content">
                <div class="row">
                    <?= $this->getMenuHtml($category['childs'],$tab='',$tpl='2');?>
                </div>
            </li>
        </ul>
    <?php endif; ?>
</li><!-- /.menu-item -->





