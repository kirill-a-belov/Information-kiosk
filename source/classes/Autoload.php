<?php

class Autoload
{
    static function classAutoLoad($class) 
    {
        if (file_exists("./source/classes/$class.php"))
            include("./source/classes/$class.php");
        else if (file_exists("./source/views/$class.php"))
            include("./source/views/$class.php");
        else if ("./source/controllers/$class.php")
            include("./source/controllers/$class.php");
        else 
            echo 'Ошибка загрузки класса';
    }

}
