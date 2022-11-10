<?php

class Video
{
    public string $title;
    public bool $checkedIn;
    public int $rating;

    public function __construct(string $title, bool $checkedIn, int $rating){
        $this->title = $title;
        $this->checkedIn = $checkedIn;
        $this->rating = $rating;
    }

}