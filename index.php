<?php
require_once "pdo.php";
session_start();
?>
<html>
<head>
</head>
<body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.6.1.min.js"></script>

  <form id="target" style="margin-bottom : 0px;">
    Email suggession : <input type="text" id="text" name="text">
  </form>
  <p id="result" name="result" style="color:grey;font-size:10;padding: 0px 125px;margin-top : 0px"> You can use letters, numbers, periods.</p>

  <script type="text/javascript">
    $('#text').focusout(function(event) {
      var form = $('#target');
      var txt = form.find('input[name="text"]').val();
      if (txt != "") {
        $.getJSON('getjson.php', {email: txt}, function(data) {
          if (data.length == 0) $('#result').empty().append("You can use this username").css("color", "blue");
          else $('#result').empty().append("That username is taken. Try another").css("color", "red");
        })
      }
      else $('#result').empty().append("You can use letters, numbers, periods.").css("color", "grey");

    });
  </script>
</body>
</html>