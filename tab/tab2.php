<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 

</head>

<body>
<div class="container">
<h3>A basic demo of Bootstrap Tabs</h3>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li><a href="#hometab" role="tab" data-toggle="tab">Home</a></li>
  <li><a href="#javatab" role="tab" data-toggle="tab">Java</a></li>
  <li><a href="#csharptab" role="tab" data-toggle="tab">C#</a></li>
  <li class="active"><a href="#mysqltab" role="tab" data-toggle="tab">MySQL</a></li>
  <li><a href="#jquerytab" role="tab" data-toggle="tab">jQuery</a></li>
  
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane" id="hometab">Write something for home tab</div>
  <div class="tab-pane" id="javatab">The Java is an object-oriented programming language <br /> that was developed by James Gosling from the Sun Microsystems in 1995.</div>
  <div class="tab-pane" id="csharptab">C# is also a programming language</div>
  <div class="tab-pane active" id="mysqltab">MySQL is a databased mostly used for web applications.</div>
  <div class="tab-pane" id="jquerytab">jQuery content here</div>
  
</div>

</body>
</html>

