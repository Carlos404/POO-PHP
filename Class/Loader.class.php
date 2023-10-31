<?php

class Loader {
    public static function classLoader($className) {
        $PATCH = "./pages/static/";
        if (!empty($className)) {
            foreach (array($PATCH) as $path) {
                $classPath = $path. $className. ".php";
                if (file_exists($classPath)) {
                    require_once $classPath;
                }
            }
        }
    }

    public static function pageLoader() {
        $PATCH = "./pages/dinamic/";
        $pageName = (isset($_GET['p'])) ? $_GET['p'] : "";
        if (file_exists("$PATCH/$pageName.php")) {
            require_once $PATCH. $pageName. ".php";
          }
    }
}

?>