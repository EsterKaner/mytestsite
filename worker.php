abstract class Worker 
{
   protected const INCOMTAX=0.2;
   protected const SOCIALSECURITY=0.1;
   

  protected int $tz;
  protected string $name;
  protected string  $phone;
  protected string $adress;
  protected  $datestart;
  protected int $numhoursmonth;
 
  public function __construct($id,$name,$phone,$adress,$numhoursmonth,$datestart) {
    $this->id = $id;
    $this->name = $name;
    $this->phone = $phone;
    $this->adress = $adress;
    $this->numhoursmonth = $numhoursmonth;
    $this->datestart=$datestart;
  }
 
   public function NetSalary() : float{
      return $this->GrossSalary-($this->CalculateIncometax()+$this->CalculateSocialSecurity());
   }
   
   abstract public function GrossSalary() : float ;

   
  public function Getseniority():int{
     $seniority;
      $todayY =date("Y");
      $todayM =date("M");
     //string 
      $time=strtotime($this->datestart);
     $month=date("F",$time);
     $year=date("Y",$time);
     //date
    $year=$date->format("Y");
    $month=date->format("M");
    if($month>$todayM){
      $year--;
      $seniority=12-$month+$todayM;
     }
   else $seniority=$todayY-$month;
     return $seniority+($todayY-$year)*12;
  }

  
  public function HoursMonth():int{
     return  $this->numhoursmonth ;
  }

  public function CalculateIncometax():int{

   return $this->Getseniority()*INCOMTAX;
  }

  public function CalculateSocialSecurity():int {
  
      return $this->Getseniority()*SOCIALSECURITY;
      
  }

 
  public function DetailsEmployee(){
    echo "Employee details :<br>";
      echo "tz:"." ".$tz."name:"." ".$name."phone:"." ".$phone."adress:"." ".$adress;
  }


  public function ToString(){
      $this->DetailsEmployee();
      echo "<br>Employee department :<br>";
      echo  get_class($this);
      echo "<br>Employee about  :<br>";
      echo " seniority:"."".Getseniority()." Hours a month:"."".HoursMonth();;
      echo "<br>Employee salary :<br>";
      echo " Net Salary"."".$this->NetSalary." Gross Salary"."".$this->GrossSalary;

  }

  public function __toString(){
 return sprintf("%s, %s",$this->name, $this->phone);
 }
}