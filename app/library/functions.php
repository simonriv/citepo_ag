<?php
date_default_timezone_set("America/Bogota");

require_once $_SERVER['DOCUMENT_ROOT'].'/app/config/connection.php';

class Functions extends Connection{
    public function __construct()
    {
        parent::__construct();
    }

    private function lastInsertedId($table,$field_name){
        try{
            $q = "SELECT COUNT(*) AS total FROM $table";
            $query = $this->connect()->query($q);
            $total = $query->fetch(PDO::FETCH_OBJ)->total;
            
            if($total > 0){
                $q = "SELECT MAX($field_name) AS id FROM $table";
                $query = $this->connect()->query($q);
                $id = $query->fetch(PDO::FETCH_OBJ)->id;
                return $id;
            }else {
                return 0;
            }
        }catch(Exception $e){
            return '003' . 'Error al consultar el ultimo id insertado: '.$e->getMessage();
        }
    }

    private function checkExistance($email){
        try{
            $q = "SELECT COUNT(*) AS total FROM user WHERE email like '$email'";
            $query = $this->connect()->query($q);
            $existance = $query->fetch(PDO::FETCH_OBJ)->total;

            if($existance > 0){
                return true;
            }else {
                return false;
            }

        }catch(Exception $e){
            return "Error 003" . $e;
        }
    }

    public function register($name,$last_name,$email,$dni,$zip_phone,$phone,$country,$state,$city,$ocupation,$area,$birthdate,$stauts,$pdf){
        try {
            if($this->checkExistance($email) !== "Error" && $this->checkExistance($email) == false){
                $q = "INSERT INTO client (Name,LastName,Email,DNI,PhoneZip,Phone,Country,State,City,Ocupation,Area,BirthDate,Status,Pdf) VALUES 
                (:name,:last_name,:email,:dni,:zip_phone,:phone,:country,:state,:city,:ocupation,:area,:birthdate,:stauts,:pdf)";
                $query = $this->connect()->prepare($q);
                $query->execute(['name' => $name,'last_name' => $last_name,'email' => $email, 'dni' => $dni,'zip_phone' => $zip_phone, 'phone' => $phone, 'country' => $country, 'state' => $state, 'city' => $city, 'ocupation' => $ocupation, 'area' => $area, 'birthdate' => $birthdate,'status' => $stauts, 'pdf' => $pdf]);
                
                return $this->lastInsertedId("client","ClientId");
            }else {
                return 0;
            }
        }catch(PDOException $e){
            return "Error 001" . $e;
        }
    } 

    public function verification($id){
        try {
            $q = "SELECT Name, LastName, DNI, Phone FROM client WHERE ClientId = $id";
            $query = $this->connect()->query($q);
            $name = $query->fetch(PDO::FETCH_OBJ)->Name;
            $lastName = $query->fetch(PDO::FETCH_OBJ)->LastName;
            $dni = $query->fetch(PDO::FETCH_OBJ)->DNI;
            $phone = $query->fetch(PDO::FETCH_OBJ)->Phone;

            return $name . "," . $lastName . "," . $dni . "," . $phone;
        } catch(PDOException $e) {
            return "Error 002" . $e;
        }
    }


}


?>