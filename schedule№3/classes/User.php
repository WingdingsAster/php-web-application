<?php

class User extends Table{
    public $user_id = 0;
    public $lastname = '';
    public $firstname = '';
    public $patronomic = '';
    public $login = '';
    public $pass =  '';
    public $gender_id = 0;
    public $birthday =  date();
    public $role_id = 0;

    public function validate($user_id = 0, $lastname = '', $firstname = '', $patronomic = '', $login = '', $pass = '', $gender_id = 0, $birthday = date(), $role_id = 0) {
        $this->user_id = $user_id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->patronomic = $patronomic;
        $this->login = $login;
        $this->pass = $pass;
        $this->gender_id = $gender_id;
        $this->birthday = $birthday;
        $this->role_id = $role_id;

        return false;
    }
}

?>