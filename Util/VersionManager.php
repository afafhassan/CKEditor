<?php
namespace Hillrange\CKEditor\Util;


class VersionManager
{
    const VERSION = '0.1.18';

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return VersionManager::VERSION;
    }
}