<?php

public class User
{
    $creditcard;
    $email = '';
    $password = '';
    $roles[];

    public function __construct($card, $email, $pass, $r)
    {
        $this->creditcard = $card;
        $this->email = $email;
        $this->password = $pass;
        $this->roles = $r;
    }
}
?>