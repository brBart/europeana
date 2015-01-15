<?php

/*
 * This file is part of the Europeana package
 *
 * (c) Matthias Vandermaesen <matthias@colada.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('Europeana\\', __DIR__.'/Europeana');

date_default_timezone_set('UTC');
