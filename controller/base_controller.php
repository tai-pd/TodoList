<?php
class BaseController
{
    protected $folder;

    function render($file, $data = array()){
        $view_file = 'view/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
        } else {
            header('Location: index.php?controller=works&action=error');
        }
    }

    function render_php($file, $data = array())
    {
        $view_file = 'view/' . $this->folder . '/' . $file . '.php';
        extract($data);
        ob_start();
        include($view_file);
        $var=ob_get_contents(); 
        ob_end_clean();
        return $var;
    }
}