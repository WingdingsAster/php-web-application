<?php
class LessonPlan extends Table {
    public $lesson_plan_id = 0;
    public $gruppa_id = 0;
    public $subject_id = 0;
    public $user_id = 0;

    public function validate($lesson_plan_id = 0, $gruppa_id = 0, $subject_id = 0, $user_id = 0) {
        $this->lesson_plan_id = $lesson_plan_id;
        $this->gruppa_id = $gruppa_id;
        $this->subject_id = $subject_id;
        $this->user_id = $user_id;
        return false;
    }
}
?>
