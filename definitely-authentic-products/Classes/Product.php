<?php

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
        
    }
}
?>