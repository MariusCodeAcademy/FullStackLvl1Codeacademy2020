<?php 
include('class/Employee.php');
include('class/Freelancer.php');
include('class/Worker.php');
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
    
    // sukuriam darbus freelanceriam 
    $jobs = [
        new Job(1, 'Footer Layout', 200),                   // 0
        new Job(2, 'Contact form Crud', 600),               // 1
        new Job(3, 'Authorisation for client page', 700),   // 2
        new Job(4, 'Authentication for moderatos', 400),    // 3
        new Job(5, 'Payent form', 100),                     // 4
        new Job(6, '.Net API actions', 1200),               // 5
        new Job(7, 'Security for register page', 400),      // 6
    ];

    // sukuriame darbuotojus
    $employees = [
        new Worker('Sriftas', 'Raidenis', 10), // 0
        new Worker('Stilija', 'Ce Esauskaite', 8), // 1
        new Freelancer('Eventas', 'Klikauskas'), // 2
        new Freelancer('Appas', 'Requestenis'), // 3
        new Worker('Lenteja', 'Baziene', 10), // 4
    ];

    // freelanceriu darbai 
    $employees[2]->asignJob($jobs[0]);
    $employees[2]->asignJob($jobs[1]);
    $employees[2]->asignJob($jobs[4]);
    
    $employees[2]->asignJob($jobs[2]);
    $employees[3]->asignJob($jobs[3]);
    $employees[3]->asignJob($jobs[5]);
    $employees[3]->asignJob($jobs[6]);

    // darbuotojai kurie dirba pagal darbo valandas
    $employees[0]->work(160);
    $employees[1]->work(80);
    $employees[4]->work(120);


    // prasukti cikla pro darbuotojus ir atspausdinti vardus ir arlyginimus
    foreach($employees as $employee)
    {
        $fullName = $employee->getFullName();
        $salary = $employee->withDrawSalary();
        echo "<h3> Darbuotojas $fullName: atlyginimas $salary eur </h3>";
    }




    ?>
    </pre>
    
</body>
</html>