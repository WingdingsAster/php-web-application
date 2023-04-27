<?php
class Teacher extends Table {
    public $user_id = 0;
    public $otdel_id = 0;

    public function validate($user_id = 0, $otdel_id = 0) {
        $this->user_id = $user_id;
        $this->otdel_id = $otdel_id;
        return false;
    }
}
?>
