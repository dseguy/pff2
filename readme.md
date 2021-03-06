**Pff2 MVC PHP framework**
==============================

[![Build Status](https://travis-ci.org/stonedz/pff2.svg?branch=master)](https://travis-ci.org/stonedz/pff2)
[![Coverage Status](https://img.shields.io/coveralls/stonedz/pff2.svg)](https://coveralls.io/r/stonedz/pff2?branch=master)
[![Latest Stable Version](https://poser.pugx.org/stonedz/pff2/v/stable.svg)](https://packagist.org/packages/stonedz/pff2)
[![License](https://poser.pugx.org/stonedz/pff2/license.svg)](https://packagist.org/packages/stonedz/pff2)
[![Code Climate](https://codeclimate.com/github/stonedz/pff2/badges/gpa.svg)](https://codeclimate.com/github/stonedz/pff2)
[![Dependency Status](https://www.versioneye.com/user/projects/545897eab0448a91020000bd/badge.svg?style=flat)](https://www.versioneye.com/user/projects/545897eab0448a91020000bd)

## Composer Installation

To setup a new project:

   - Create e new directory
   - Install composer in the directory (or do a global composer install). See [here for the instructions](https://getcomposer.org/doc/00-intro.md).
    - Create a composer.json file with the following content:

```json
{
    "name": "company/project-name",
    "description": "",
    "minimum-stability": "beta",
    "license": "proprietary",
    "authors": [
        {
            "name": "",
            "email": ""
        }
    ],
    "require": {
        "stonedz/pff2": "~2"
    },
    "autoload": {
        "psr-4": {
            "pff\\models\\": "app/models",
            "pff\\controllers\\": "app/controllers",
            "pff\\services\\": "app/services"
        }
    }
}

```

 - Run <code>php composer.phar install</code>
 - Run <code>vendor/bin/init</code> (and follow on screen instructions)

**Please see the [Wiki](https://github.com/stonedz/pff2/wiki) for more informations.**
