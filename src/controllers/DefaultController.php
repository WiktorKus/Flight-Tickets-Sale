<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login');
    }

    public function homePage() {
        $this->render('homePage');
    }

    public function help() {
        $this->render('help');
    }
}