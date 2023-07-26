<?php
require_once("model/model.php");

class controller extends Model
{
    public function __construct()
    {
        parent::__construct();
 
        
    //build a logic for insert data
    if(isset($_POST["add_student"]))
    {
        date_default_timezone_set("Asia/Calcutta");
        $fnm=$_POST["fnm"];
        $lnm=$_POST["lnm"];
        $em=$_POST["em"];
        $pass=$_POST["password"];
        $tmp_name=$_FILES["img"]["tmp_name"];
        $path="assets/images/".$_FILES["img"]["name"];
        move_uploaded_file($tmp_name,$path);
        $gen=$_POST["gender"];
        $hobby=implode($_POST["chk"]);
        $phone=$_POST["phone"];
        $rdt=date("d/m/Y h:i:s a");
        $data=array("Firstname"=>$fnm,"Lastname"=>$lnm,"Email"=>$em,"Password"=>$pass,"Photo"=>$path,"Gender"=>$gen,"Hobby"=>$hobby,"Phone"=>$phone,"Registered_date_time"=>$rdt);
        $chk=$this->insertdata('tbl_addstudent',$data);
        if($chk)
        {
            echo "<script>
                alert('Inserted Successfully')
                window.location='./';
            
            </script>";
        }
        
    }
        //logic of show data
           $shw=$this->showdata("tbl_addstudent");

        //delete data
        if(isset($_GET["deldata"]))
        {
            $delid=$_GET["deldata"];
            $id=array("std_id"=>$delid);
            $chk=$this->deletedata('tbl_addstudent',$id);
            if($chk)
            {
                echo "<script>
                    alert('Deleted Successfully')
                    window.location='./';
                
                </script>";

            }

        }

        //edit data
        if(isset($_GET["editdataid"]))
        {
            $id=$_GET["editdataid"];
            $edtdata=$this->edit('tbl_addstudent','std_id',$id);
        }

        //update data
        if(isset($_POST["update"]))
        {
            $id=$_GET["editdataid"];
              $fnm=$_POST['fnm'];
              $lnm=$_POST['lnm'];
              $em=$_POST['em'];
              $pass=$_POST['password'];
              $tmp_name=$_FILES['img']["tmp_name"];
              $path="assets/images/".$_FILES["img"]["name"];
              move_uploaded_file($tmp_name,$path);
              $gender=$_POST['gender'];
              $phone=$_POST['phone'];
              $chk=$this->updatedata('tbl_addstudent',$fnm,$lnm,$em,$pass,$path,$gender,$phone,'std_id',$id);
              if($chk)
                {
                    echo "<script>
                       alert('Successfully Updated')
                       window.location='./' ;
                    </script>";
                }


        }

        

       
// routing
    if($_SERVER["PATH_INFO"])
    {
         switch($_SERVER["PATH_INFO"])
         {
            case '/':
                require_once("index.php");
                require_once("navigation.php");
                require_once("showdata.php");
                require_once("addstudent.php");
                require_once("footer.php");
                break;

            case '/editdata':
                require_once("index.php");
                require_once("navigation.php");
                require_once("editdata.php");
                require_once("footer.php");
                break;

            case '/login':
                require_once("index.php");
                require_once("navigation.php");
                require_once("login.php");
                require_once("footer.php");
                break;


            default:
                require_once("index.php");
                require_once("navigation.php");
                require_once("404.php");
                require_once("footer.php");

        }

    }

}
    
}
$obj=new controller;

?>