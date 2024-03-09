<?php
class User
{
    private $encryption;

    public function __construct($encryption)
    {
        $this->encryption = $encryption;
    }

    public function getUserName()
    {
        return $this->encryption->decrypt($_SESSION[WEB_ABSTRACT]['user_name']);
    }
}
