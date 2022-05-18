<?php
    
    namespace Core\Routing;

    use Core\Collections\Collection;

    /**
     * Router
     *
     * Route a call to a path to a controller method.
     */
    class Router
    {
        /**
         * Collection of 
         */
        private static Collection $paths;

        public function construct() {
            $this->paths = new Collection();
        }

    }