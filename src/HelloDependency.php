<?php
declare(strict_types=1);
namespace Siims\HelloRequiresPackagist;
use Siims\HelloPackagist\HelloComposer;

class HelloDependency extends HelloComposer {
    public function __toString() :string {
        return parent::__toString() . " Hello From Dependency\n";
    }
}