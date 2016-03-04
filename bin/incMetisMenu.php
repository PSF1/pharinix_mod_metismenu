<?php
if (!defined("CMS_VERSION")) { header("HTTP/1.0 404 Not Found"); die(""); }

if (!class_exists("commandIncMetisMenu")) {
    class commandIncMetisMenu extends driverCommand {

        public static function runMe(&$params, $debug = true) {
            $path = driverCommand::getModPath("pharinix_mod_metismenu");
            
            echo '<link rel="stylesheet" href="'.CMS_DEFAULT_URL_BASE.$path.'metisMenu.css"/>'."\n";
            echo '<script src="'.CMS_DEFAULT_URL_BASE.$path.'metisMenu.js"></script>'."\n";
        }

        public static function getHelp() {
            return array(
                "package" => "pharinix_mod_metismenu",
                "description" => __("Print HTML includes to metis menu."), 
                "parameters" => array(), 
                "response" => array(),
                "type" => array(
                    "parameters" => array(), 
                    "response" => array(),
                ),
                "echo" => true
            );
        }
        
        public static function getAccess($ignore = "") {
            $me = __FILE__;
            return parent::getAccess($me);
        }
        
        public static function getAccessFlags() {
            return driverUser::PERMISSION_FILE_ALL_EXECUTE;
        }
    }
}
return new commandIncMetisMenu();