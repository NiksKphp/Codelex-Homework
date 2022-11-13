<?php

class Data
{
    public $data; //datu tips resource nestrādā

    public function __construct($data){
        $this->data = $data;
    }

    public function displayTable()
    {
        while (($line = fgetcsv($this->data)) !== false) {
            echo "Datums: ".$line[1]." | ". "Klasifikācija: ".$line[2]." | Cēlonis: ".$line[3]." ".$line[4].PHP_EOL;
        }
        fclose($this->data);
    }

    // Vajadzētu dinamiskāk

    public function compileSpecificData(int $whichDataToCompile): string
    {
        // Increment() ?
        $counterOne = 0;
        $counterTwo = 0;
        $counterThree = 0;
        $counterFour = 0;

        // Vardarbīga nāve
        if ($whichDataToCompile==1){

            while (($line = fgetcsv($this->data)) !== false) {
                if ($line[2] == "Vardarbīga nāve"){
                    $counterOne++;
                }
                if ($line[4] == "Pašnāvības;Pašnāvības"){
                    $counterTwo++;
                }
                if ($line[4] == "Nelaimes gadījumi sadzīvē;Nelaimes gadījumi sadzīvē"){
                    $counterThree++;
                }
                if ($line[4] == "Slepkavības;Slepkavības"){
                    $counterFour++;
                }
            }

            return "Kopā atrasti $counterOne vardarbīgas nāves gadījumi. No tiem: " . PHP_EOL
            . "$counterTwo pašnāvību gadījumi, $counterThree nelaimes gadījumi sadzīvē, $counterFour slepkavību gadījumi" . PHP_EOL;
        }

        // Nevardarbīga nāve
        if ($whichDataToCompile==2){

            while (($line = fgetcsv($this->data)) !== false) {
                if ($line[2] == "Nevardarbīga nāve"){
                    $counterOne++;
                }
                if ($line[3] == "Pēkšņa nāve;Sirds asinsvadu slimības, kas beidzas ar pēkšņu nāvi;kardiomiopātija"){
                    $counterTwo++;
                }
                if ($line[3] == "Nāve no citām (hroniskām) slimībām;ļaundabīgi audzēji"){
                    $counterThree++;
                }
                if ($line[3] == "Pēkšņa nāve;Citas slimības, kas beidzas ar pēkšņu nāvi;citas"){
                    $counterFour++;
                }
            }

            return "Kopā atrasti $counterOne nevardarbīgas nāves gadījumi. No tiem: " . PHP_EOL
            . "$counterTwo gadījumi saistīti ar sirds asinsvadu slimībām, $counterThree gadījumi saistīti ar ļaundabīgiem audzējiem, $counterFour gadījumi saistīti ar citiem iemesliem" . PHP_EOL;
        }
        return "Error";
    }
}
