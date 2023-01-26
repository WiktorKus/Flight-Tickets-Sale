<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Flight.php';
require_once __DIR__.'/../repository/CartRepository.php';

class CartController extends AppController
{
    private $cartRepository;

    public function __construct()
    {
        parent::__construct();
        $this->cartRepository = new CartRepository();
    }

    public function cartFlights() {
        $cartFlights = $this->cartRepository->getCartFlights();
        $this->render('cartFlights', ['cartFlights' => $cartFlights]);
    }
}