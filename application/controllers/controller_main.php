<?php

class Controller_Main extends Controller {

    function action_index() {
        $data = array('title' => 'Главная');
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}