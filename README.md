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
  <p>All Tools.</p>
  <img src="fm.png" alt="FM" href="filemanager.php" width="100" height="100" ><a href="filemanager.php">File Manager</a>
  <img src="domain.png" alt="FM" href="dc.php" width="100" height="100" ><a href="dc.php">Domain Checker</a>
  <img src="cookies.png" alt="FM" href="cookies.php" width="100" height="100" ><a href="cookies.php">Cookies Checker</a>
  <P></p>
  <img src="sp.png" alt="site publisher" href="sp.php" width="100" height="100" ><a href="sp.php">Site Publisher</a>
  <img src="ssl.png" alt="ssl" href="ssl.php" width="100" height="100" ><a href="ssl.php">SSL/TLS</a>
  <img src="ap.jpg" alt="dash" href="dash\index.html" width="100" height="100" ><a href="dash\index.html">Dash App Installer</a>
</div>
</body>
</html> 
