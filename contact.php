<html>
    <body>
<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email']
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['msg'];
if(empty($name) || empty($email) || empty($msg) )
{
    echo "please fill";
}else{
    mail("arshina9909@gmail.com","webtech msg",$msg ,"from :$name <$email>");
    echo "<script type="text/javascript"> 
    alert("msg sent");
    window.history.log(-1);
    </script>";
}
?>
</body>
</html>