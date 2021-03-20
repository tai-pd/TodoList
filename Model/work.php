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

        if (mysqli_fetch_lengths($req) > 0){
            foreach ($req->fetchAll() as $item) {
                $list[] = new Post($item['id'], $item['name'], $item['start_date'], $item['end_date'], $item['status']);
            }
    
        }    
        return $list;
    }
}