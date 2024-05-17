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
        return '<div class="productdetailscontainer">
        <img class="detailimages" src=' . $this->image . '>
        <div>
        <h3>' . $this->title . '</h3>
        <h1>$' . number_format($this->price, 2) . '</h1>
        <p>' . $this->description . '</p>
        <h3>' . $this->title . '</h3>
        <a href="robot_store_homepage.php">
            <button>Back to Homepage</button>
        </a>
        </div>
        </div>';
    }

}