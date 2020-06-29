<?php 
include('class/Employee.php');
include('class/Freelancer.php');
include('class/Job.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

    <pre>
    <?php 
    // sukuriam viena darba bagal Job klase
    $job1 = new Job(1, 'Make a header', 100);
    $job2 = new Job(2, 'Make a footer', 120);

    // print_r($job1);
    // print_r($job2);

    // echo '<br>';

    // susikurti viena freelanceri 
    $free1 = new Freelancer('John', 'Doe');
    // pasitikrinti ka gavom
    // print_r($free1);

    // norim priskirti abra freelanceriui

    $free1->asignJob($job1);
    $free1->asignJob($job2);

    echo '<hr>';
    // pasitikrinti ka gavom
    print_r($free1);

    // uzbaigti viena darba
    $free1->finishJob(1);

    echo '<hr>';
    // pasitikrinti ka gavom
    print_r($free1);



    
    ?>
    </pre>
    
</body>
</html>