<?php
// Paprasta prisijungimo forma (testavimui)
?>
<form method='post' action='auth.php'>
  <label>Vartotojo vardas:</label><input type='text' name='username'><br>
  <label>Slaptažodis:</label><input type='password' name='password'><br>
  <input type='checkbox' name='remember'> Atsiminti mane<br>
  <input type='submit' value='Prisijungti'>
</form>