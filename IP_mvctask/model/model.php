<?php
class Model
{
    public $connection="";
    public function __construct()
    {
        try
        {
            $this->connection=new mysqli("localhost","root","","mvctask_db");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }
    }
    

    //create a member function to insert data
    public function insertdata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);
        $insert="insert into $table($column1) values('$value1')";

        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }

    //create member function to show data
    public function showdata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //create a member function to insert data
     public function deletedata($table,$id)
    {   
        $column=array_keys($id);
        $column1=implode(",",$column);

        $value=array_values($id);
        $value1=implode("','",$value);

        $delete="delete from $table where $column1='$value1'";
        $exe=mysqli_query($this->connection,$delete);
        return $exe;
    }


    public function edit($table,$column,$id)
    {   
        $edit="select * from $table where $column='$id'";
        $exe=mysqli_query($this->connection,$edit);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    
    public function updatedata($table,$fnm,$lnm,$em,$pass,$path,$gender,$phone,$column,$id)
    {
        $update="update $table set Firstname='$fnm',Lastname='$lnm',Email='$em',Password='$pass',Photo='$path',Gender='$gender',Phone='$phone' where $column='$id'";
        $exe=mysqli_query($this->connection,$update);
        return $exe;
    }

}

?>