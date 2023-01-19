<?php
    ini_set('display_errors', 1);

    class Connect{
        private static $host = "localhost";
        private static $username = "root";
        private static $password = "";
        private static $database = "ester";
        public static $connection = "";

        function __construct(){}

        public static function connectDatabase(){
            self::$connection = new mysqli(self::$host, self::$username, self::$password, self::$database);
            
            if(!self::$connection){
                die("could not connect: " . mysql_error());
            }
            return self::$connection;
        }
        
        public static function closeDatabase(){
            mysqli_close(self::$connection);
        }
    }

    class Company{
        public $conndb;
        public $closedb;

        function __construct(){
            $this->conndb = Connect::connectDatabase();
        }

        function __construct1(){
            $this->closedb = Connect::closeDatabase();
        }
        
        function getCompanyData(){
            $this->conndb;
            
            $query = "SELECT * FROM company_information";
            
            $result = mysqli_query($this->conndb, $query);
    
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
    
            $this->closedb;
    
            return $data;
        }

        function saveCompanyData($data, $value){
            $this->conndb;

            $query = "INSERT INTO company_information(data, value) VALUES('$data','$value')";
            $result = mysqli_query($this->conndb, $query);

            if(!$result){ 
                die('Could not get data: ' . mysqli_error());
            }

            $this->closedb;
        }
    }

    class Department{
        public $conndb;
        public $closedb;

        function __construct(){
            $this->conndb = Connect::connectDatabase();
        }

        function __construct1(){
            $this->closedb = Connect::closeDatabase();
        }
        
        function getDepartmentData(){
            $this->conndb;
            
            $query = "SELECT * FROM department";
            
            $result = mysqli_query($this->conndb, $query);
    
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
    
            $this->closedb;
    
            return $data;
        }

        function saveDepartmentData($department_id, $department_name, $department_address){
            $this->conndb;

            $query = "INSERT INTO department(department_id, department_name, department_address) VALUES('$department_id','$department_name', '$department_address')";
            $result = mysqli_query($this->conndb, $query);

            if(!$result){ 
                die('Could not get data: ' . mysqli_error());
            }

            $this->closedb;
        }
    }

    class Employee{
        public $conndb;
        public $closedb;

        function __construct(){
            $this->conndb = Connect::connectDatabase();
        }

        function __construct1(){
            $this->closedb = Connect::closeDatabase();
        }
        
        function getEmployeeData(){
            $this->conndb;
            
            $query = "SELECT * FROM employee";
            
            $result = mysqli_query($this->conndb, $query);
    
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
    
            $this->closedb;
    
            return $data;
        }

        function saveEmployeeData($employee_id, $employee_name, $employee_department, $employee_email){
            $this->conndb;

            $query = "INSERT INTO employee(employee_id, employee_name, employee_department, employee_email) VALUES('$employee_id','$employee_name', '$employee_department', '$employee_email')";
            $result = mysqli_query($this->conndb, $query);

            if(!$result){ 
                die('Could not get data: ' . mysqli_error());
            }

            $this->closedb;
        }
    }
?>