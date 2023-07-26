<div class="modal fade" role="dialog" id="addst">
 <div class="modal-dialog">
 <button type="button" class="btn-close" aria-label="Close" style="margin-left:90%;"></button>
<div class="modal-content p-5">

    <h2 class="text-center">Add students</h2>
    
    <form method="post" enctype="multipart/form-data">
     <div class="form-group mt-3">
    <input type="text" name="fnm" placeholder="Enter firstname" required class="form-control"> 
    </div>   
    <div class="form-group mt-3">
        <input type="text" name="lnm" placeholder="Enter lastname" required class="form-control"> 
        </div>   
     <div class="form-group mt-3">
        <input type="text" name="em" placeholder="Enter email" required class="form-control"> 
        </div>   
            
     <div class="form-group mt-3">
      <input type="password" name="password" placeholder="Enter password" required class="form-control"> 
      </div>   

     <div class="form-group mt-3">
      <input type="file" name="img" required class="form-control"> 
      </div>   
            
     <div class="form-group mt-3">
      Male :<input type="radio" name="gender" value="male"> 
      Female<input type="radio" name="gender" value="female"> 
       
   </div>   

     <div class="form-group mt-3">
      Reading <input type="checkbox" name="chk[]" value="reading"> 
      Playing <input type="checkbox" name="chk[]" value="playing">
      surfing <input type="checkbox" name="chk[]" value="surfing"> 
      Cooking<input type="checkbox" name="chk[]" value="cooking" >  
   </div>   
   

   <div class="form-group mt-3">
      <input type="text" name="phone" placeholder="Phone *" required class="form-control"> 
      </div>   
        
     <div class="form-group mt-3">
        <input type="submit"  name="add_student" value="AddStdents" class="btn btn-lg btn-info"> 
        
        <input type="reset"  name="reset" value="Reset" class="btn btn-lg btn-danger"> 
        </div>   
</div>
</div>        