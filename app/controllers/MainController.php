<?php

namespace app\controllers;

use app\models\Product;
use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::find('brand');
        $hits = \R::find('product', "hit = 'on' AND status = 'on' LIMIT 6");

        // запись в куки запрошенного товара
        $p_model = new Product();


        // просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if($r_viewed){
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ')  LIMIT 10', $r_viewed);
        }
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands', 'hits','recentlyViewed'));

    }

}