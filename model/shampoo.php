<?php
class ModelShampoo extends MasterModel {
    function getDuLieu() {
        return parent::get_all_from('shampoo');
    }
}   
?>