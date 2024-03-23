<!-- 4. Write a PHP script to accept Employee details ( eno, ename, address) on first page.
On second page accept earning ( Basic, Da, HRA). On third page print Employee
information( eno,ename, Address, BASIC, DA, HRA, TOTAL)
[Hint: Use Session]-->
<?php
session_start();
$eno = $_GET['eno'];
$enm = $_GET['enm'];
$eadd = $_GET['eadd'];

$_SESSION['eno'] = $eno;
$_SESSION['enm'] = $enm;
$_SESSION['eadd'] = $eadd;
?>

<html>
<body>

<form action="Assign5Prog4_1.php" method="post">
<center>
<h2>Enter Earnings of Employee:</h2>

<table>
<tr><td>Basic : </td><td><input type="text" name="e1"></td><tr>
<tr><td>DA : </td><td><input type="text" name="e2"></td></tr>
<tr><td>HRA : </td><td><input type="text" name="e3"></td></tr>
<tr><td></td><td><input type="submit" value=Next></td></tr>
</table>
</center>
</form>
</body>
</html>

