<? php


$con= mysqli_connect('localhost',' root', '','db_connect');
 $fullName= $_POST['fullName'];
 $email= $_POST['email'];
 $ phoneNumber= $_POST['phoneNumber'];
 $dateIn= $_POST['dateIn'];
 $dateOut= $_POST['dateOut'];
 $people= $_POST['people'];
 $room= $_POST['room'];

$sql= "INSERT INTO 'booking'('fullName', 'email', 'phoneNumber', 'dateIn', 'dateOut', 'people', 'room') values ('fullName', 'email', 'phoneNumber', 'dateIn', 'dateOut', 'people', 'room');

$rs=mysqli_query($con, $sql);

if($rs)
{
echo "Contact recordes inserted";
}

?>