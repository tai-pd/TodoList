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
        $this->render('index', $data);
        $content = ob_get_clean();
        require_once('view/layouts/application.php');
    }

    public function addWork(){
        $date_start = date_format(new DateTime($_POST['start_date']), 'Y-m-d');
        $date_end = date_format(new DateTime($_POST['end_date']), 'Y-m-d');
        $response = Work::addNew($_POST['name'], $date_start, $date_end, $_POST['status']);
        if ($response){
            $works = Work::all();
            $data = array('works' => $works);
            $html = $this->render_php('table', $data);
            return print_r(json_encode(
                array('status'=> true,
                    'table'=> $html
                )
            ));
        }else{
            return print_r(json_encode(array('status'=> false)));
        }   
    }

    public function editWork(){
        $date_start = date_format(new DateTime($_POST['start_date']), 'Y-m-d');
        $date_end = date_format(new DateTime($_POST['end_date']), 'Y-m-d');
        $response = Work::editWork($_POST['id'] ,$_POST['name'], $date_start, $date_end, $_POST['status']);
        if ($response){
            $works = Work::all();
            $data = array('works' => $works);
            $html = $this->render_php('table', $data);
            return print_r(json_encode(
                array('status'=> true,
                    'table'=> $html
                )
            ));
        }else{
            return print_r(json_encode(array('status'=> false)));
        }
    }

    public function deleteWork(){
        $response = Work::delete($_POST['id']);
        if ($response){
            $works = Work::all();
            $data = array('works' => $works);
            $html = $this->render_php('table', $data);
            return print_r(json_encode(
                array('status'=> true,
                    'table'=> $html
                )
            ));
        }else{
            return print_r(json_encode(array('status'=> false)));
        } 
    }

    public function error()
    {
        $this->render('error');
    }
}