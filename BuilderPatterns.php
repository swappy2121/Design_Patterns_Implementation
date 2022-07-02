<?php 
 
class DesignCar {
    
    private $brand;
    private $machineCapacity;
    private $machineType;
    private $mileage;

    public function __construct($brand, $machineCapacity,$machineType, $mileage){
        $this->brand = $brand;
        $this->machineCapacity = $machineCapacity;
        $this->machineType = $machineType;
        $this->mileage = $mileage;
    }

    public function getMileage(){
        return $this->mileage;
    }

    public function getmachineCapacity(){
        return $this->machineCapacity;
    }

    public function getMachineType(){
        return $this->machineType;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        if(null !== $brand){
            $this->brand = $brand;
            return "Brand Saved Succesfully";
        }else{
            return "You need to enter the brand name";
        }
    }

    public function addMileage($mileage){
        $this->mileage += $mileage;
    }

}

class CarBuilder extends DesignCar {

    private $brand = 'Unknown';
    private $machineCapacity = 'Unknown';
    private $machineType = 'Unknown';
    private $mileage = 0 ;
 
    public function setBrand($brand){
        $this->brand = $brand;
        return $this;
    }

    public function setMachineCapacity($capacity){
        $this->machineCapacity = $capacity;
        return $this;
    }

    public function setMachineType($type){
        $this->machineType = $type;
        return $this;
    }

    public function setmileage($mile){
        $this->mileage = $mile;
        return $this;
    }

    public function build(){
        $car = new DesignCar($this->brand,$this->machineCapacity,$this->machineType,$this->mileage);
        return $car;
    }

}
$cars = array();

$avansa = new CarBuilder();
$avansa->setBrand('Toyota');
$avansa->setMachineType('Petrol');
$avansa->setMileage(8000);
$avansa->build();

array_push($cars,$avansa);

$fuso = new CarBuilder();
$fuso->setBrand('Mithsubishi');
$fuso->setMachineType('Diesel');
$fuso->setMachineCapacity(2000);
$fuso->build(); 

array_push($cars,$fuso); 

?>