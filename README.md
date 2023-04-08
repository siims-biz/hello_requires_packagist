# hello_requires_packagist
Dependency between hello_packagist and hello_requires_packagist
# 2023-04-08 21:19
```
Search for a package:
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Add PSR-4 autoload mapping? Maps namespace "Siims\HelloRequiresPackagist" to the entered relative path. [src/, n to skip]:

{
    "name": "siims/hello_requires_packagist",
    "description": "Depends on siims/hello_packagist:dev-main",
    "type": "library",
    "require": {
        "siims/hello_packagist": "dev-main"
    },
    "license": "OSL-3.0",
    "autoload": {
        "psr-4": {
            "Siims\\HelloRequiresPackagist\\": "src/"
        }
    },
    "authors": [
        {
            "name": "siims",
            "email": "not@relevant.com"
        }
    ],
    "minimum-stability": "dev"
}

Do you confirm generation [yes]? yes
Would you like to install dependencies now [yes]?
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking siims/hello_packagist (dev-main 4f68428)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Downloading siims/hello_packagist (dev-main 4f68428)
  - Installing siims/hello_packagist (dev-main 4f68428): Extracting archive
Generating autoload files
No security vulnerability advisories found
PSR-4 autoloading configured. Use "namespace Siims\HelloRequiresPackagist;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';
```
