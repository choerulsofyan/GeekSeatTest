<?php

include 'WitchKiller.php';

class BraveProgrammer extends WitchKiller
{
    public function __construct($firstAgeOfDeath, $firstYearOfDeath, $secondAgeOfDeath, $secondYearOfDeath)
    {
        $this->firstAgeOfDeath = $firstAgeOfDeath;
        $this->firstYearOfDeath = $firstYearOfDeath;
        $this->secondAgeOfDeath = $secondAgeOfDeath;
        $this->secondYearOfDeath = $secondYearOfDeath;

        $this->validateInput();
    }

    public function validateInput()
    {
        try {
            if (($this->firstYearOfDeath - $this->firstAgeOfDeath) <= 0) {
                throw new Exception();
            }

            if (($this->secondYearOfDeath - $this->secondAgeOfDeath) <= 0) {
                throw new Exception();
            }

            if ($this->firstYearOfDeath < 0) {
                throw new Exception();
            }

            if ($this->firstAgeOfDeath < 0) {
                throw new Exception();
            }

            if ($this->secondYearOfDeath < 0) {
                throw new Exception();
            }

            if ($this->secondAgeOfDeath < 0) {
                throw new Exception();
            }

            if (!is_numeric($this->firstYearOfDeath)) {
                throw new Exception();
            }

            if (!is_numeric($this->firstAgeOfDeath)) {
                throw new Exception();
            }

            if (!is_numeric($this->secondYearOfDeath)) {
                throw new Exception();
            }

            if (!is_numeric($this->secondAgeOfDeath)) {
                throw new Exception();
            }
        } catch (Exception $e) {
            echo "-1";
            exit();
        }
    }
}