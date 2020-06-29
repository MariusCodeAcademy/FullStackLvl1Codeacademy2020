<?php

class Freelancer extends Employee
{
    // apsirasom savybes 
    private $jobs;

    // susukuriam konstruktoriu
    public function __construct($name, $surname)
    {
        parent::__construct($name, $surname);
        $this->jobs = [];
    }

    // darbo priskyrimo funkcija
    public function asignJob($job)
    {
        // pasitikriname ar darbas yra Job klases objektas
        if($job instanceof Job) {
            array_push($this->jobs, $job);
        } else {
            echo '<h3 style="color:tomato">This job is not a valid Job</h3>';
        }
    }

    public function finishJob($jobId)
    {
        foreach($this->jobs as $job)
        {
            // jei paduoto darbo id sutampa su vienu is turimu darbu
            if($job->getId() == $jobId) {
                // tai mes pabaigiame darba
                $job->finishJob();
                echo "<p>Job with id: $jobId was done</p>";
            }
        }
    }

    public function withDrawSalary()
    {
        // sudeti visu pabaigtu darbu sumas ir paskaiciuoti atlyginima
        $sum = 0.0;
        foreach($this->jobs as $index => $job )
        {
            // ar dabras yra pabaigtas
            if($job->done()) {
                // darbas yra pabaigtas
                // pridedame darbo uzmokesti prie bendros sumos
                $sum += $job->getAmount();
                // istrinti pabaigta darba 
                array_slice($this->jobs, $index, 1);
            }
        }
        return $sum;
    }




}