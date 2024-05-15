<?php
class ProductSummary
{
    private string $image;
    private string $title;
    private float $price;

    public function productSummarySection()
    {
            echo "<img src=" . $this->image . ">";
            echo "<h3>" . $this->title . "</h3>";
            echo "<p>" . $this->price . "</p>";
    }

}