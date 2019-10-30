<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

require_once __DIR__ . "/../../vendor/autoload.php";

use srag\Plugins\SrFilePatcher\Utils\SrFilePatcherTrait;
use srag\RemovePluginDataConfirm\SrFilePatcher\AbstractRemovePluginDataConfirm;

/**
 * Class SrFilePatcherRemoveDataConfirm
 *
 * Generated by srag\PluginGenerator v0.13.7
 *
 * @author            studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author            studer + raimann ag - Team Core 1 <support-core1@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy SrFilePatcherRemoveDataConfirm: ilUIPluginRouterGUI
 */
class SrFilePatcherRemoveDataConfirm extends AbstractRemovePluginDataConfirm
{

    use SrFilePatcherTrait;
    const PLUGIN_CLASS_NAME = ilSrFilePatcherPlugin::class;
}
