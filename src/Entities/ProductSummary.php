<?php
class ProductSummary
{
    private string $image;
    private string $title;
    private float $price;

    private int $id;


    public function productSummarySection()
    {
           echo '<div class="productcontainer">';
            echo '<img class="summaryimages" src=' . $this->image . '>';
            echo '<a href="product_page.php?id=' . $this->id . '">' . $this->title . '</a>';
            echo "<p>$" . number_format($this->price, 2) . "</p>";
            echo "</div>";
    }

}