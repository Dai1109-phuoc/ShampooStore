<?php
class MasterModel {
    public function __construct(){ }

    public static function get_all_from($table) {
        $db = new connect();
        $select = "select * from $table";
        $result = $db->getList($select);
        return $result;
    }
}
?>