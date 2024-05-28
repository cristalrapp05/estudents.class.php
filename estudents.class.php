<?php
include ("database.class.php");

CREATE TABLE `students` (
  `idStudent` int(100) NOT NULL,
  `ID` int(11) NOT NULL,
  `surname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `school` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `students` (`idStudent`, `ID`, `surname`, `name`, `birthdate`, `phone`, `address`, `email`, `password`, `school`) VALUES
(1, 44341300, 'ACUÑA ', 'CARO ANDRÉS NICOLÁS', '2002-12-05', '', '', '', 44341300, '44341300', 'Epet Nro3'),
(2, 44342301, 'BAIGORRIA ', 'ARIANA AILIN ', '2003-02-03', '', '', '', 44342301, '44342301', 'Epet Nro3'),
(3, 44341303, 'BENEITE BIRNE', 'KAREN ELISABET ', '2002-10-17', '', '', '', 44341303, '44341303', 'Epet Nro3'),
(4, 44120304, 'BONINO ', 'ENZO  ', '2002-10-23', '', '', '', 44120304, '44120304', 'Epet Nro3'),
(5, 44680305, 'BUFFAGNE ', 'TERESITA ANTONELA ', '2002-03-20', '', '', '', 44680305, '44680305', 'Epet Nro3');

class Student{
    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $password=null;
    private $school=null;
    private $conexion=null;

    public function addStudent (){
        // crear la consulta
       $sql="INSERT INTO Students  (idStudent, ID, surname, name, birthdate, phone, address, email, password, school) VALUES
        (".$this->dni.", ´".$this->surname."´, ´".$this->name."´, ´".$this->birthdate."´, ´".$this->phone."´, ´".$this->address."´, ´".$this->email."´, ´".$this->password."´, ´".$this->school."´)"; 
        $this->conexio $sn=new Database();
        $result= $this->conexion->query(sql);
        $this->conexion->close();
        return $result;
    }

    public function editStudent (){
        $sql="UPDATE Student SET "dni=".$this->dni.", ´"surname='".$this->surname.", ´"name='".$this->name."´, ´"birthdate='".$this->birthdate."´, ´"phone='".$this->phone."´, ´"address='".$this->address."´, ´"email='".$this->email."´, ´"password='".$this->password."´, ´".$this->school."' WHERE idStudent=".$this->idStudent; 
        $this->conexio $sn=new Database();
        $result= $this->conexion->query(sql);
        $this->conexion->close();
        return $result;

    }

    public function  deleteStudentn (){
        $sql="SELECT * FROM students WHERE idStudent=". $this->idStudent;

        $this->conexion=new Database();
        $result= $this->conexion->query(sql);
        $this->conexion->close();
        if($result){
            if ($row=$rsult->fetch_assoc()){
                $this->dni=$row["dni"];
                $this->name=$row["name"];
                $this->surname=$row["surname"];
                $this->birthdate=$row["birthdate"];
                $this->phone=$row["phone"];
                $this->address=$row["address"];
                $this->email=$row["email"];
                $this->password=$row["password"];
                $this->school=$row["school"];
                return true;

            }



    }

    public function getStudent (){
        return false;        
    }

    public function getAllStudent(){

    }

    //Geeter y Setter
    public function getIdStudent(){
        return $thid -> IdStudent;
    }
    public function setIdStudent ($idStudent){
        $this->idStudent=$idStudent;

    }

    public function getDni(){
        return $this->dni;
    }
    public function setDni ($dni){
        $this->dni=$dni;

    }
    public function getName(){
        return $this->name;
    }
    public function setName ($name){
        $this->name=$name;

    }
    public function getSurname(){
        return $this->surname;
    }
    public function setSurname ($surname){
        $this->surname=$surname;

    }
    public function getBirthdate(){
        return $this->birthdate;
    }
    public function setBirthdate ($birthdate){
        $this->birthdate=$birthdate;

    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone ($phone){
        $this->phone=$phone;

    }
    public function getAddress(){
        return $this->address;
    }
    public function setAddress ($address){
        $this->address=$address;

    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail ($email){
        $this->email=$email;

    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword ($password){
        $this->password=$password;

    }
    public function getSchool(){
        return $this->school;
    }
    public function setSchool ($schoolo){
        $this->school=$school;

    }
}