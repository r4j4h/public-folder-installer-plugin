# A [Composer](http://getcomposer.org) Public Folder-based Library Installer

## Example `composer.json` File

This is an example for a site. The parts to set in your
composer.json file are `"type": "public-folder"` which describes what your
package is and `"require": { "r4j4h/public-folder-installer-plugin": "*" }` which tells composer
to load the custom installers.

*Package composer.json*

```json
{
    "name": "webpt/emrjs",
    "type": "public-folder",
    "require": {
        "r4j4h/public-folder-installer-plugin": "*"
    }
}
```

This would install your package to the `public/shared` folder 
when a user runs `php composer.phar install`.



*Package Consumer composer.json*

```json
{
    "name": "webpt/app",
    "description": "An Application",
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:WebPT/EMRJS.git"
        },
        {
            "type": "vcs",
            "url": "git@github.com:r4j4h/public-folder-installer-plugin"
        }
    ],
    "require": {
        "webpt/emrjs": "1.x*@dev"
    }
}
```

The end consumer needs to explicity also require the `public-folder-installer-plugin` via repositories.
