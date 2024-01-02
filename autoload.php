<?php declare(strict_types=1);
/**
 * (c) 2005-2023 Dmitry Lebedev <dl@adios.ru>
 * This source code is the Ultra autoloader.
 */
require_once \dirname(__DIR__).'/core/boot.php';
\ultra\Boot::start(initial_path: \dirname(__DIR__, 2));
