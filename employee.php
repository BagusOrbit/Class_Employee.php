<?php 
class Employee{
	private $NIP;
 	private $name;
 	private $NPWP;
 	private $jabatan;
 	private $departement;
 	private $gender;

 	public function getName()
 	{
 		return $this->name;

 	}
 	public function getNIP()
 	{
 		return $this->NIP;
 	}


 	//npwp
 	public function setNPWP($NPWP)
 	{
 		$this->NPWP = $NPWP;
 	}
 	public function getNPWP()
 	{
 		return $this->NPWP;	
 	}

 	//depart
 	public function setDepart($departement)
 	{
 		$this->departement = $departement;
 	}
 	public function getDepart()
 	{
 		return $this->departement;	
 	}
 	


 	//jabatan
 	public function setJabatan($jabatan)
 	{
 		$this->jabatan = $jabatan;
 	}
 	public function getjabatan()
 	{
 		return $this->jabatan;	
 	}

 	//gender
 	public function setGender($gender)
 	{
 		$this->gender = $gender;
 	}
 	public function getGender()
 	{
 		return $this->gender;	
 	}

//behaviour
 	public function clockIn($waktu)
 	{
 		echo "Anda masuk jam ".$waktu;
 	}

 	public function clockOut($waktu)
 	{
 		echo "Anda pulang jam".$waktu;
 	}

 	public function __construct($name, $NIP)
 	{
 		$this->name = $name;
 		$this->NIP = $NIP;
 	}
}

$nanang = new Employee("Nanang Kurniawan","123");
echo $nanang->getName()."<br/>";
echo $nanang->getNIP()."<br />";

//npwp
$nanang->setNPWP('2345');
$resultNPWP = $nanang->getNPWP();
echo $resultNPWP."<br />";

//jabatan
$nanang->setJabatan('Manager');
$resultJabatan = $nanang->getjabatan();
echo $resultJabatan."<br />";

//depart
$nanang->setDepart('Produksi');
$resultDepart = $nanang->getDepart();
echo $resultDepart."<br />";

//gender
$nanang->setGender('Laki - Laki');
$resultGender = $nanang->getGender();
echo $resultGender."<br />";

echo $nanang->clockIn('07.00')."<br />";
echo $nanang->clockOut('17.00');


?>