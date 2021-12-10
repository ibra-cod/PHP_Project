<?php 
    namespace App\Controller;

    abstract class BaseController {
        protected array $params;

        public function __construct(string $action = '' ,array $params = []) {
            $this->action = $action;
            $this->params = $params;
        }
        
        public function render($title, array $vars, string $view) {
            foreach ($vars as $key => $value) {
                ${$key} = $value;
            }
            $view = dirname(__DIR__, 2) . '/View/' . $view . '.php';
            ob_start();
            require $view;
            $content = ob_get_clean();
            require dirname(__DIR__, 2) . '/View/template.php';
        }


        

    }


