<?php
    namespace app\controllers;

    /**
     * HomeController
     *
     * Example controller for your homepage. 
     */
    class HomeController extends BaseController 
    {
        #[GET]
        #[Route('/')]
        public function index($id, $request)
        {
        
        }
    }