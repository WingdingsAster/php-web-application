<?php
class Otdel extends Table {
    public $otdel_id = 0;
    public $name = '';
    public $active = 1;

    public function validate($otdel_id = 0, $name = '', $active = 1) {
        $this->otdel_id = $otdel_id;
        $this->name = $name;
        $this->active = $active;
        return false;
    }
}

?>
