<?php

include "Tea.php";
include "Coffee.php";

class TemplateEngine {

    public function __construct() {}

    public function createFile(HotBeverage $object) {
        $reflect = new ReflectionClass($object);
        $className = $reflect->getShortName(); // Tea, Coffee

        if (!file_exists("template.html") || !is_readable("template.html")) {
            echo "Template non trouvé !\n";
            return;
        }

        $templateLines = file("template.html");
        $output = fopen("$className.html", "w");

        foreach ($templateLines as $line) {
            foreach ($reflect->getProperties() as $property) {
                $name = $property->getName(); // ex: nom, prix, commentaire
                $getter = "get" . ucfirst($name);
                $placeholder = "{" . $name . "}";

                if (method_exists($object, $getter)) {
                    $value = $object->$getter();
                    $line = str_replace($placeholder, $value, $line);
                }
            }
            fwrite($output, $line);
        }

        fclose($output);
    }
}

?>
