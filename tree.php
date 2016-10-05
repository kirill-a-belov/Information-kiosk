
        <?php


            include("/source/controllers/Engine.php");

                $view = new MainView;


                if (isset($_GET['path']) == true)
                {
                $view->display($_GET['path']);    
                }
                else
                {
                $view->display('./content');    
                }
          ?>
    