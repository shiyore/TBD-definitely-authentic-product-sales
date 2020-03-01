<?php
require_once ('../Scripts/utility.php');

public class Product
{
    $ID = '';
    $name = '';
    $price = '';
    $short_desc = '';
    $image = '';
    $category_ID = '';
    $desc = '';
    $desc_image = '';

    public function __construct($idd)
    {
        $this->ID = $idd;
        $product = searchItemID($idd);
        $this->name = $product[1];
        $this->price = $product[2];
        $this->short_desc = $product[3];
        $this->image = $product[4];
        $this->category_ID = $product[5];
        $this->desc = $product[6];
        $this->desc_image = $product[7];
    }
}
?>