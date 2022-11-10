<?php

require_once "Video.php";

class VideoStore
{
    public Video $videoStore;

    public function store_video(?Video $movie)
    {
        $this->videoStore = $movie;
    }

    public function getName()
    {
        echo $this->videoStore;
    }

    public function rent_video()
    {
        return $this->videoStore->checkedIn = false;
    }

    public function return_video()
    {
        return $this->videoStore->checkedIn = true;
    }

    public function return_inventory()
    {
        foreach ($this->videoStore as $title){
            echo $title;
            echo PHP_EOL;
        }
    }

}