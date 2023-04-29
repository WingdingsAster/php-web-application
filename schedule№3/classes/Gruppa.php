<?php
class Gruppa extends Table {
    public $gruppa_id = 0;
    public $name = '';
    public $special_id = 0;
    public $date_begin = 22.04.2023;
    public $date_end = 22.04.2023;


    public function validate($gruppa_id = 0, $name = '', $special_id = 0, $date_begin = date(), $date_end = date()) {
        $this->gruppa_id = $gruppa_id;
        $this->name = $name;
        $this->special_id = $special_id;
        $this->date_begin = $date_begin;
        $this->date_end = $date_end;
        return false;
    }
}
?>

