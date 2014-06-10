# A [Composer](http://getcomposer.org) Public Folder-based Library Installer

## Example `composer.json` File

This is an example for a site. The only important parts to set in your
composer.json file are `"type": "public-folder"` which describes what your
package is and `"require": { "r4j4h/public-folder-installer-plugin": "*" }` which tells composer
to load the custom installers.

```json
{
    "name": "WebPT/EMRJS",
    "type": "public-folder",
    "require": {
        "r4j4h/public-folder-installer-plugin": "*"
    }
}
```

This would install your package to the `public/shared` folder 
when a user runs `php composer.phar install`.
