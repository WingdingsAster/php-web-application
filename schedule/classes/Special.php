<?php
class Special extends Table {
    public $special_id = 0;
    public $name = '';
    public $otdel_id = 0;

    public function validate($special_id = 0, $name = '', $otdel_id = 0) {
        $this->special_id = $special_id;
        $this->name = $name;
        $this->otdel_id = $otdel_id;
        return false;
    }
}
?>

