<?php

require_once 'Video.php';
require_once 'VideoStore.php';

$videoStore = new VideoStore();

class Application
{
    public Video $videoOne;
    public Video $videoTwo;
    public Video $videoThree;

    public VideoStore $videoStore;

    public function __construct(){
        $this->videoOne = new Video("The Matrix",true,10);
        $this->videoTwo = new Video("Godfather II",true,10);
        $this->videoThree = new Video("Star Wars Episode IV: A New Hope",true,10);
        $this->videoStore = new VideoStore();
    }

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        $this->videoStore->store_video($this->videoOne);
        $this->videoStore->store_video($this->videoTwo);
        $this->videoStore->store_video($this->videoThree);
        echo "Movie store filled: " . PHP_EOL;
    }

    private function rent_video()
    {
        echo "Select movie to rent: " . PHP_EOL;
        echo "1: The Matrix". PHP_EOL;
        echo "2: Godfather II". PHP_EOL;
        echo "3: Star Wars Episode IV: A New Hope". PHP_EOL;

        $input = (int)readline();
        switch ($input) {
            case 1:
                $this->videoStore->rent_video($this->videoOne);
                break;
            case 2:
                $this->videoStore->rent_video($this->videoTwo);
                break;
            case 3:
                $this->videoStore->rent_video($this->videoThree);
                break;
            default:
                echo "Sorry, I don't understand you..";
        }
    }

    private function return_video()
    {
        echo "Select movie to return: " . PHP_EOL;
        echo "1: The Matrix". PHP_EOL;
        echo "2: Godfather II". PHP_EOL;
        echo "3: Star Wars Episode IV: A New Hope". PHP_EOL;

        $input = (int)readline();
        switch ($input) {
            case 1:
                $this->videoStore->return_video($this->videoOne);
                break;
            case 2:
                $this->videoStore->return_video($this->videoTwo);
                break;
            case 3:
                $this->videoStore->return_video($this->videoThree);
                break;
            default:
                echo "Sorry, I don't understand you..";
        }
    }

    private function list_inventory()
    {
        $this->videoStore->return_inventory();
    }
}

$app = new Application();
$app->run();