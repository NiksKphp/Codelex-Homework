<?php

require_once "Data.php";
$data = fopen('data.csv', 'r');
$table = new Data($data);
$application = new Application($table);
$application->run();

class Application
{
    private Data $table;

    public function __construct(Data $table){
        $this->table = $table;
    }

    function run()
    {
        while (true) {
            echo "Type number for the operation you want to perform: " .PHP_EOL;
            echo "Type 1 to show full data table" .PHP_EOL;
            echo "Type 2 to compile specific data" .PHP_EOL;
            echo "Type 0 to exit" .PHP_EOL;

            $input = (int)readline();

            switch ($input) {
                case 0:
                    die;
                case 1:
                    $this->table->displayTable();
                    exit;
                case 2:
                    while (true) {
                        echo "Choose data you want to compile: " . PHP_EOL;
                        echo "Type 1 to compile data about cases of vardarbīga nave" . PHP_EOL;
                        echo "Type 2 to compile data about cases of neardarbīga nave" . PHP_EOL;
                        echo "Type 0 to exit" . PHP_EOL;

                        $input = (int)readline();

                        switch ($input) {
                            case 0:
                                die;
                            case 1:
                                 echo $this->table->compileSpecificData(1);
                                 break;
                            case 2:
                                 echo $this->table->compileSpecificData(2);
                                 break;
                            default:
                                echo "Bad input";
                        }
                        exit;
                    }
                default:
                    echo "Bad input";
                    exit;
            }
        }
    }
}

