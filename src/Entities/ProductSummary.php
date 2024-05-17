<?php
class ProductSummary
{
    private string $image;
    private string $title;
    private float $price;

    private int $id;

    public function productSummarySection()
    {
        return '<div class="productcontainer">
            <img class="summaryimages" src=' . $this->image . '>
            <a href="product_page.php?id=' . $this->id . '">' . $this->title . '</a>
            <p>$' . number_format($this->price, 2) . '</p>
            </div>';
    }

}