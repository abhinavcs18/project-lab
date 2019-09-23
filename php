<html>
</title>
</head>
<body>
<?php
$db=mysqli_connect('localhost','root','');
if(!$db)
exit("error");
print "connection done";
$x=$_POST["tfname"];
$y=$_POST["tfusn"];
$z=$_POST["tfage"];
echo $x,$y,$z;
$er=myql_select_db("faculty");
if(!$er)
exit("database errr");
print "database selected";
/*
$qu="create table faculty(facname varchar(20),facusn varchar(10),facage int)";
$result=mysqli_query($qu);
if(!$result)
{
print "<p>".$error."</p>";
exit;
}*/
$qu="insert into faculty values('$x','$y','$z');";
print "$result";
?>
</body>
</html>
