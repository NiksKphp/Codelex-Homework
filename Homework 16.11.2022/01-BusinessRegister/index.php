<?php
require_once "vendor/autoload.php";

use League\Csv\Reader;
use League\Csv\Statement;

$csv = Reader::createFromPath('register.csv', 'r')->setDelimiter(';');
$records = $csv->getRecords();

while (true) {
    echo "Type number for the operation you want to perform: " . PHP_EOL;
    echo "Type 1 to display last 30 entries" . PHP_EOL;
    echo "Type 2 to search register by name or by registration code" . PHP_EOL;
    echo "Type 0 to exit" . PHP_EOL;

    $input = (int)readline();

    switch ($input) {
        case 0:
            die;
        case 1:

            echo "Ļoti lēna ielāde, apmēram 10-15 sekundes vienam uzņēmuma reģistram" . PHP_EOL;

            $stmt = Statement::create()->offset(count($csv) - 30)->limit(30);
            $records = $stmt->process($csv);

            //todo generatori?
            foreach ($records as $record) {
                $entry = new App\Entry($record[0], $csv);
                echo $entry->getEntry();
            }
            exit;

        case 2:
            $regCodeInput = readline('Enter registration name or code: ');
            $entry = new App\Entry($regCodeInput, $csv);
            echo $entry->getEntry();
            exit;

        default:
            echo "Bad input";
            exit;
    }
}