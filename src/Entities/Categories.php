<?php
class Categories
{
    private int $category_id;
    private string $category;
    public function categoryChecklist()
    {
        echo '<h1>Categories</h1>;';
        echo '<input type="checkbox" name="category1" value=' . $this->category_id . '>' . $this->category . '<br>';

    }

}