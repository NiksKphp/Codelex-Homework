<?php

/*
Design a Geometry class with the following methods:
A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
    Area = π * r * 2
    Use Math.PI for π and r for the radius of the circle
A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the following formula:
     Area = Length x Width
A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return the area of the triangle. Use the following formula:
     Area = Base x Height x 0.5
The methods should display an error message if negative values are used for the circle’s radius, the rectangle’s length or width, or the triangle’s base or height.
Next write a program to test the class, which displays the following menu and responds to the user’s selection:
 */

echo "Geometry Calculator" . PHP_EOL;
echo "1. Calculate the Area of a Circle" . PHP_EOL;
echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
echo "3. Calculate the Area of a Triangle" . PHP_EOL;
echo "4. Quit" . PHP_EOL;

class Geometry {
    public static function calculateCircle($radius){
        if ($radius<-1){
            echo "Error, negative value";
            echo PHP_EOL;
            exit;
        }
        $area = pi() * pow($radius,2);
        echo "The area of the circle is " . round($area,5);
        echo PHP_EOL;
    }
    public static function calculateRectangle($length, $width){
        if ($length<-1||$width<-1){
            echo "Error, negative value";
            echo PHP_EOL;
            exit;
        }
        $area = $length * $width;
        echo "The area of the rectangle is " . round($area,5);
        echo PHP_EOL;
    }
    public static function calculateTriangle($lengthOfBase, $height){
        if ($lengthOfBase<-1||$height<-1){
            echo "Error, negative value";
            echo PHP_EOL;
            exit;
        }
        $area = $lengthOfBase * $height * 0.5;
        echo "The area of the triangle is " . round($area,5);
        echo PHP_EOL;
    }
};


$choice = readline("Enter your choice (1-4) : ");
choice($choice);

function choice($choice){
    if ($choice==1){
        $userInput = readline("Enter radius of the circle : ");
        $result = new Geometry();
        $result->calculateCircle($userInput);
    }
    if ($choice==2){
        $length = readline("Enter the length of the rectangle : ");
        $width = readline("Enter the width of the rectangle : ");
        $result = new Geometry();
        $result->calculateRectangle($length,$width);
    }
    if ($choice==3){
        $lengthOfBase = readline("Enter the length of the base of the triangle : ");
        $height = readline("Enter the height of the triangle : ");
        $result = new Geometry();
        $result->calculateTriangle($lengthOfBase,$height);
    }
    if ($choice>=5){
        echo "ERROR";
        echo PHP_EOL;
    }
}

