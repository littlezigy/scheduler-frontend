<?php
class Model {
    public $loggedin = false;

    public function login() {
        $this->loggedin = true;
    }
}
