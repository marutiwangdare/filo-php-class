<?php 
session_start();
$_SESSION['hack']=$_GET['group'];
?>
<form action="">
    <input type="text" name="group">
     <input type="submit" value="submit">
</form>
PHP
<p>Hello user, your current group is beginner [ <?php echo $_GET['group']; ?> ] </p>