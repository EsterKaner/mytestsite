class Programmer extends  worker{

    public float $salary;

    public function __construct($id,$name,$phone,$adress,$numhoursmonth,$datestart,$salary) {
      parent::__construct($id,$name,$phone,$adress,$numhoursmonth,$datestart);
      $this->salary = $salary;
    }

    public function GrossSalary():float{
        return $this->salary;
    }
}