<?php

class WitchKiller
{
    protected $firstAgeOfDeath, $firstYearOfDeath, $secondAgeOfDeath, $secondYearOfDeath, $averageKills, $killYear1, $killYear2, $killCountYear1, $killCountYear2;

    public function getKillYear($yearOfDeath, $ageOfDeath)
    {
        return $yearOfDeath - $ageOfDeath;
    }

    public function getKillCount($yearOfDeath)
    {
        $prev = 0;
        $temp = 0;
        $next = 0;
        $killCount = 0;

        for ($i = 0; $i < $yearOfDeath; $i++) {
            if ($i == 0) {
                $prev = 0;
                $temp = 1;
                $next = 1;
            } else {
                $temp = $prev + $next;
                $prev = $next;
                $next = $temp;
            }

            $killCount += $temp;

        }
        
        return $killCount;

    }
    
    public function countAverageKills()
    {
        $this->killYear1 = $this->getKillYear($this->firstYearOfDeath, $this->firstAgeOfDeath);
        $this->killYear2 = $this->getKillYear($this->secondYearOfDeath, $this->secondAgeOfDeath);

        $this->killCountYear1 = $this->getKillCount($this->killYear1);
        $this->killCountYear2 = $this->getKillCount($this->killYear2);

        $averageKills = ($this->killCountYear1 + $this->killCountYear2) / 2;

        if ($averageKills < 0) {
            $averageKills = -1;
        }

        $this->averageKills = $averageKills;
    }

    public function printAnswer()
    {
        $string = "Person A was born on Year = {$this->firstYearOfDeath} - {$this->firstAgeOfDeath} = {$this->killCountYear1} <br/>";
        $string .= "Person B was born on Year = {$this->secondYearOfDeath} - {$this->secondAgeOfDeath} = {$this->killCountYear2} <br/>";
        $string .= "So the average is {$this->averageKills}";
        echo $string;
    }
}