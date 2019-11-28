
<div class="widget">
    <h1>Product Filters</h1>

    <div class="body bordered">
        <?php foreach($this->groups as $group_id => $group_item): ?>
            <?php if(isset($this->attrs[$group_id])): ?>
                <div class="category-filter <?php if ($group_id != 1) {echo 'price-filter';} ?> " >
                    <h2><?=$group_item;?></h2>
                    <hr>

                    <ul>
                        <?php if (isset($this->attrs[$group_id])): ?>
                            <?php foreach($this->attrs[$group_id] as $attr_id => $value): ?>
                                <?php
                                if(!empty($filter) && in_array($attr_id, $filter)){
                                    $checked = ' checked';
                                }else{
                                    $checked = null;
                                }
                                ?>
                                <li><input <?=$checked;?> class="le-checkbox" type="checkbox" name="checkbox" value="<?=$attr_id    ;?>" /> <label><?=$value;?></label> <span class="pull-right">(2)</span></li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </ul>

                </div>
            <?php endif;?>
        <?php endforeach; ?>


    </div>

</div>