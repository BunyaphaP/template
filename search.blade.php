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


/* Style the list inside the menu */
.header {
  text-align: center;
  background-color: #C1FF72;
  width: 100%;
  padding: 20px 20px;
  font-size: 14px;
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
  text-align: center;
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

.search-container {
  float: right;
}

input[type=text] {
  float: right;
  padding: 10px 30px;
  margin-right: 20px;
  font-size: 14px;
  border: none;
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
      
      <!-- @foreach($users as $user)
      <p><b>{{$user['firstnameEN']}} {{$user['lastnameEN']}}</b></p>
      <p>{{$user['department']}} Department</p> -->
      
    </div>
    @endforeach
    <ul>
      <a href="/search">Search</a>
      <a href="/allproject">All Projects</a>
      <a href="#">My Account</a>
    </ul>
  </nav>
  
  <article>
    <h1 style="font-size:28px">Search</h1>
    <br>
    <br>
    <div class="search-container">
      <input type="text" placeholder="Type your keyword here.." name="search">
      <!-- <p>Example : salt-tolerant, Prinyaka Sharma, The research of rice</p> -->
    <div>
  </article>
</section>


</body>
</html>