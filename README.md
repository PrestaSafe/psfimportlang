# PSF Import lang

This module will help you to import package language to PrestaShop by Using CLI

## Install 
```
cd modules
git clone https://github.com/PrestaSafe/psfimportlang.git
cd psfimportlang
composer install
cd ../../
php bin/console pr:mo install psfimportlang
```

## How to use

Once the module is installed, you can use it by running this command: 

`php bin/console psf:translations:import {iso}`

replace `{iso}` by an ISO code exemple with French language: 

`php bin/console psf:translations:import fr`

You will see this result !

![Capture d’écran 2024-05-29 à 20 10 57](https://github.com/PrestaSafe/psfimportlang/assets/4788787/fb55c946-9c6c-48a5-afe0-dc67a282b1b2)


Enjoy !
