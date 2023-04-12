
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
    <link rel="icon" href="admin/img/logo.png" />
    <script src="function.js"></script>

</head>
<body>
  <div class="layout">

    <?php require 'header.php'; ?>

    <main class="content">
      <!-- <div class="main-header">
        <div class="main-title">
          <h1>New Event</h1>
        </div>
        <div class="main-form">
          <form name="event">
            <input type="text" id="ftitle" placeholder="Add title">
            <input type="text" id="fdescription" placeholder="Add description">
            <input type="text" id="flocation" placeholder="Add location">

            <div class="input-group">
              <input type="date" id="fdate">
              <label for="fallday" class="all_day">All day:</label>
              <input type="checkbox" class="checkbox" id="fallday" onchange="form_display_hour()">
            </div>

            <div class="input-hour">
              <div id="fhourdiv">
                <input type="time" id="fstart" class="hour" onchange="form_validate_hour()">
                <input type="time" id="fend" class="hour" onchange="form_validate_hour()">
              </div>
            </div>

            <input type="submit" id="fsubmit" value="Save" class="button">
          </form>
        </div>
      </div> -->
      
    </main>

    <footer class="footer">
      <div class="footer_sign">made with <span class="fas fa-heart"></span> by <a href="#" target="blank">Garibmans</a></div>
    </footer>

  </div>
</body>