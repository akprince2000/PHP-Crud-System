<?php include "classes.php"  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- !-- Optional theme --> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Font osam Cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   
  <div class="container">
   <div class="col-md-6 offset-md-3">

         <?php   
             $_data_submit = new form_submit;

             if(isset($_POST["submit"])){
              $_result_data = $_data_submit->insert($_POST);

              if ($_result_data === true) {
                echo 'Succes';
              }else{
                echo 'Un success';
              }
             }
           ?>



     <div class="form-body">
       <div class="row">
         <div class="form-holder">
           <div class="form-content">
             <div class="form-items">
               <h3>Register Today</h3>
               <br>
               <form method="POST" class="requires-validation" novalidate>
                 <div class="col-md-12">
                   <label>Name</label>
                   <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                   <br>
                 </div>
                 <div class="col-md-12">
                   <label>Email</label>
                   <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                   <br>
                 </div>
                 <div class="col-md-12">
                   <select class="form-select mt-3" name="statusValu">
                     <option selected disabled>--Select Status --</option>
                     <option value="1">Active</option>
                     <option value="2">Inactive</option>
                   </select>
                   <br>
                   <br>
                 </div>
                 <div class="form-button mt-3">
                   <button id="submit" name="submit" type="submit" class="btn btn-primary">Register</button>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <br>
             <div class="row">
               <div class="container">
                 <div class="col-md-8 offset-md-4">
                   <table class="table">
                     <tr>
                       <th>Sl No</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Status</th>
                       <th>Action</th>
                     </tr>

                     <?php
                        $result = $_data_submit->show();
                        $sl = 1;
                        while ( $_data_rows = $result->fetch_assoc()) {
                          echo '<tr>
                                    <td>'. $sl .'</td>
                                    <td>' . $_data_rows["Name"].'</td>
                                    <td>'. $_data_rows["Email"].'</td>
                                    <td>'. $_data_rows["Status"].'</td>
                                    <td> 
                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    
                                    </td>
                                 </tr>';
                                 $sl++;
                        }
                    
                     ?>

                   </table>
                 </div>
               </div>
             </div>

                        
                        


    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>




