
<div class="container p-5">

    <h2 class="text-center">Add students</h2>
    
    <form method="post" enctype="multipart/form-data">
     <div class="form-group mt-3">
    <input type="text" name="fnm" value="<?php echo $edtdata[0]['Firstname']; ?>" placeholder="Enter firstname" required class="form-control"> 
    </div>   

    <div class="form-group mt-3">
        <input type="text" name="lnm" value="<?php echo $edtdata[0]['Lastname']; ?>"  placeholder="Enter lastname" required class="form-control"> 
    </div>   

     <div class="form-group mt-3">
        <input type="text" name="em" value="<?php echo $edtdata[0]['Email']; ?>" placeholder="Enter email" required class="form-control"> 

    </div>   
            
     <div class="form-group mt-3">
      <input type="password" name="password" value="<?php echo $edtdata[0]['Password']; ?>" placeholder="Enter password" required class="form-control"> 
     </div>   

     <div class="form-group mt-3">
        <img src="<?php echo $edtdata[0]['Photo']; ?>" width="25%" height="120px">
      <input type="file" name="img" required class="form-control"> 
     </div>   
            
     <div class="form-group mt-3">
      Male :<input type="radio" name="gender" value="<?php echo $edtdata[0]['Gender']; ?>"> 
      Female<input type="radio" name="gender" value="<?php echo $edtdata[0]['Gender']; ?>"> 
       
   </div>   
     
   <div class="form-group mt-3">
      <input type="text" name="phone" value="<?php echo $edtdata[0]['Phone']; ?>" placeholder="Phone *" required class="form-control"> 
      </div>   
        
     <div class="form-group mt-3">
        <input type="submit"  name="update" value="Update" class="btn btn-lg btn-info"> 
        
        <input type="reset"  name="reset" value="Reset" class="btn btn-lg btn-danger"> 
        </div>   
</div>
        