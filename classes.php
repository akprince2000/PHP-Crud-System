

<?php
    class form_submit{

        public $conn;

        function __construct(){
            $this->conn = new mysqli("localhost","root","","pencilbox");
        }

        function insert($data){
            $_name = $data['name'];
            $_email = $data['email'];    
            $_statusValu = $data['statusValu'];

            if(!$_name){
                echo "Plz Name Field is Data Input". "<br>";
            }if(!$_email){
                echo "Plz email Field is email Input" . "<br>";
            }if(!$_statusValu){
                echo "Plz statusValu Field is Data Input" . "<br>";
            }
            else{

                   $this->conn->query("INSERT INTO tbl_data_input(Name,Email,Status)VALUES ('$_name','$_email','$_statusValu')");
            }

        }

        function show(){
             $result = $this->conn->query("SELECT * FROM tbl_data_input");

            return $result;


        }





    }




?>













































































<?php
//    function insert_Data(){
//      $conn =new mysqli("localhost","root", "","pencilbox");

//       $_name = $_POST['name'];
//       $_email = $_POST['email'];
//       $_stayusVal = $_POST['statusValu'];


//       if ($_name == "") {
//           echo '<span class="alert alert-danger me-5" role="alert">
//           A simple success alert—check it out!';
//       }if($_email == "") {
//           echo '<span class="alert alert-danger ms-5" role="alert">
//           A simple success alert—check it out!';
//       }else{

//          $result = $conn->query("INSERT INTO tbl_data_input(Name,Email,Status)VALUES('$_name','$_email',$_stayusVal)");
//       }
     
//    }
?>

