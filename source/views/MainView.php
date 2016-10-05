<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
        <title></title>
    </head>
    <style type="text/css">
    
        button{
        height: 250px;
        width: 250px;
        }
        ul {
        font: 31px Verdana, Geneva, sans-serif;
        text-align: center;
        margin: 0px 0 0px;
}
        
                ul li {

                        display : inline-block;
                        width : 300px;
                        height: 300px;
                        margin: 50px 0 0px;
/*                        background: #E76D13;*/
                        vertical-align: center;
                        text-align: center;

                       
                }

    </style>
    
    <header>
    </header>
        
    <body>
<?php

class MainView
{
    public function display($folder)
    {
      $files = scandir($folder);
     
      if (count($files) <=8 )
    {
        echo '<ul>';
         foreach($files as $file) {
          /* Отбрасываем текущий и родительский каталог */
          if (($file == '.') || ($file == '..')) continue;
          $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
          /* Если это директория */

          if (is_dir($f0)) {
            /* Выводим, делая заданный отступ, название директории */

              echo '<li><button><a href=tree.php?path='.str_replace(" ","%20", $f0).'>'.$file.'</a></button></li>';

                }
          /* Если это файл, то просто выводим название файла */
          else 
          {

           echo '<li><button><a href='.str_replace(" ","%20", $f0).'>'.$file.'</a></button></li>';

        }}
       echo '</ul>';
        
    }

   else
   {
       
         foreach($files as $file) {
          /* Отбрасываем текущий и родительский каталог */
          if (($file == '.') || ($file == '..')) continue;
          $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
          /* Если это директория */

          if (is_dir($f0)) {
            /* Выводим, делая заданный отступ, название директории */

              echo '<button><a href=tree.php?path='.str_replace(" ","%20", $f0).'>'.$file.'</a></button><br>';

                }
          /* Если это файл, то просто выводим название файла */
          else 
          {

           echo '<button><a href='.str_replace(" ","%20", $f0).'>'.$file.'</a></button></br>';

        }}
      
   }
}
}
  
?>
</body>
    
    
    <footer>
        
    </footer>
    
</html>   