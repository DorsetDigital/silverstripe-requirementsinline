# silverstripe-requirementsinline

*Please note:  This module is no longer in active development.  The functionality which this module provides can now be found in the following module:*

https://github.com/DorsetDigital/silverstripe-enhanced-requirements


----------------------------------------------------------------



Extension of SilverStripe's requirements to allow for adding scripts and CSS inline from files

Silverstripe provides a number of ways to add Javascript and CSS to your pages, but currently doesn't allow you to add inline code from external files.
This module is a simple way to do this, meaning that you can keep your inline scripts and CSS in separate files to help with your build process, but take advantage of using them inline where needed.

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-requirementsinline/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-requirementsinline/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-requirementsinline/badges/build.png?b=master)](https://scrutinizer-ci.com/g/DorsetDigital/silverstripe-requirementsinline/build-status/master)
[![License](https://img.shields.io/badge/License-BSD%203--Clause-blue.svg)](LICENSE.md)
[![Version](http://img.shields.io/packagist/v/dorsetdigital/silverstripe-requirementsinline.svg?style=flat)](https://packagist.org/packages/dorsetdigital/silverstripe-requirementsinline)


# Requirements
* Silverstripe 4.x

# Installation
* Install the code with `composer require dorsetdigital/silverstripe-requirementsinline`
* Run a `dev/build?flush` to update your project

# Usage

Use the methods in the same way as the standard `Requirements` methods for `themedCSS()` and `themedJavascript()`:


```php
<?php

use DorsetDigital\SilverstripeRequirements\RequirementsInline;

class MyPageController extends PageController
{

 public function init()
 {
  parent::init();
  RequirementsInline::themedJavascript('homescript');
  RequirementsInline::themedCSS('homestyles');
 }
}
```
