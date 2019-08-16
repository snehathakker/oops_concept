<?php
class subject
{
    public $ionic;
    public $laravel;
        
    public function result()
    {
        return "result";
    }
}
    $sub = new subject();
    $sub->ionic = '54';
    $sub->laravel = '55';
    
    echo $sub->ionic;
?>