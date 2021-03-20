<?php
class Work
{
    public $id;
    public $name;
    public $start_date;
    public $end_date;
    public $status;

    function __construct($id, $name, $start_date, $end_date, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->status = $status;
    }

    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM work');
        if ($req->num_rows > 0){
            foreach ($req->fetch_all() as $item) {
                $list[] = new Work($item[0], $item[1], $item[2], $item[3], $item[4]);
            }
        }
         
        DB::closeConnection();
        return $list;
    }

    static function addNew($name, $start_date, $end_date, $status){
        $db = DB::getInstance();
        $query_str = 'INSERT INTO work(work_name, starting_date, ending_date, status) VALUES (\''.$name.'\',\''.$start_date.'\',\''.$end_date.'\','.$status.');';
        $req = $db->query($query_str);
        return $req;
    }

    static function editWork($id, $name, $start_date, $end_date, $status){
        $db = DB::getInstance();
        $query_str = 'UPDATE work SET work_name = \''.$name.'\', starting_date = \''.$start_date.'\', ending_date = \''.$end_date.'\', status='.$status.' WHERE id = \''.$id.'\' ;';
        var_dump($query_str);
        $req = $db->query($query_str);
        return $req;
    }

    static function delete($id){
        $db = DB::getInstance();
        $query_str = 'DELETE FROM work WHERE ( id = \''.$id.'\');';
        $req = $db->query($query_str);
        return $req;
    }
}