
<?php

class Provide
{
    public $name;
    public $companytype;
    public $city;
    public $qty;
    public $jobvacancy;
    public $salary;
    public $experience;
    public $age;
    public $gender; 
    public $duedate;                                                                                  
    public function __construct($name,$companytype,$city,$qty,$jobvacancy,$salary,$experience,$age,$gender,$duedate)
    {
      $this->name=$name;
      $this->companytype=$companytype;
      $this->city=$city;
      $this->qty=$qty;
      $this->jobvacancy=$jobvacancy;
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
    function set_companytype($companytype)
    {
      $this->companytype=$companytype;
    }
    function set_city($city)
    {
        $this->city=$city;
    }
    function set_qty($qty)
    {
        $this->qty=$qty;
    }
    function set_jobvacancy($jobvacancy)
    {
      $this->jobvacancy=$jobvacancy;
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
    function get_type()
    {
      return $this->companytype;
    }
    function get_city()
    {
       return $this->city;
    }
    function get_qty()
    {
       return $this->qty;
    }

    function get_vacancy()
    {
      return $this->jobvacancy;
    }
    
    function get_experience()
    {
       return $this->experience;
    }
    function get_salary()
    {
       return $this->salary;
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
      echo "Name= {$this->name} , TypeOfCompany= {$this->companytype}, City= {$this->city},Employee Qty={$this->qty}, JobVacancy= {$this->jobvacancy}, 
      Salary={$this->salary},Experience={$this->experience},Age={$this->age},Gender={$this->gender},Duedate={$this->duedate};";
    }
}
?> 