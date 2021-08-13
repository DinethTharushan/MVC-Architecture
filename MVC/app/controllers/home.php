
<?php

class home extends controller{

    public function home(){
        
        $this->model('user');
        $resultset = $this->model->runQuery();

        $this->view('homeview');
        $this->view->render('home', $resultset);

    } 
    }

    


?>