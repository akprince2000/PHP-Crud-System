<?php include "classes.php"  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Project</title>
<style>
  .form-holder {
	width: 80%;
}
</style>

<!-- Font osam Cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- bootstrap 4  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   
  <div class="container">
   <div class="col-md-6 offset-md-3">

         <?php   
             $_data_submit = new form_submit;

             if(isset($_POST["submit"])){
              $_result_data = $_data_submit->insert($_POST);
              // var_dump($_result_data);
              // if ($_result_data === true) {
              //   echo 'Succes';
              // }else{
              //   echo '<p style="color:red">Data Input Un success</p>';
              // }
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
                     <option selected disabled value="">--Select Status --</option>
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
                 <div class="col-md-8 offset-md-2">
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
                       
                        if($result->num_rows>0){
                          $sl=1;
                          while ( $_data_rows = $result->fetch_assoc()) {
                          echo '<tr>
                                    <td>'. $sl .'</td>
                                    <td>' . $_data_rows["Name"].'</td>
                                    <td>'. $_data_rows["Email"].'</td>
                                    <td>'. $_data_rows["Status"].'</td>
                                    <td> 
                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>

                                    
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteBtn '. $_data_rows["ID"] .'"><i class="fas fa-trash"></i></button>
                                   
                                    
                                    </td>
                                 </tr>';
                                 $sl++;    ?>



                            
                        <!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="deleteBtn <?php echo $_data_rows['ID']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          Are You Sure Want To Delete This User ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="delete.php?uid=<?php echo $_data_rows["ID"] ?>" type="button" class="btn btn-danger">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>

                        
                        <?php 
                      }
                     
                     }?>
            </table>
                     

                   
                 </div>
               </div>
             </div>





<!-- <form method="GET">
      <button type="button" class="btn btn-danger">Delete</button>
</form> -->

                        
                        


    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- bootstrap 4 js Cdn  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




