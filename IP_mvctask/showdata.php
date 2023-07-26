<div class="container-fluid p-5 mt-2">
<div class="row">
<div class="col-md-3">
    <h4 class="text-center mt-5">Student management systems</h4>
    <img src="assets/images/std.png" style="width:90%;  margin-top:10%; ">
</div>    
<div class="col-md-9 shadow" style="overflow:auto">
<button type="button" data-bs-toggle="modal" data-bs-target="#addst" class="btn btn-info btn-lg float-right" style="float: right;">Add student</button>
<h1 class="text-center mt-4">Show all students Data</h1>
<hr class="border border-1 border-danger w-25 mx-auto">
<table id="tbl" class="display mt-4" style="width:100%">
    <thead>
        <tr>
            <th>FirtName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>photo</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Phone</th>
            <th>Register Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
         foreach($shw as $row)
         {
        ?>
        <tr>
            <td><?php echo $row["Firstname"]; ?></td>
            <td><?php echo $row["Lastname"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><img src="<?php echo $row["Photo"]; ?>" style="width:125px; height:125px"></td>
            <td><?php echo $row["Gender"]; ?></td>
            <td><?php echo $row["Hobby"]; ?></td>
            <td><?php echo $row["Phone"]; ?></td>
            <td><?php echo $row["Registered_date_time"]; ?></td>
            <td><a href="<?php echo $mainurl;?>./?deldata=<?php echo $row["std_id"]; ?>" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a> | 
                <a href="<?php echo $mainurl;?>editdata?editdataid=<?php echo $row["std_id"]; ?>" class="btn btn-sm btn-info"><span class="bi bi-pencil"></span></a>
        </td>
        </tr>
    
         <?php 
    }
    ?>
    </tbody>
    <tfoot>
        <tr>
        <th>FirtName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>photo</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Phone</th>
            <th>Register Date</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>


</div>
</div>
</div>

</div>
<script>
$(document).ready(function () {
$('#tbl').DataTable();
});
</script>