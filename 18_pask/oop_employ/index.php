<?php 
include('class/Employee.php');
include('class/Freelancer.php');
include('class/Worker.php');
include('class/Job.php');

$pass = "1235";

// $validate->checkInputText('Patikrinti');

if (!empty($_POST['vardas'])){
    $vardas = $_POST['vardas'];
    $pavarde = $_POST['pavarde'];
    $atlygis = $_POST['atlygis'];  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

    <h2>Ikelkite nauja darbuotoja(worker)</h2>
    <form action="index.php" method="post">
        <input type="text" name="vardas" placeholder="Iveskite varda">
        <input type="text" name='pavarde' placeholder="Iveskite Pavarde">
        <input type="number" name="atlygis"  min="5" placeholder="Valandinis atlygis">
        <button type="submit">Ivesti</button>
    </form>

    <pre>
    <?php 
    
    // sukuriam darbus freelanceriam 
    $jobs = [
        new Job(0, 'Footer Layout', 200),                   // 0
        new Job(1, 'Contact form Crud', 600),               // 1
        new Job(2, 'Authorisation for client page', 700),   // 2
        new Job(3, 'Authentication for moderatos', 400),    // 3
        new Job(4, 'Payent form', 100),                     // 4
        new Job(5, '.Net API actions', 1200),               // 5
        new Job(6, 'Security for register page', 400),      // 6
    ];

    // sukuriame darbuotojus
    $employees = [
        new Worker('Sriftas', 'Raidenis', 10), // 0
        new Worker('Stilija', 'Ce Esauskaite', 8), // 1
        new Freelancer('Eventas', 'Klikauskas'), // 2
        new Freelancer('Appas', 'Requestenis'), // 3
        new Worker('Lenteja', 'Baziene', 10), // 4
    ];

    // ivedame nauja darbuotoja is formos duomenu
    // pasitikriname ar yra duomenys
    if(isset($vardas) && !empty($vardas)){
        array_push($employees, new Worker($vardas, $pavarde, $atlygis));
    }

    print_r($employees);

    // freelanceriu darbai 
    $employees[2]->asignJob($jobs[0]);
    $employees[2]->asignJob($jobs[1]);
    $employees[2]->asignJob($jobs[4]);
    
    $employees[3]->asignJob($jobs[2]);
    $employees[3]->asignJob($jobs[3]);
    $employees[3]->asignJob($jobs[5]);
    $employees[3]->asignJob($jobs[6]);

    // freelanceriai baigia darbus 
    $employees[2]->finishJob(0);
    $employees[2]->finishJob(1);
    $employees[2]->finishJob(4);
    
    $employees[3]->finishJob(2);
    $employees[3]->finishJob(3);
    // $employees[3]->finishJob(5);
    $employees[3]->finishJob(6);


    // darbuotojai kurie dirba pagal darbo valandas
    $employees[0]->work(160);
    $employees[1]->work(80);
    $employees[4]->work(120);


    // prasukti cikla pro darbuotojus ir atspausdinti vardus ir arlyginimus
    // foreach($employees as $employee)
    // {
    //     $fullName = $employee->getFullName();
    //     $salary = $employee->withDrawSalary();
    //     echo "<h3> Darbuotojas $fullName: atlyginimas $salary eur </h3>";
    // }


    



    ?>
    </pre>


    
</body>
</html>