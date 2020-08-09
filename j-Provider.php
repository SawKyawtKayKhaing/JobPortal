
<?php

class Provide
{   
    public $name;
    public $salary;
    public $experience;
    public $age;
    public $gender; 
    public $duedate;                                                                                  
    public function __construct($name,$salary,$experience,$age,$gender,$duedate)
    {
      $this->name=$name;
      $this->salary=$salary;
      $this->experience=$experience;
      $this->age=$age;
      $this->gender=$gender;
      $this->duedate=$duedate;
    }
    function set_name($name)
    {
      $this->name=$name;
    }
    
    function set_salary($salary)
    {
      $this->salary=$salary;
    }
    function set_experience($experience)
    {
        $this->experience=$experience;
    }
    function set_age($age)
    {
        $this->age=$age;
    }
    function set_gender($gender)
    {
      $this->gender=$gender;
    }
    function set_duedate($duedate)
    {
      $this->duedate=$duedate;
    }
    
    
    function get_name()
    {
      return $this->name;
    }
    function get_salary()
    {
       return $this->salary;
    }
    function get_experience()
    {
       return $this->experience;
    }
    
    function get_age()
    {
       return $this->age;
    }
    function get_gender()
    {
       return $this->gender;
    }
    function get_duedate()
    {
      return $this->duedate;
    }
    public function companyInformation()
    {
      echo "Name= {$this->name} ,Salary={$this->salary},Experience={$this->experience},Age={$this->age},Gender={$this->gender},Duedate={$this->duedate};";
    }
}
?> 