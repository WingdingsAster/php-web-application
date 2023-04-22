<?php
class Subject extends Table {
    public $subject_id = 0;
    public $name = '';
    public $otdel_id = 0;
    public $hours = time();

    public function validate($subject_id = 0, $name = '', $otdel_id = 0, $hours = time()) {
        $this->subject_id = $subject_id;
        $this->name = $name;
        $this->otdel_id = $otdel_id;
        $this->hours = $hours;
        return false;
    }
}
?>
