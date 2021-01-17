<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>rhub.tk - Short Shortcuts</title>
    <link rel="stylesheet" href="https://rhub.netlify.app/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/i/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/i/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/i/favicon-16x16.png">
    <link rel="manifest" href="/i/site.webmanifest">
    <meta property="og:title" content="rhub.tk" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/i/rhub.png" />
  <meta property="theme-color" content="#346F66" />
	  
	 <?php
if (isset($_GET['r']) && $_GET['r']) {
  echo "<meta property=\"og:description\" content=\"Redirect to a Shortcut with RoutineHub ID {$_GET['r']}\" />";
} else {
  echo '<meta property="og:description" content="Shorten RoutineHub Shortcut URLs!" />';
}
?>
  <
  </head>
  <body>
  <h1>Hi! 👋</h1>
  <h2>Welcome to rhub.tk - the RoutineHub URL shortener</h2>
  <h3>How do I use this black magic?</h3>
  <p>It's simple! Just enter a RoutineHub ID down below and click "Generate"!</p>

<input id="numb">

<button class="button" type="button" onclick="rhID()">Generate</button>

<p id="result"></p>

<p id="r">Error</p>

<script>
function rhID() {
  var input, text;

  input = document.getElementById("numb").value;
  id = Math.round(input);

  if (isNaN(input) || input < 1) {
    text = "That's not a valid RoutineHub ID!";
  } else {
    text = `<a class="button" href="https://rhub.tk?r=${id}" rel="noopener noreferrer" target="_blank">Open shortened URL</a> <strong>Raw URL:</strong> <a href="https://rhub.tk?r=${id}" rel="noopener noreferrer" target="_blank">https://rhub.tk?r=${id}</a>`;
  }
  document.getElementById("result").innerHTML = text;
}
</script>
<script>
    const queryString = new URLSearchParams(window.location.search);
	const r = queryString.get('r');
    if( r ) {
    	document.getElementById('r').innerHTML = `<h1>You are being redirected...</h1>`;
      window.location.replace(`/r?rhid=${r}`); }
    else {
    	document.getElementById('r').innerHTML = `You are not being redirected` }
</script>
/body>
</html>
