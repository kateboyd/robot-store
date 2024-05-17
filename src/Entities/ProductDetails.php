<?php
class ProductDetails
{
    private string $image;
    private string $title;
    private float $price;

    private string $description;
    private string $id;

    private string $category;



    public function productDetailsSection()
    {
        echo '<div class="productdetailscontainer">';
        echo '<img class="detailimages" src=' . $this->image . '>';
        echo "<div>";
        echo "<h3>" . $this->title . "</h3>";
        echo "<h1>$" . number_format($this->price, 2) . "</h1>";
        echo "<p>" . $this->description . "</p>";
        echo "<h3>" . $this->title . "</h3>";
        echo "</div>";



        echo "</div>";
    }

}