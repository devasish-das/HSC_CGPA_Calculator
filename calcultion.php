<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Results</title>
</head>
<body>
  
    

<?php


if(isset($_POST["save"])){
       
    $Name= $_POST["Name"];
    $Roll= $_POST["Roll"];
    $Year= $_POST["Year"];
    $College= $_POST["College"];



     $Bangla= $_POST["Bangla"];
     $English = $_POST["English"];
     $Ict= $_POST["Ict"];
     $Physics = $_POST["Physics"];
     $Chemistry= $_POST["Chemistry"];
     $Biology = $_POST["Biology"];
     $Math= $_POST["Math"];




     
    // Printing Personal info
    echo "<h2>Name : $Name </h2>";
    //echo "<br>";
    echo "<h3>Roll : $Roll </h3>";
    //echo "<br>";
    echo "<h3>Year : $Year </h3>";
    //echo "<br>";
    echo "<h3>College : $College </h3>";
     




    //printing the marks you entered
     echo "Your Mark in Bangla is : ".$Bangla."<br>";
     echo "Your Mark in English is : ".$English."<Br>";
     echo "Your Mark in Ict is : ".$Ict. "<Br>";
     echo "Your Mark in Physics is : ".$Physics. "<Br>";
     echo "Your Mark in chemistry is : ".$Chemistry. "<Br>";
     echo "Your Mark in Biology is : ".$Biology. "<Br>";
     echo "Your Mark in H. Math is : ".$Math. "<Br><br><br>";




     //finding the grade
     function marks($mark)
{
        
      if($mark >= 160 && $mark < 201){
         return "A+";
      }
      else if($mark >= 140 && $mark < 160){
         
         return "A";
      }
      else if($mark >= 120 && $mark < 140){
         
          return "A-";
      }
      else if($mark >= 100 && $mark < 120){
        
         return "B";
      }
      else if($mark >= 80 && $mark < 100){
         
         return "C";
      }
      else if($mark >= 66 && $mark < 80){
         
          return "D";
      }
      else if($mark >= 0 && $mark < 66){
        
         return "F";
        
      }
      
}

//finding the grade point 

function grade($mark)
{
        
      if($mark >= 160 && $mark < 201){
         
         return $credit=5.00;
      }
      else if($mark >= 140 && $mark < 160){
         
        return $credit=4.00;
      }
      else if($mark >= 120 && $mark < 140){
         
        return $credit=3.50;
      }
      else if($mark >= 100 && $mark < 120){
        
        return $credit=3.00;
      }
      else if($mark >= 80 && $mark < 100){
         
        return $credit=2.00;
      }
      else if($mark >= 66 && $mark < 80){
         
        return $credit=1.00;
      }
      else if($mark >= 0 && $mark < 66){
        
        return $credit=0.00;
        
      }
      else {
        echo "Please enter less than 200 & greater than 0"; 
        echo "<br>";
      }
}



    // calling marks and grade function and printing it
    $Bangla_m=marks($Bangla);;
    $Bangla_g=grade($Bangla);
    echo "In Bangla you have obtained : ".$Bangla_m." / ".$Bangla_g."<br>";


    $English_m=marks($English);
    $English_g=grade($English);
    echo "In English you have obtained : ".$English_m." / ".$English_g."<br>";
    
    $Ict=$Ict*2;
    $Ict_m=marks($Ict);
    $Ict_g=grade($Ict);
    echo "In Ict you have obtained : ".$Ict_m." / ".$Ict_g."<br>";

    $Physics_m=marks($Physics);
    $Physics_g=grade($Physics);
    echo "In Physics you have obtained : ".$Physics_m." / ".$Physics_g."<br>";

    $Chemistry_m=marks($Chemistry);
    $Chemistry_g=grade($Chemistry);
    echo "In Chemistry you have obtained : ".$Chemistry_m." / ".$Chemistry_g."<br>";

    $Biology_m=marks($Biology);
    $Biology_g=grade($Biology);
    echo "In Biology you have obtained : ".$Biology_m." / ".$Biology_g."<br>";

    $Math_m=marks($Math);
    $Math_g=grade($Math);
    echo "In Math you have obtained : ".$Math_m." / ".$Math_g."<br>";






   //Calculating the cgpa of 4th subject
    if($Math_g>=3.00)
    {
      $Math_g=$Math_g-2.00;
      
      //echo $Math_g;
    }else
    {
      $Math_g=0.00;
      //echo $Math_g;
    }
    
    // Calculating your CGPA
    $Total_g= $Bangla_g + $English_g + $Ict_g + $Physics_g + $Chemistry_g + $Math_g + $Biology_g;

    $Avg_g=($Total_g/6);
   




    //Printing the CGPA
    echo "<br><br>";
    echo "Your CGPA is : ".$Avg_g;






  }

 

?>

</body>
</html>