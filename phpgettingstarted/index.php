<?php
//all your code
// $myName = "V.Roy";
// echo $myName

// arrays
$students = array("V.Roy", "Yoto", "Badboy");
echo $students[0];

//Associative array
$myMarks =array( "V.Roy" => 25,
                     "Yoto" => 15,
                     "Badboy" => 35,
                     "Attendance" => 8
                    );
echo " My V.Roy Marks:" .$myMarks["V.Roy"];

// Multidimentional Arrays
$webDevTechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend' => array('PHP','Python','Java','Js'),
    'databases' => array('MySQL','postgresSQL','Mongo DB','firebase'),
    'frameworks' => array('Jungo','Laravel','Screenboot','flutter')

);
echo $webDevTechnologies['frontend'][0]; //will be our output
echo $webDevTechnologies['backend'][2];
echo $webDevTechnologies['frameworks'][0];
echo $webDevTechnologies['databases'][0];


?>