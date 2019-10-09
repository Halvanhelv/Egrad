
        <li class="dropdown menu-item">
            <a href="category/<?=$category['alias'];?>" class="dropdown-toggle" data-toggle="dropdown"><?=$category['title'];?></a>
            <?php if(isset($category['childs'])): ?>
            <ul class="dropdown-menu mega-menu">
                <li class="yamm-content">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <?= $this->getMenuHtml2($category['childs']);?>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <?php endif; ?>
        </li><!-- /.menu-item -->





