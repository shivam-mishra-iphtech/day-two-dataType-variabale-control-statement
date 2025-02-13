<?php
    echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';

    echo'<br>'.'<b>--------VARIABLE  IN  PHP-----------</b>'.'<br></br>';
    
    $a=11;
    $b=11.0;
    $c=11.000000;
    $d= true;
    $e= "string";
    $f= 'string1';

    echo '$a =11  = '. get_debug_type($a).'<br></br>';

    echo '$b =11.0  = '. get_debug_type($b).'<br></br>';

    echo '$c =11.000000  = '. get_debug_type($c).'<br></br>';

    echo '$d =true  = ' . get_debug_type($d).'<br></br>';

    echo '$e = = '. get_debug_type($e).'<br></br>';

    echo '$f  = = '. get_debug_type($f).'<br></br>';


    echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';

    ${'invalid-name'} = 'bar';
    $name = 'invalid-name';
    echo ${'invalid-name'}.'<br>' . "<br>"."$name".'<br><br>';
    $aa=9123456789123456789;

    $ab=91234567891234567891;
    
    echo '$aa ==  '. $aa. '<br><br>';
    echo '$ab ==  '. $ab. '<br><br>';


    echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';

    // PRE-DEFINED VARIABLE IN PHP
    // ----------------------------$GLOBAL----------------------------------

    echo'<br></br>'.'<b>--------SUPER GLOBAL VARIABLE-----------</b>'.'<br></br>';
    echo'<br></br>'.'<b>         1.  $GLOBALS  </b>'.'<br></br>';


 class test_ex{
    public static function  test()
    {    
         $var4 ="hello test 0";
        $var= "hello test";
    
       
        echo '$a in globle scope : '.$GLOBALS['var']."<br>";// its get the last value of the define variable value;
        echo '$a in globle scope : '.$GLOBALS['var1']."<br>";
        echo '$a in current scope : '. $var . "<br>";
    
    }
    
    //  test();
}
    $var ="hello test 2";
    $var="hello test 3";
    $var1="hello test 6";
  function test2()
 { 
    $obj= new test_ex();
     
    echo  $obj::test();
    
 }
 test2();
 ?>


<div>
    <h3>Test Form</h3>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="number" name="number" placeholder="Enter any number"><br><br>
        <input type="file" name="file"><br><br>
        <button type="submit" name="submit">Submit</button><br><br>
    </form>
</div>

<?php
 echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';
 echo'<br></br>'.'<b>   2. $_GET,  $_POST    '.'<br></br>';



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Number: " . htmlspecialchars($number) . "<br>";
    echo'<br></br>'.'<b>  3. $_SERVER </b>'.'<br></br>';

    echo "<pre>";
    // print_r($_SERVER);/////
    echo "</pre><br>";

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        echo "Uploaded File: " . htmlspecialchars($_FILES['file']['name']) . "<br>";
        echo"<pre>";
        print_r($_FILES['file']);
    } else {
        echo "No file uploaded or an error occurred.<br><br>";
    }
    echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';

  
    echo'<br></br>'.'<b> 4. $_ENV    </b>'.'<br></br>';
    echo"<pre>";
    print_r($_ENV['file']);


    echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';

    echo'<br></br>'.'<b> 5. $_COOKIES    </b>'.'<br></br>';


}
?>


<?php
echo setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php

if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
var_dump($_COOKIE);
?>

</body>
</html>

<?php

printf("%.53f\n",0.7+0.1);  // 0.79999999999999993338661852249060757458209991455078125

       var_dump(0.7+0.1);   // float(0.8)

       var_dump(0.799999999999999);  //float(0.8)

       var_dump(0.7999999); // float(0.7999999)

?>
<?php
 echo'<br></br>'.'<b>-----------------++++++++++++++++++++------------------</b>'.'<br></br>';

 echo'<br></br>'.'<b>     5.    </b>'.'<br></br>';
$a="10";
$b="120";
 if($a << $b)
 {
    echo" $b "."<br>";
 }else
 {
    echo "b"."<br>";
 }
if($a^$b)
{
    echo "yes"."<br>";

}
else{
    echo "no"."<br>";
}

echo 10^2;
echo "<pre>";
print_r( $_SERVER);



echo $_SERVER['UNIQUE_ID'];
?>





