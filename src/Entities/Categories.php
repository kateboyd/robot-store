<?php
class Categories
{
    private int $category_id;
    private string $category;


    public function categoryChecklist()
    {
       echo '<input type="checkbox" name="category1" value=' . $this->category_id . '>';
       echo '<label for "category1">' . $this->category . '</label><br>';

//        echo "<p>" . $this->category . "</p>";


    }

}