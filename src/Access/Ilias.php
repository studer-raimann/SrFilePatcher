<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace srag\Plugins\SrFilePatcher\Access;

use srag\Plugins\SrFilePatcher\Utils\SrFilePatcherTrait;
use ilSrFilePatcherPlugin;
use srag\DIC\SrFilePatcher\DICTrait;

/**
 * Class Ilias
 *
 * Generated by srag\PluginGenerator v0.13.7
 *
 * @package srag\Plugins\SrFilePatcher\Access
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  studer + raimann ag - Team Core 1 <support-core1@studer-raimann.ch>
 */
final class Ilias
{

    use DICTrait;
    use SrFilePatcherTrait;
    const PLUGIN_CLASS_NAME = ilSrFilePatcherPlugin::class;
    /**
     * @var self
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Ilias constructor
     */
    private function __construct()
    {

    }
}
