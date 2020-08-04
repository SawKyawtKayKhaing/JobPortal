
<?php

class Provide
{
    public $name;
    public $companytype;
    public $city;
    public $jobvacancy;
    public $salary;
    public $experience;
    public $age;
    public $gender; 
    public $sid;                                                                                  
    public function __construct($name,$companytype,$city,$jobvacancy,$salary,$experience,$age,$gender,$sid)
    {
      $this->name=$name;
      $this->companytype=$companytype;
      $this->city=$city;
      $this->jobvacancy=$jobvacancy;
      $this->salary=$salary;
      $this->experience=$experience;
      $this->age=$age;
      $this->gender=$gender;
      $this->sid=$sid;
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
    function set_sid($sid)
    {
      $this->sid=$sid;
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
    function get_vacancy()
    {
      return $this->jobvacancy;
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
    function get_sid()
    {
      return $this->sid;
    }
    public function companyInformation()
    {
      echo "Name= {$this->name} , TypeOfCompany= {$this->companytype}, City= {$this->city}, JobVacancy= {$this->jobvacancy}, 
      Salary={$this->salary},Experience={$this->experience},Age={$this->age},Gender={$this->gender};";
    }
}
?> 