class QA extends  Worker{
    
 public float $salaryHour;

 public function __construct($id,$name,$phone,$adress,$numhoursmonth,$datestart,$salaryHour) {
  parent::__construct($id,$name,$phone,$adress,$numhoursmonth,$datestart);
  $this->salaryHour = $salaryHour;
}
public function GrossSalary():float{
        return  parent::HoursMonth*$this->salaryHour;
        return  worker::HoursMonth*$this->salaryHour;
        return $this->HoursMonth() *$this->salaryHour;
    }
}