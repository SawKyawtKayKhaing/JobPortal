
<?php

class Provide
{
    public $name;
    public $companytype;
    public $qty;                                                                                  
    public function __construct($name,$companytype,$qty)
    {
      $this->name=$name;
      $this->companytype=$companytype;
      $this->qty=$qty;
    }
    function set_name($name)
    {
      $this->name=$name;
    }
    function set_companytype($companytype)
    {
      $this->companytype=$companytype;
    }
    function set_qty($qty)
    {
        $this->qty=$qty;
    }
    function get_name()
    {
      return $this->name;
    }
    function get_type()
    {
      return $this->companytype;
    }
    function get_qty()
    {
       return $this->qty;
    }
    public function companyInformation()
    {
      echo "Name= {$this->name} , TypeOfCompany= {$this->companytype},Employee Qty={$this->qty};";
    }
}
?> 