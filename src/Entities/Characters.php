<?php
class Characters
{
    private int $character_id;
    private string $character;


    public function characterChecklist()
    {
        echo '<input type="checkbox" name="category1" value=' . $this->character_id . '>';
        echo '<label for "category1">' . $this->character . '</label><br>';

    }

}
