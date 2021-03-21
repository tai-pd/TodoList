<?php
require_once('controller/base_controller.php');
class CalendarController extends BaseController
{
    function __construct()
    {
        $this->folder = 'calendar';
    }
    public function index()
    {
        $this->render('index');
    }
}
?>