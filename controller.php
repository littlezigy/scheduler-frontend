<?php
class Controller {
    public function checklogin(View $view) {
        $view->app();
    }
    public function login(Model $model) {
        $model->login();
    }
}
