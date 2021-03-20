<?php
require_once('model/work.php');
require_once('controller/base_controller.php');


class WorksController extends BaseController
{
    function __construct()
    {
        $this->folder = 'works';
    }
    public function index()
    {
        $works = Work::all();
        $data = array('works' => $works);
        $this->render('table', $data);
    }

    public function error()
    {
        $this->render('error');
    }
}