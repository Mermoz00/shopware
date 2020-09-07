<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace SwagEmotionPresets;

use Shopware\Components\Emotion\Preset\PresetInstaller;
use Shopware\Components\Emotion\Preset\PresetMetaDataInterface;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use SwagEmotionPresets\Components\Emotion\Presets\AboutUs;
use SwagEmotionPresets\Components\Emotion\Presets\BrokenGrid;
use SwagEmotionPresets\Components\Emotion\Presets\Homepage;
use SwagEmotionPresets\Components\Emotion\Presets\MainPage;
use SwagEmotionPresets\Components\Emotion\Presets\SmallShops;
use SwagEmotionPresets\Components\Emotion\Presets\Storytelling;
use SwagEmotionPresets\Components\Emotion\Presets\VirtualJourney;

class SwagEmotionPresets extends Plugin
{
    /**
     * @return string
     */
    public static function getAssetPath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'Resources/assets';
    }

    /**
     * Reads the given image from path and returns the data as base64
     *
     * @param string $path
     *
     * @return string
     */
    public static function getBase64Jpg($path)
    {
        $image = file_get_contents($path);
        $base64 = base64_encode($image);
        unset($image);

        return  'data:image/jpg;base64,' . $base64;
    }

    /**
     * {@inheritdoc}
     */
    public function install(InstallContext $context)
    {
        /** @var PresetInstaller $presetInstallerService */
        $presetInstallerService = $this->container->get('shopware.emotion.preset_installer');

        $presetInstallerService->installOrUpdate($this->getPresetInstances());
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall(UninstallContext $context)
    {
        /** @var PresetInstaller $presetInstallerService */
        $presetInstallerService = $this->container->get('shopware.emotion.preset_installer');

        $presetInstallerService->uninstall([
            'swag_virtual_journey',
            'swag_storytelling',
            'swag_broken_grid',
            'swag_about_us',
            'swag_main_page',
            'swag_small_shops',
            'swag_homepage',
        ]);
    }

    /**
     * @param string $fileName
     *
     * @return string
     */
    public static function getJsonData($fileName)
    {
        $json = '{}';
        $jsonPath = self::getAssetPath() . '/presetData/' . trim($fileName, '/');
        if (file_exists($jsonPath)) {
            $json = file_get_contents($jsonPath);
        }

        return $json;
    }

    /**
     * @return PresetMetaDataInterface[]
     */
    private function getPresetInstances()
    {
        return [
            new VirtualJourney(),
            new Storytelling(),
            new BrokenGrid(),
            new AboutUs(),
            new MainPage(),
            new SmallShops(),
            new Homepage(),
        ];
    }
}
