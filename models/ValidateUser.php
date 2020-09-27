<?php

class ValidateUser 
{
     public static function Validate($password, $email,&$texterror)
    {
        $mySql = new SafeMySQL();
       
        $result = $mySql->getRow("SELECT email,password FROM users WHERE email LIKE ?s", $email);
        $error = FALSE;

        if ($result) {
            if (empty($result["email"])) {
                $texterror = "Не указан E-mail";
                $error = TRUE;                
            }elseif ($password !== $result['password']) {
                $texterror = "Не верный пароль";
                $error = TRUE;
            }
            
        } else {
            $texterror = "Извините Вы не зарегистрированы!";
            $error = TRUE;
        }
        
        return !$error;
    }
    public static function isValidate()
    {
        return isset($_SESSION['email']);
    }
}
