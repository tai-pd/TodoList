<?php
require_once('../../connection.php');
require_once('../../model/work.php');

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
