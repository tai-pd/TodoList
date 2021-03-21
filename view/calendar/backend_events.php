<?php
require_once('../../connection.php');
require_once('../../model/work.php');

// $start_date = date_format(new DateTime($_GET['start']), 'Y-m-d H:i');
// $end_date = date_format(new DateTime($_GET['end']), 'Y-m-d H:i');
// $result = Work::workByView($start_date, $end_date);
$result = Work::all();
$events = [];

class Event {}
$events = array();

foreach($result as $row) {
  $e = new Event();
  $e->id = $row->id;
  $e->text = $row->name;
  $e->start = $row->start_date;
  $e->end = $row->end_date;
  $events[] = $e;
}

header('Content-Type: application/json');
echo json_encode($events);
