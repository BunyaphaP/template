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

header {
  background-color:#C1FF72;
  padding: 30px;
  text-align: center;
  font-size: 14px;
  color: black;
}

article {
  float: left;
  padding: 30px 20px;
  width: 100%;
  text-align: center;
  background-color: #EFFFDA;
  font-size: 25px;
  height: 100%;
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

/* Create equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px 40px;
  text-align: left;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
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

button:hover {
  opacity: 0.8;
}

.otherbtn {
  background-color: #D1D1D1;
  color: black;
  margin: 15px 100px;
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

</style>

</head>

<body>
<header>
  <h1>Rice Proteomic and Metabolite Experiment Management and Data Consolidation System</h1>
  <h2>ระบบจัดการผลการทดลองและรวบรวมข้อมูลโปรตีโอมิกส์และเมแทบอไลต์ในข้าว</h2>
</header>

<section>
  <article>
    <h1>Sign Up</h1>

   <div class="container">
      <form action="{{route('signup.post')}}" method="POST">
      @csrf
          <div class="row">
              <div class="column">
                <label>Name (Thai)</label><br>              
                <label>Name (English)</label><br>
                <label>Department</label><br>
                <label>Position</label><br>
                <label>Email</label><br>
                <label>Password</label><br>
              </div>
              <div class="column">
                <input class="form-control" name="firstnameTH" required><br>
                <input class="form-control" name="firstnameEN" required><br>
                <input class="form-control" name="department" required><br>
                <input class="form-control" name="position" required><br>
                <input class="form-control" name="email" required><br>
                <input class="form-control" name="password" required><br>
              </div>
              <div class="column">
                <label>Surname (Thai)</label><br>
                <label>Surname (English)</label><br>               
                <label>Affiliate</label><br>                  
                <label>Graduation Level</label><br>                
                <label>Re-enter Email</label><br>                 
                <label>Re-enter Password</label><br>                 
              </div>
              <div class="column">
                <input class="form-control" name="lastnameTH" required><br>
                <input class="form-control" name="lastnameEN" required><br>
                <input class="form-control" name="affiliate" required><br>
                <input class="form-control" name="highest_graduation_level" required><br>
                <input class="form-control" name="reEmail" required><br>
                <input class="form-control" name="rePassword" required><br>
              </div>
            </div>
          <button class="otherbtn"><a href="{{url('/')}}" style="text-decoration:none">Cancel</a></button>
          <button class="otherbtn" type="reset">Clear</button>
          <button class="button" type="submit">Sign Up</button>
      </form>
    </div>
  </article>
</section>

</body>
</html>