
class Salespeople extends  Worker{
public float $salary;
//רווח מהמכירות
public double $profitsale

    public function __construct($id,$name,$phone,$adress,$numhoursmonth,$datestart,$salary) {
      parent::__construct($id,$name,$phone,$adress,$numhoursmonth,$datestart);
      $this->salary = $salary;
    }

    public function GrossSalary():float{
        return $this->salary+0.3*$this->profitsale;
    }
}