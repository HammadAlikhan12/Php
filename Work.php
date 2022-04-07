<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo 'Hammad'; simple name print

// <------------Addition-------------->

//     if(isset($_POST['btn_sub']))
//     {
//         $n1=$_POST['n1'];
//         $n2=$_POST['n2'];
//         $res=$n1+$n2;
//         echo $res ;
//     }

    // for($i=1;$i<=10;$i++) hammad print ho ga 10 times
    // {
    //     echo $i.'Hammad';
    // }

    // <---------------------------------->

    // $num1=60;
    // if($num1==60) $num agr equal ya bara h 60 sy tw true ho jai wrna false
    // {
    //     echo 'true';
    // }
    // else
    // {
    //     echo 'false';
    // }

    // ---------------------------------

    //     $num1=48;
    //     if($num1> 45) agr $num1 sy bari h tw greater show kry or agr choti h tw smaller
    //     {
    //         echo 'greater';
    //     }
    //     else
    //     {
    //         echo 'smaller';
    //     }

    // -----------------------

    // for($i=1;$i<=10;$i++) agr $i 5 ya kisi bh no tk rokna h tw break use kry
    // {
    //     if($i==5)
    //     {
    //     break;
    //     }
    //     echo $i;
    // }

    // ------------------------------------------

// for($i=1;$i<=10;$i++) agr hmy koi word nh chahye tw hmm continue word use kry gy
//     {
//         if($i==5)
//         {
//         continue;
//         }
//         echo $i;
//     }

// -----------------------------------------------
// $i=2;
// while($i<10) agr even number me value chahye
// {
// echo $i;
//     $i+=2;
// }

// ----------------------------------------

// $i=1;
// while($i<10) agr odd number me value chahye
// {
// echo $i;
//     $i+=2;
// }

// -------------------------------------

// $answer="yes";agr yes h tw print ho jai or agr no h tw br br print ho
// do
// {
//     echo 'do you want to continue';
//     $answer="no";
// }
// while($answer=="yes");

// -------------------clear--------------------
// if(isset($_POST['btn']))
// {
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     $result = $num1 + $num2;
// }
// if(isset($_POST['res']))
// {
//     $result='';
// }
function abc()
{
    for($i=1;$i<10;$i++)
    {
        echo $i.'<br/>';
    }
}


?>

<!-- <------------Addition------------>

<!-- <form action="Work.php" method="post"> Post sy url show nh ho ga ,Get sy url show hoga
    <input type="number" name="n1"/><br><br>
    <input type="number" name="n2"/><br><br>
    <input type="submit" name="btn_sub" value="click"/>
</form> -->
<!-- -------------------------------------- -->
<!-- // -------------------clear-------------------- -->
<!-- <form action="Work.php" method="post"> calculator btn clear
    <input type="number" name="num1"/><br><br>
    <input type="number" name="num2"/><br><br>
    <input type="submit" name="btn"/>
    <input type="number" name="result" value="<?php echo $result ?>" disabled/>
    <input type="submit" name="res" value="clear"/>
</form> -->


</body>
</html>