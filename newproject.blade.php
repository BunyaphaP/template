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

label
{
  display: flex;
  text-align: left;
  padding: 0px 0px;
  margin: 20px 10px;
}

/* ช่อง input ใน form */
.form-control {
  padding: 8px 0px;
  margin: 20px 0px;
}

.column {
  float: left;
  width: 25%;
  margin: 40px 0px;
  padding: 0px 0px;
  text-align: left;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

input[type=text] {
  float: left;
  font-size: 14px;
  border: none;
}

.btn {
  background-color: #04AA6D;
  color: black;
  padding: 12px 28px;
  margin: 45px 100px;
  border: none;
  cursor: pointer;
  width: 10%;
  font-size: 15px;
  float: center;
}

.otherbtn {
  background-color: #D1D1D1;
  color: black;
  padding: 12px 28px;
  margin: 15px 100px;
  border: none;
  cursor: pointer;
  width: 10%;
  font-size: 15px;
  float: center;
  
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
    <h1 class="header">Add New Project</h1>

    <div class="container">
      <form action="" method="">
      @csrf
        <div class="row">
          <div class="column">
            <label>Project Name (Thai)</label><br>           
            <label>Project Description</label><br>
            <label>Project Theme Color</label>
          </div>

          <!-- Add Required ด้วย -->
          <div class="column">
            <input class="form-control" name="project_nameTH">
            <input class="form-control" name="project_description">
            <input class="form-control" name="">
          </div>

          <div class="column">
            <label>Project Name (English)</label><br>      
            <label>Start Date</label><br>
            <label>End Date</label>
          </div>

          <div class="column">
            <input class="form-control" name="project_nameEN">
            <input class="form-control" type="date" id="stardate" name="project_start_date"><br>
            <input class="form-control" type="date" id="enddate" name="project_end_date">
          </div>
        <button class="otherbtn">Cancel</button>
        <button class="otherbtn" type="reset">Clear</button>
        <button class="btn" type="submit">Add New Project</button>
      </form>
    </div>
  </article>
</section>

</body>
</html>