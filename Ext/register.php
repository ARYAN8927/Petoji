<?php
    $con = mysqli_connect("localhost", "root", "", "Petoji")
            or die("Failed to connect SERVER!!!" .mysqli_connect_error());
    $reg_phn_no = mysqli_real_escape_string($con, $_POST["reg_phn_no"]);
    $reg_email = mysqli_real_escape_string($con, $_POST["reg_email"]);
    $reg_l_password = mysqli_real_escape_string($con, $_POST["reg_l_password"]);
    $reg_cl_password = mysqli_real_escape_string($con, $_POST["reg_cl_password"]);
    
                
    $query="SELECT * FROM cust_acc WHERE BINARY Phn_no='$reg_phn_no'";
    $res=mysqli_query($con,$query);
    $num_row=mysqli_num_rows($res);
    $row=mysqli_fetch_assoc($res);

    if ($reg_l_password == $reg_cl_password) 
    {
        if( $num_row == 1 )
        {
            header("Location:LogIn.php?msg=2");
        }
        else
        {
            $query1 = "INSERT INTO cust_acc(Phn_no, EMail, L_Password)
                        VALUES('$reg_phn_no', '$reg_email', '$reg_l_password')";
            if(!mysqli_query($con, $query1))
            {
                //echo "<span style='color:Red'>ERROR!!! </span>" .mysqli_error($con);
                header("Location:signup.php?msg=0");
            }
            else
            {
                header("Location:LogIn.php?msg=1");
            }
        }
    } 
    else 
    {
        header("Location:signup.php?msg=2");
    }

?>