<!DOCTYPE html>
<html>
<head>
  <title>Progress Bar test</title>
  <script
    src="//code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="progress_bar.js"></script>
</head>
<body>
  <h1>Progress Bar Example</h1>
  <p><a href="https://github.com:middlebury/progress-bar">GitHub repo</a></p>
  <p>Click the button.</p>
  <p><button id="mybutton">Start the action</button></p>
  <div id="progressbar"></div>

  <h2>Client-side</h2>
  <p>AJAX call incrementally displaying the contents of the response in a div.</p>
  <p>Documentation:</p>
  <ul>
    <li><a href="http://api.jquery.com/jquery.ajax/">jquery.ajax</a></li>
    <li><a href="http://api.jqueryui.com/progressbar/">jquery-ui progressbar widget</a>
    <li><a href="https://stackoverflow.com/questions/22502943/jquery-ajax-progress-via-xhr">JQuery ajax progress via xhr</a></li>
  </ul>
  <pre><?php print htmlentities(file_get_contents('progress_bar.js')); ?></pre>

  <h2>Server-side</h2>
  <p>The response can be directly viewed at <a href="submit.php">submit.php</a>. Source:</p>
  <pre><?php print htmlentities(file_get_contents('submit.php')); ?></pre>

</body>
</html>
