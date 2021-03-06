<?php

/*
 * This file is part of the Ivory CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Hillrange\CKEditor\Util;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
interface ConfigManagerInterface
{
    /**
     * @return string
     */
    public function getDefaultConfig();

    /**
     * @param string $defaultConfig
     */
    public function setDefaultConfig($defaultConfig);

    /**
     * @return bool
     */
    public function hasConfigs();

    /**
     * @return array
     */
    public function getConfigs();

    /**
     * @param array $configs
     */
    public function setConfigs(array $configs);

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasConfig($name);

    /**
     * @param string $name
     *
     * @return array
     */
    public function getConfig($name);

    /**
     * @param string $name
     * @param array  $config
     */
    public function setConfig($name, array $config);

    /**
     * @param string $name
     * @param array  $config
     */
    public function mergeConfig($name, array $config);
}
