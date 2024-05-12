<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    

<?php
$subject1 = [

    'Physics',
    'Accounting',
  'Ecomonics'
];
$subject2 = [
  'Chemistry',
  'Business & Management',
  'Civic & Good Govern'
];
$subject3 = [
  'Biology',
  'Finance Bandk & Ins.',
  'Islamic History'
];
$subject4 = [
  'HIgher Math',
  'Statictics',
  'AGricultural Edu.',
  'Studies of Islam'
];


if(isset($_POST["save"])){
       
    $Name= $_POST["Name"];
    $Roll= $_POST["Roll"];
    $Year= $_POST["Year"];
    $College= $_POST["College"];



     $Bangla1= $_POST["Bangla1"];
     $Bangla2= $_POST["Bangla2"];
     $English1 = $_POST["English1"];
     $English2 = $_POST["English2"];
     $Ict= $_POST["Ict"];
     $Physics1 = $_POST["Physics1"];
     $Physics2 = $_POST["Physics2"];
     $Chemistry1= $_POST["Chemistry1"];
     $Chemistry2= $_POST["Chemistry2"];
     $Biology1 = $_POST["Biology1"];
     $Biology2 = $_POST["Biology2"];
     $Math1= $_POST["Math1"];
     $Math2= $_POST["Math2"];
     
     
     $s1= $subject1[$_POST['subject1']];
     $s2= $subject2[$_POST['subject2']];
     $s3= $subject3[$_POST['subject3']];
     $s4= $subject4[$_POST['subject4']];





     
    // Printing Personal info
    echo "<h1>Name : $Name </h1>";
    //echo "<br>";
    echo "<h3>Roll : $Roll </h3>";
    //echo "<br>";
    echo "<h3>Year : $Year </h3>";
    //echo "<br>";
    echo "<h3>College : $College </h3>";
     

    

    //printing the marks you entered
    //  echo "Your Mark in Bangla 1st Paper is : ".$Bangla1."<br>";
    //  echo "Your Mark in Bangla 2nd Paper is : ".$Bangla2."<br>";
    //  echo "Your Mark in English 1st Paper is : ".$English1."<Br>";
    //  echo "Your Mark in English 2nd Paper is : ".$English2."<Br>";
    //  echo "Your Mark in Ict is : ".$Ict. "<Br>";
    //  echo "Your Mark in Physics 1st Paper is : ".$Physics1. "<Br>";
    //  echo "Your Mark in Physics 2nd Paper is : ".$Physics2. "<Br>";
    //  echo "Your Mark in chemistry 1st Paper is : ".$Chemistry1. "<Br>";
    //  echo "Your Mark in chemistry 2nd Paper is : ".$Chemistry2. "<Br>";
    //  echo "Your Mark in Biology 1st Paper is : ".$Biology1. "<Br>";
    //  echo "Your Mark in Biology 2nd Paper is : ".$Biology2. "<Br>";
    //  echo "Your Mark in H. Math 1st Paper is : ".$Math1. "<Br>";
    //  echo "Your Mark in H. Math 2nd Paper is : ".$Math2. "<Br><br><br>";




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

    //Bangla
    $Bangla = $Bangla1 + $Bangla2;
    $Bangla_m=marks($Bangla);;
    $Bangla_g=grade($Bangla);
    //echo "In Bangla you have obtained : ".$Bangla_m." / ".$Bangla_g."<br>";

    //English
    $English = $English1 + $English2;
    $English_m=marks($English);
    $English_g=grade($English);
    //echo "In English you have obtained : ".$English_m." / ".$English_g."<br>";
    
    //Ict
    $Ict= $Ict*2;
    $Ict_m=marks($Ict);
    $Ict_g=grade($Ict);
    //echo "In Ict you have obtained : ".$Ict_m." / ".$Ict_g."<br>";
    
    //Physics
    $Physics = $Physics1 + $Physics2;
    $Physics_m=marks($Physics);
    $Physics_g=grade($Physics);
    //echo "In Physics you have obtained : ".$Physics_m." / ".$Physics_g."<br>";

    //Chemistry
    $Chemistry = $Chemistry1 + $Chemistry2;
    $Chemistry_m=marks($Chemistry);
    $Chemistry_g=grade($Chemistry);
    //echo "In Chemistry you have obtained : ".$Chemistry_m." / ".$Chemistry_g."<br>";

    //Biology
    $Biology = $Biology1 + $Biology2;
    $Biology_m=marks($Biology);
    $Biology_g=grade($Biology);
    //echo "In Biology you have obtained : ".$Biology_m." / ".$Biology_g."<br>";

    //Math
    $Math = $Math1 + $Math2;
    $Math_m=marks($Math);
    $Math_g=grade($Math);
    //echo "In Math you have obtained : ".$Math_m." / ".$Math_g."<br>";






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
   

  //printing the data

  echo "<div>
    <h3>Your Marksheet</h3>
<table>
    <thead>
        <tr>
            <th>Subject NO.</th>
            <th>Subject</th>
            <th>Grade </th>
            <th>Grade Point</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Bangla</td>
            <td> $Bangla_m </td>
            <td>$Bangla_g</td>
            
        </tr>
        <tr>
            <td>2</td>
            <td>English</td>
            <td>$English_m   </td>
            <td>$English_g </td>
           
        <tr>
            <td>3</td>
            <td>ICT</td>
            <td>$Ict_m</td>
            <td>$Ict_g</td>
          
        </tr>
        <tr>
            <td>4</td>
            <td> $s1</td>
            <td> $Physics_m </td>
            <td>$Physics_g</td>
            
        </tr>
        <tr>
            <td>5</td>
            <td> $s2 </td>
            <td>$Chemistry_m</td>
            <td>$Chemistry_g</td>
           
        </tr>
        <tr>
            <td>6</td>
            <td> $s3</td>
            <td>$Biology_m</td>
            <td>$Biology_g</td>
           
        </tr>
        <tr>
            <td>7</td>
            <td> $s4(4th)</td>
            <td>$Math_m</td>
            <td>$Math_g</td>
           
        </tr>

    </tbody>
</table>
</div>";



    //Printing the CGPA
    echo "<br><br>";
    echo "<h1>AND YOUR CG IS </h1>";
    $Avg_g = number_format($Avg_g, 2);
    
    echo "<h1> $Avg_g <sub>Congrats☺☺</sub>  </h1>";
    






  }

 

?>

</body>
</html>