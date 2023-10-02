<?php
class Product {
    private int $id;
    private string $name;
    private float $price;

    public function __construct( int $id, string $name, float $price ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format( $this->price, 2 );
    }

    public function showDetails() {
        // printf( "ID: %d \nName: %s\nPrice: $%.2f", $this->id, $this->name, $this->getFormattedPrice() );

        echo "ID: {$this->id}\nName: {$this->name}\nPrice: \${$this->getFormattedPrice()}";
    }
}
$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();