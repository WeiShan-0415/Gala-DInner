<?php
    function getDB()
    {
        $dbConnection= new PDO('sqlite:RegistrationRecord.db');
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
    if (isset($_POST['name']) &&      
            isset($_POST['ic']) && 
               isset($_POST['studentID'])&& 
                   isset($_POST['contact']) && 
                       isset($_POST['email']) && 
                           isset($_POST['restrictions']))
                            {
                               $name=$_POST['name'];
                               $ic=$_POST['ic'];
                               $studentID=$_POST['studentID'];
                               $contact=$_POST['contact'];
                               $email=$_POST['email'];
                               $restrictions=$_POST['restrictions'];
        try
        {
            $DB= getDB();
            $DB->exec("INSERT INTO record(name,ic,studentID,contact,email,restrictions)VALUES('$name','$ic','$studentID','$contact','$email','$restrictions')");
            $DB=NULL;
        }
        catch (PDOException $e)
        {
            echo'Exception: '.$e->getMessage();
        }
    }
?>    
