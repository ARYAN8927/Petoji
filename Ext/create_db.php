<html>
    <center>
        <h3>
            <?php
                // Connecting to MySQL Server
                $con = mysqli_connect("localhost", "root", "");
                if(!$con)
                {
                    die("<span style='color:Red'>Failed to connect to MySQL SERVER!!! </span>" .mysqli_connect_error());
                    echo "<span><br></span>";
                }
                else
                {
            // ------------------------------------------------------------------------------------------------------------------------
                    
            // ------------------------------------------START OF PETOJI DATABASE-----------------------------------------------------
            
                    // Deleting existing developmental stage database Petoji
                    $delete_database = "DROP DATABASE `Petoji`";
                    if(mysqli_query($con,$delete_database))
                    {
                        echo "<span style='color:Green'>Successfully deleted Database 'Petoji' !!!<br></span>";
                    }
                    else
                    {
                        echo "<span style='color:Red'>Failed to delete Database 'Petoji' !!! </span>" .mysqli_error($con);
                        echo "<span><br></span>";
                    }
            // ------------------------------------------------------------------------------------------------------------------------

                    // Creating Database Petoji
                    $query = "CREATE DATABASE `Petoji`";
                    if(mysqli_query($con,$query))
                    {
                        echo "<span style='color:Green'>Successfully created Database 'Petoji' !!!<br></span>";
                        $con1 = mysqli_connect("localhost", "root", "", "Petoji");
                        if(!$con1)
                        {
                            die("<span style='color:Red'>Failed to connect to Database 'Petoji' !!! </span>" .mysqli_connect_error());
                            echo "<span><br></span>";
                        }
                        else
                        {
            // --------------------------------------------------------------------------------------------------------------------------------- 
            // ------------------------------------------START OF PETOJI'S TABLE-----------------------------------------------------------------                  
                            // Creating Table cust_acc
                            $query1 = "CREATE TABLE `Petoji`.`cust_acc` (
                            `Phn_no` VARCHAR(50) NOT NULL,
                            `EMail` VARCHAR(50) NOT NULL, 
                            `L_Password` VARCHAR(50) NOT NULL,
                            `Name` TEXT(50) NOT NULL,
                            `Card_Info` VARCHAR(50) NOT NULL,
                            `Address` VARCHAR(50) NOT NULL,
                            PRIMARY KEY (`Phn_no`)
                            )";
                            if(mysqli_query($con1,$query1))
                            {
                                echo "<span style='color:Green'>Successfully created Table 'cust_acc' !!!<br></span>";
                            }
                            else
                            {
                                echo "<span style='color:Red'>Failed to create table 'cust_acc' !!! </span>" .mysqli_error($con1);
                                echo "<span><br></span>";
                            }                
            // ---------------------------------------------------------------------------------------------------------------------------------
            // ------------------------------------------END OF PETOJI'S TABLE----------------------------------------------------------------- 
                        }
                    }
                    else
                    {
                        echo "<span style='color:Red'>Failed to create Database Petoji !!! </span>" .mysqli_error($con);
                        echo "<span><br></span>";
                    }
                }
            
            // ------------------------------------------END OF PETOJI DATABASE-----------------------------------------------------
                mysqli_close($con);
            ?>
        </h3>
    </center>
</html>