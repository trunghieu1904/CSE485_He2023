<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatients(){
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null){
                $sql = "SELECT * FROM employees ORDER BY id DESC";
                $stmt = $conn->query($sql);
    
                $patients = [];
                while($row = $stmt->fetch()){
                    $patient = new Patient($row ['id'],$row ['fullname'], $row ['address'], $row ['salary']);
                    $patients[] = $patient;
                }   
                return $patients;

            }

           
    }
}