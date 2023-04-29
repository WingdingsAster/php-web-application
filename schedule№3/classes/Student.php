<?php
class Student extends Table {
    public $user_id = 0;
    public $gruppa_id = 0;
    public $num_zach = 0;
    public function validate($user_id = 0, $gruppa_id = 0, $num_zach = 0) {
        $this->user_id = $user_id;
        $this->gruppa_id = $gruppa_id;
        $this->num_zach = $num_zach;
        return false;
    }
}
?>
