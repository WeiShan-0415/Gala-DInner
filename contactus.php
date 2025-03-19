<?php
    function getDB()
    {
        $dbConnection= new PDO('sqlite:Message.db');
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
    if (isset($_POST['name']) &&      
            isset($_POST['email']) && 
               isset($_POST['contact'])&& 
                   isset($_POST['query']))
                            {
                               $name=$_POST['name'];
                               $email=$_POST['email'];
                               $contact=$_POST['contact'];
                               $query=$_POST['query'];
        try
        {
            $DB= getDB();
            $DB->exec("INSERT INTO message(name,email,contact,query)VALUES('$name','$email','$contact','$query')");
            $DB=NULL;
        }
        catch (PDOException $e)
        {
            echo'Exception: '.$e->getMessage();
        }
    }