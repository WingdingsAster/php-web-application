<?php
class Schedule extends Table {
    public $schedule_id = 0;
    public $lesson_plan_id = 0;
    public $day_id = 0;
    public $lesson_num_id = 0;
    public $classroom_id = 0; 

    public function validate($schedule_id = 0, $lesson_plan_id = 0, $day_id = 0, $lesson_num_id = 0, $classroom_id = 0) {
        $this->schedule_id = $schedule_id;
        $this->lesson_plan_id = $lesson_plan_id;
        $this->day_id = $day_id;
        $this->lesson_num_id = $lesson_num_id;
        $this->classroom_id = $classroom_id;
        return false;
    }
}
?>
