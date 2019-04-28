<?php
/* Change to the correct path if you copy this example! */
//echo 'hola';
require __DIR__ . '/escpos-php-master/autoload.php';
//echo 'hola';
//require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
/**
 * On Linux, use the usblp module to make your printer available as a device
 * file. This is generally the default behaviour if you don't install any
 * vendor drivers.
 *
 * Once this is done, use a FilePrintConnector to open the device.
 *
 * Troubleshooting: On Debian, you must be in the lp group to access this file.
 * dmesg to see what happens when you plug in your printer to make sure no
 * other drivers are unloading the module.
 */
try {
	//agregar usuario a grupo lp ubuntu
	//$mode=777;
	//chmod('/dev/usb/lp0', intval($mode, 8));
	//chown -R "$USER":www-data /dev/usb/lp0
	exec('sudo -k');

	//Run sudo without authenticating
	//$output = exec('sudo echo "123"');
	//var_dump($output);
	
	$output = exec('echo "password" | sudo -S echo "123" 2> /dev/null');
	var_dump($output);
	
	chown('/dev/usb/lp0', 'www-data');
	
    // Enter the device file for your USB printer here
    $connector = new FilePrintConnector("/dev/usb/lp0");
    //echo 'hola';
    //$connector = new FilePrintConnector("/dev/usb/lp1");
    //$connector = new FilePrintConnector("/dev/usb/lp2");
    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector);
    $printer -> text("Fabiola!\n");
    $printer -> text("Donde estas?!\n");
    $printer -> text("Hello World!\n");
    $printer -> cut();
    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}
