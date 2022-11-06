<?php

class Product
{
    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function productInformation()
    {
        return "$this->name, $this->price EUR, $this->amount";
    }

    public function changeQuanity(int $quanity)
    {
        $newQuantity = $this->amount+$quanity;
        return "$this->name, $this->price EUR, $newQuantity";
    }
    public function changePrice(int $price)
    {
        $newPrice = $price;
        return "$this->name, $this->price EUR, $newPrice";
    }
}

$productOne = new Product("Logitech mouse",70.00,14);
$productTwo = new Product("iPhone 5s",999.99,3);
$productThree = new Product("Epson EB-U05",440.46,1);

echo $productOne->productInformation();
echo PHP_EOL;
echo $productTwo->productInformation();
echo PHP_EOL;
echo $productThree->productInformation();
echo PHP_EOL;
echo $productThree->changeQuanity(5);
echo PHP_EOL;
echo $productThree->changePrice(5.00);
