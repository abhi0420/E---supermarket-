<html>
<head>
<title>Nature's Closet Admin Login</title>

</head>
<body>
<br><br>
<form action="users.php" method="post"><h3>ADMIN LOGIN</h3>
<br><br><br>
<div class="container">
USERNAME: <br>
<input type = "text" name = "usid" placeholder="  USERNAME">
    <br><br><br> PASSWORD:<br>
    <input type="password" name="pwd" placeholder="  PASSWORD">
    <br><br><br><br>
    <input type="submit" onclick="return check(this.form)" value="LOGIN">
  <button type="button" class="cancelbtn">Cancel</button>
</div>

</form>
<style type="text/css">
* {
    font-family: -apple-system, BlinkMacSystemFont, "San Francisco", Helvetica, Arial, sans-serif;
  font-weight:  300;
  margin:  0;
}
form {
  border: 3px solid #f1f1f1;
  background-color: #DEFBD2;
  width: 500px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
    width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
input[type=submit]
{
	  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
      width: auto;
  padding: 10px 18px;


}
h3
{
	padding: 15px;
}
.container {
  padding: 16px;
  width: 300px;
  height: 500px;
}




</style>
<script type="text/javascript">
function check(form)
{
if(form.usid.value == "abhi" && form.pwd.value == "abhi")
{
return true;

}
else
{
alert("incorrect username or password:")
return false;
}
}
</script>