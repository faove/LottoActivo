<?php
/* Change to the correct path if you copy this example! */
require __DIR__ . '/escpos-php-master/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;

try {
    $connector = new CupsPrintConnector("ZJ-58-2");
    
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer -> text("Hello World!\n");
    $printer -> cut();
    
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
