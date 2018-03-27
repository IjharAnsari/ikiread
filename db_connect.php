<?php
    class DATABASE{
        public $con;
        $SERVER="localhost";
        $USER="root";
        $PASS="";
        $DB="ikiread";
        
        
        
        function connect(){
            $this->con=new mysqli($this->SERVER, $this->USER, $this->PASS, $this->DB);
            if($con===false){
                die("Error in connection");
            }
        }
        function select(){
            $qry="SELECT * FROM tbl";
            $result=mysqli_query($this->con,$qry);
            if($result){
                if($result->num_rows>0){
                    echo "There are some record in table ".$result->num_rows;
                }else{
                    echo "No records found";  
                }
            }
        }
        
        
    }

?>