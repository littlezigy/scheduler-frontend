<?php
class View {

    private $skin = 'default';
    private $appname = 'Scheduler';
    private static $_instance = 0;
    private $loggedin = false;

    public static function view() {
        if (self::$_instance === 0) {
            self::$_instance = new View();
        }

        return self::$_instance;
    }

    private function __construct() {
    }

    private function loadHeaders () {
        $headers = "<html><head>
                <title>$this->appname - The best way to stay on time</title>
                <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
                <link rel = 'stylesheet' href = '/styles/main.css'>
            </head>";

        echo $headers;
    }

    protected function buildPageNoSkin(String $template, Array $templatearray = array()) {
        $this->loadHeaders();
        $templatearray['appname'] = $this->appname;
        echo $this->loadTemplate($template, $templatearray);
    }

    protected function buildPage(String $template = 'notFound', Array $templatearray = array()) {
        $this->loadHeaders();
        $templatearray['appname'] = $this->appname;
        $contents = $this->loadTemplate($template, $templatearray);
        require __DIR__ . "/html/skins/$this->skin.tpl";
    }

    protected function loadTemplate(String $template, Array $templatearray = array()) {
        extract($templatearray);
        ob_start();
        require __DIR__. "/html/templates/$template.tpl";
        return ob_get_clean();
    }
}

class Page extends View {
    public function __construct() {
        $this->view = parent::view();
    }
    public function homepage(Model $model) {
        if($model->loggedin === true) {
            $this->app();
        } else {
            $this->static('home');
        }
    }

    public function app() {
        require __DIR__ . '/vue/dist/index.html';
    }
    public function login(Model $model) {
        if($model->loggedin === false) {
            echo $this->buildPageNoSkin('login');
        } else {
            echo "true";
            header('Location: /dashboard');
        }
    }
    public function static(String $template = 'notFound') {
        $this->buildPage($template);
    }
}
