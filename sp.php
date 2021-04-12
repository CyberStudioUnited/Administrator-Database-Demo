<!DOCTYPE html>
<title>admin database port 127.0.0.1</title>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 195px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #696969;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <img src="ADMINDB.png" alt="AdminDB">
  <a href="settings.php">Settings</a>
  <a href="index.php">Tools</a>
</div>


<div class="main">
  <h1>This will allow you to build a website easier.</h1>
  <form action="buildwebsite.php">
    <input type="submit" value="Open AD Site Builder" />
</form>

  <p id="cookies"></p>

<script>
function getCookies() {
  var x = "Your cookies: " + document.cookie;
  document.getElementById("cookies").innerHTML = x;
}
</script>
</div>



</body>
</html> 
