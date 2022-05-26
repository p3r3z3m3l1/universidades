<?php
class Universidades extends ActiveRecord {
    public function getUniversidades($page, $ppage=5){
return $this->paginate("page: $page", "per_page: $ppage", 'order: id desc'); 
    }
}
