<?php

public class User
{
    $creditcard = '';
    $firstname = '';
    $lastname = '';
    $password = '';
    $roles[] = '';

    public function __construct($card, $fname, $lname, $pass)
    {
        $this->creditcard = $card;
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->password = $pass;
    }
}
?>