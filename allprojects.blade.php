<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/1db1985130.js" crossorigin="anonymous"></script>
<title>Rice Proteomic and Metabolite Experiment Management and Data Consolidation System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

nav {
  float: left;
  text-align: center;
  width: 20%;
  height: 100vh;
  background: #04AA6D;
}


div.header {
  text-align: center;
  background-color: #C1FF72;
  width: 100%;
  padding: 20px 20px;
  font-size: 14px;
}

h1.header {
  text-align: center;
  font-size: 28px;
}

.profile {
  text-align: center;
  padding-top: 2px;
  padding-bottom: 20px;
  background-color: lightgrey;
  overflow: visible;
}

ul {
  list-style: none;
}

a {
  display: block;
  background: #04AA6D;
  padding: 10px 10px;
  width: 100%;
  font-size: 18px;
  color: white;
  border-bottom: 2px solid black;
}

a:hover{
  background-color: white;
  color: black;
}

article {
  float: left;
  padding: 30px;
  width: 80%;
  background-color: #EFFFDA;
  height: 100vh;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

div.add {
  float: right;
}

a.add {
  background-color: #C1FF72;
  color: black;
  font-size: 16px;
  padding: 10px 25px;
  margin-right: 20px;
  border: none;
  cursor: pointer;
  border-radius: 4px;
  text-align: center;
}

a.add:hover {
  background-color: white;
}

</style>

</head>

<body>
<section>
  <nav>
    <div class="header">
      <p><b>Rice Proteomic and Metabolite Experiment Management and Data Consolidation System</p></b>
    </div>
    <div class="profile">
      <p style="color:red" href="#">Log out (แก้)</p><br>
      <i class="fa-solid fa-user fa-4x" style="color: #000000;"></i>
      <br>
      <p><b>{{Auth::User()->firstnameEN}} {{Auth::User()->lastnameEN}}</b></p>
      <p>{{Auth::User()->department}} Department</p>
      <!-- แก้ไขโดยเป็นไปตาม account type  -->
      <p>Researcher</p>
    </div>

    <ul>
      <a href="/search">Search</a>
      <a href="/allproject">All Projects</a>
      <a href="#">My Account</a>
    </ul>
  </nav>
  
  <article>
    <h1 class="header">All Projects</h1>
    <br>
    <br>
    <div class="add">
      <a class="add" href="{{url('/newproject')}}"><b>Add New Project</b></a>
    </div>
    <br><br><br>
    <h2 style="font-size:20px">My Projects</h2>
    <br>
    <h2 style="font-size:20px">Saved Projects</h2>
    
  </article>
</section>


</body>
</html>