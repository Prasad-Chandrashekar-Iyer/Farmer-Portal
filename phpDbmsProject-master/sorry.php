<!DOCTYPE html>
<html>

<style>
body {
background-image:url("agri.jpg");
background-repeat:no-repeat;
background-size:cover;
}

h1  {color: black;
font-size:48px;
text-align:center;

}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;

}

.navbar {
  overflow: hidden;
  background:none;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background:none;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: red;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ffa500;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<body>
<div class="navbar">
 <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
</div>
<h1>We are really sorry to see you go!</h1>
<img src="farmer.jpg" alt="farmer" style="width:400px;height:300px;">



</body>
</html>