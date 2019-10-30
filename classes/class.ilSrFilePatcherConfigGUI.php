<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

require_once __DIR__ . "/../vendor/autoload.php";

use srag\Plugins\SrFilePatcher\Config\ConfigFormGUI;
use srag\Plugins\SrFilePatcher\Utils\SrFilePatcherTrait;
use srag\ActiveRecordConfig\SrFilePatcher\ActiveRecordConfigGUI;

/**
 * Class ilSrFilePatcherConfigGUI
 *
 * Generated by srag\PluginGenerator v0.13.7
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author studer + raimann ag - Team Core 1 <support-core1@studer-raimann.ch>
 */
class ilSrFilePatcherConfigGUI extends ActiveRecordConfigGUI
{

    use SrFilePatcherTrait;
    const PLUGIN_CLASS_NAME = ilSrFilePatcherPlugin::class;
    /**
     * @var array
     */
    protected static $tabs = [self::TAB_CONFIGURATION => ConfigFormGUI::class];
}
