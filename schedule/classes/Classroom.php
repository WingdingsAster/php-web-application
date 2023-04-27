<?php
class Classroom extends Table {
    public $classroom_id = 0;
    public $name = '';

    public function validate($classroom_id = 0, $name = '') {
        $this->classroom_id = $classroom_id;
        $this->name = $name;
        return false;
    }
}
?>
