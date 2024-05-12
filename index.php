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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSC GPA Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--head-->
    <div>
        <h1>GPA Calculator</h1>
        <h3>Please input data for all those field And see your GPA</h3>
        <h2>Student's Details:</h2>
    </div>


    <!--Collecting student's information-->

    <form method="POST" action="calcultion.php">

        <div class="fullflex">
            <div class="table1">
                Name
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Name" placeholder="Your Name">
            </div>
            <div class="table3">

            </div>

        </div>
        <br>
        <div class="fullflex">
            <div class="table1">
                Roll
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Roll" placeholder="Your Roll">
            </div>
            <div class="table3">

            </div>

        </div>

        <br>
        <div class="fullflex">
            <div class="table1">
                Year
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Year" placeholder="Enter Year">
            </div>
            <div class="table3">

            </div>

        </div>
        <br>
        <div class="fullflex">
            <div class="table1">
                College Name
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="College" placeholder="Your College">
            </div>
            <div class="table3">

            </div>

        </div>
        <br>

        <!-- <table>
            <tbody>
                <tr>
                    <td>Name : </td>
                    <td> <input type="text" name="Name" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <td>Roll : </td>
                    <td> <input type="text" name="Roll" placeholder="Enter Roll"></td>
                </tr>
                <tr>
                    <td>Year : </td>
                    <td> <input type="text" name="Year" placeholder="Enter Year"></td>
                </tr>
                <tr>
                    <td>College : </td>
                    <td> <input type="text" name="College" placeholder="Enter College"></td>
                </tr>
            </tbody>
        </table> -->
        <br><br>

        <div class="fullflex">
            <div class="table1">
                Subjects
            </div>
            <div class="table2" style="background-color: #D4E7C5;">

                1st Paper
            </div>
            <div class="table3">
              
                2nd Paper
            </div>

        </div>
        
         <br>
        
         <div class="fullflex">
            <div class="table1">
                Bangla
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Bangla1" placeholder="Enter Marks">
            </div>
            <div class="table3">
                <input class="table2 table20" type="text" name="Bangla2" placeholder="Enter Marks">

            </div>

        </div>
         

        <!-- <div class="fullflex">
            <div class="table1">
                Bangla 2nd Paper
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Bangla2" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div>

        </div> -->

        <br>

        <div class="fullflex">
            <div class="table1">
                English
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="English1" placeholder="Enter Marks">
            </div>
            <div class="table3">
                <input class="table2 table20" type="text" name="English2" placeholder="Enter Marks">

            </div>

        </div>

        <br>

        <!-- <div class="fullflex">
            <div class="table1">
                English 2nd Paper
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="English2" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div>

        </div>

        <br> -->

        <div class="fullflex">
            <div class="table1">
                ICT
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Ict" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div>

        </div>

        <br>

        <div class="fullflex">
            <div class="table1">
                <select name="subject1">
                    <option> Select a Subject </option>
                    
        
                    <?php foreach($subject1 as $index=>$subject) : ?>
                        <option value="<?= $index ?>"><?= $subject ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Physics1" placeholder="Enter Marks">
            </div>
            <div class="table3">
                <input class="table2 table20" type="text" name="Physics2" placeholder="Enter Marks">

            </div>

        </div>

      

        <!-- <div class="fullflex">
            <div class="table1">
                Physics 2nd Paper
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Physics2" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div>

        </div> -->

        <br>

        <div class="fullflex">
            <div class="table1">
            <select name="subject2">
                    <option> Select a Subject </option>
                    
        
                    <?php foreach($subject2 as $index=>$subject) : ?>
                        <option value="<?= $index ?>"><?= $subject ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Chemistry1" placeholder="Enter Marks">
            </div>
            <div class="table3">
                <input class="table2 table20" type="text" name="Chemistry2" placeholder="Enter Marks">

            </div>

        </div>

        <!-- <br>

        <div class="fullflex">
            <div class="table1">
                Chemistry 2nd Paper
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Chemistry2" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div>

        </div> -->

        <br>

        <div class="fullflex">
            <div class="table1">
            <select name="subject3">
                    <option> Select a Subject </option>
                    
        
                    <?php foreach($subject3 as $index=>$subject) : ?>
                        <option value="<?= $index ?>"><?= $subject ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Biology1" placeholder="Enter Marks">
            </div>
            <div class="table3">
                <input class="table2 table20" type="text" name="Biology2" placeholder="Enter Marks">

            </div>

        </div>

        <!-- <br>

        <div class="fullflex">
            <div class="table1">
                Biology 2nd Paper
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Biology2" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div> -->

        </div>

        <br>

        <div class="fullflex">
            <div class="table1">
            <select name="subject4">
                    <option> Select 4th Subject </option>
                    
        
                    <?php foreach($subject4 as $index=>$subject) : ?>
                        <option value="<?= $index ?>"><?= $subject ?></option>
                    <?php endforeach; ?>
                </select>
               
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Math1" placeholder="Enter Marks">
            </div>
            <div class="table3">
                <input class="table2 table20" type="text" name="Math2" placeholder="Enter Marks">

            </div>

        </div>

        <br>
<!-- 
        <div class="fullflex">
            <div class="table1">
                H. Math 2nd Paper
            </div>
            <div class="table2">

                <input class="table2 table20" type="text" name="Math2" placeholder="Enter Marks">
            </div>
            <div class="table3">

            </div>

        </div> -->

        

    

        <!-- <table>
            <tbody>
                <tr>
                    <td>Bangla 1st Paper :</td>
                    <td> <input type="text" name="Bangla1" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Bangla 2nd Paper :</td>
                    <td> <input type="text" name="Bangla2" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>English 1st Paper :</td>
                    <td> <input type="text" name="English1" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>English 2nd Paper :</td>
                    <td> <input type="text" name="English2" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>ICT :</td>
                    <td> <input type="text" name="Ict" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Physics 1st Paper :</td>
                    <td> <input type="text" name="Physics1" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Physics 2nd Paper :</td>
                    <td> <input type="text" name="Physics2" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Chemistry 1st Paper :</td>
                    <td> <input type="text" name="Chemistry1" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Chemistry 2nd Paper :</td>
                    <td> <input type="text" name="Chemistry2" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Biology 1st Paper :</td>
                    <td> <input type="text" name="Biology1" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>Biology 2nd Paper :</td>
                    <td> <input type="text" name="Biology2" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>H. Math 1st Paper :</td>
                    <td> <input type="text" name="Math1" placeholder="Enter Marks"></td>
                </tr>
                <tr>
                    <td>H. Math 2nd Paper :</td>
                    <td> <input type="text" name="Math2" placeholder="Enter Marks"></td>
                </tr>
            </tbody>

        </table><br> -->
        <br><br>
       

        </div>
        <div class="table20">
            <button type="submit" name="save">Submit</button>
        </div>
        
    </form>
</body>

</html>