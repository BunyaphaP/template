<!DOCTYPE html>
<html lang="en">
<head>
<title>Rice Proteomic and Metabolite Experiment Management and Data Consolidation System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

nav {
  float: left;
  width: 20%;
  height: 100vh;
  background: #C1FF72;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 30px 20px;
  width: 80%;
  text-align: center;
  background-color: #EFFFDA;
  font-size: 25px;
  height: 100vh;
}

section::after {
  content: "";
  display: table;
  clear: both;
}

.form-control {
  width: 100%;
  padding: 8px 15px;
  margin: 8px 18px;
  border: 1px solid #ccc;
  resize: vertical;
}

.column {
  float: left;
  width: 25%;
  padding: 10px 40px;
  text-align: left;
}


.row::after {
  content: "";
  display: table;
  clear: both;
}

.container {
  padding: 10px 20px;
  font-size: 15px;
}

label
{
  display: flex;
  padding: 8px;
  text-align: left;
}

button {
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
  margin: 15px 100px;
}

a {
  float: center;
  color: red;
  text-decoration: none;
}

</style>
</head>
<body>


<section>
  <nav>
    <ul>

    </ul>
  </nav>
  
  <article>
    <h1 text-align=center>My Account</h1>
    <form action="" method="">
        <div class="container">
            <div class="row">
                <div class="column">
                  <label for="">Name (Thai)</label><br>              
                  <label for="">Name (English)</label><br>
                  <label for="">Department</label><br>
                  <label for="">Position</label><br>
                  <label for="">Email</label><br>
                  <label for="">Password</label><br>
                </div>
                <div class="column">
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                </div>
                <div class="column">
                  <label for="">Surname (Thai)</label><br>
                  <label for="">Surname (English)</label><br>               
                  <label for="">Affiliate</label><br>                  
                  <label for="">Graduation Level</label><br>                
                  <label for="">Re-enter Email</label><br>                 
                  <label for="">Re-enter Password</label><br>                 
                </div>
                <div class="column">
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                  <input class="form-control" name="" required><br>
                </div>
            </div>
            <br>
            <span><b><a href="#" target="_blank">Delete This Account</a></b></span>   
            <br>
            <button class="otherbtn">Cancle</button>
            <button class="otherbtn" type="reset">Clear</button>
            <button>Save</button>
        </div>
    </form>
  </article>
</section>


</body>
</html>