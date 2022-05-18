<?php
    
    namespace Core\Routing;

    /**
     * PathBinding
     *
     * A binding between a address to a controller method
     */
    class PathBinding
    {
        /**
         * Incoming Path
         */
        public string $path;

        /**
         * Target controller that contains the method
         */
        public string $controller;


        /**
         * Target method to call when this path is requested
         */
        public string $method;
    }

