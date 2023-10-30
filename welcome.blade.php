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
  height: 500px;
}

section::after {
  content: "";
  display: table
  clear: both;
}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 8px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

.signupbtn {
  background-color: #D1D1D1;
  color: black;
  margin: 15px 100px;
}

.container {
  padding: 10px 20px;
  font-size: 15px;
}

span.psw {
  float: center;
  padding-left: 300px;
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
    <h1>Log In</h1>
    <div class="container">
      <form action="{{route('login.post')}}" method="POST">
        @csrf
        <label>Username</label>
        <input type="text" placeholder="Enter Username" name="email" required>
        <br>
        <label>Password</label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <span class="psw"><a href="{{url('/resetpassword')}}">Forgot Password?</a></span>   
        <br>
        <button class="signupbtn"><a href="{{url('/signup')}}" style="text-decoration:none">Sign Up</a></button>
        <button type="submit">Enter</button>
      </form>
    </div>
   
  </article>
</section>

</body>
</html>