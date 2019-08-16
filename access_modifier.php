<?php
class user
{
    private $name;
    public function setname($str)
    {
        $this->name=$str;
    }
    public function getname()
    {
        return $this->name;
    }
}
    $u=new user();
    $u->setname("sneha");
    echo $u->getname();
?>