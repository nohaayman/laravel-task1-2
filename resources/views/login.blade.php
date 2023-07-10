
{{$errors}}
<form action="user" method="post">
@csrf
 
  <div class="container">
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <button type="submit">Login</button>
    
</form>