<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Calendar</title>

  <style type="text/css">
      p, body, td { font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 10pt; }
      body { padding: 0px; margin: 0px; background-color: #ffffff; }
      a { color: #1155a3; }
      .space { margin: 10px 0px 10px 0px; }
      .main { padding: 10px; margin-top: 10px; }
  </style>
  <link type="text/css" rel="stylesheet" href="../../Css/common.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- DayPilot library -->
  <script src="../../Js/daypilot/daypilot-all.min.js"></script>

  <!-- additional themes -->
  <link type="text/css" rel="stylesheet" href="../../themes/calendar_g.css"/>
  <link type="text/css" rel="stylesheet" href="../../themes/calendar_green.css"/>
  <link type="text/css" rel="stylesheet" href="../../themes/calendar_traditional.css"/>
  <link type="text/css" rel="stylesheet" href="../../themes/calendar_transparent.css"/>
  <link type="text/css" rel="stylesheet" href="../../themes/calendar_white.css"/>

</head>
<body>

<div class="header">
  <h3>Todo List</h3>
</div>

<div class="main">
  <div style="display: flex">

    <div style="margin-right: 10px;">
      <div id="nav"></div>
    </div>

    <div style="flex-grow: 1;">

      <div class="space">
        <div class="row">
          <div class="col-md-6">
            Theme: <select id="theme">
            <option value="calendar_default">Default</option>
            <option value="calendar_white">White</option>
            <option value="calendar_g">Google-Like</option>
            <option value="calendar_green">Green</option>
            <option value="calendar_traditional">Traditional</option>
            <option value="calendar_transparent">Transparent</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="no-padding no-margin font-w-normal" for="time-option">View by : </label>
            <select name="viewType" id="time-option">
              <option value="Day" selected>Day</option>
              <option value="Week">Week</option>
              <option value="Month">Month</option>
            </select>
          </div>
        </div>
        

      </div>

      <div id="dp"></div>
    </div>

  </div>
</div>


<script type="text/javascript">
  var nav = new DayPilot.Navigator("nav");
  nav.showMonths = 3;
  nav.skipMonths = 3;
  nav.selectMode = "week";
  nav.onTimeRangeSelected = function (args) {
    dp.startDate = args.day;
    dp.update();
    loadEvents();
  };
  nav.init();

  var dp = new DayPilot.Calendar("dp");
  var view_type = $('#time-option').val();
  dp.viewType = view_type;

  dp.onEventClick = function (args) {
    alert("Work : [" + args.e.id() + "] " + args.e.text());
  };

  dp.init();

  loadEvents();

  function loadEvents() {
    dp.events.load("view/calendar/backend_events.php");
  }

  $('#time-option').on('change', function(){
    dp.viewType = $(this).val();
    dp.init();
  });

</script>

<script type="text/javascript">
  var elements = {
    theme: document.querySelector("#theme")
  };

  elements.theme.addEventListener("change", function () {
    dp.theme = this.value;
    dp.update();
  });

</script>


<footer class="footer">
  <div class="container-fluid">
    <a href="/index.php?controller=works">Work Management</a>
  </div>
</footer>
</body>
</html>

