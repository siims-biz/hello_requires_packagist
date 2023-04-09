<?php
/* License: OSL-3.0
   To be launched in shell environment
   php ExampleHelloRequiredComposer.php
*/

require 'vendor/autoload.php';
use Siims\HelloRequiresPackagist\HelloDependency;
$hello = new HelloDependency();
print "$hello";