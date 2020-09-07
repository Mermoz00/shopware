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

namespace SwagEmotionPresets\Components\Emotion\Presets;

use Shopware\Components\Emotion\Preset\PresetMetaDataInterface;
use SwagEmotionPresets\SwagEmotionPresets;

class VirtualJourney implements PresetMetaDataInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'swag_virtual_journey';
    }

    /**
     * @return bool
     */
    public function getPremium()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function getCustom()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return SwagEmotionPresets::getBase64Jpg(__DIR__ . '/../../../Resources/assets/media/' . (new \ReflectionClass($this))->getShortName() . '/preview/thumbnail.jpg');
    }

    /**
     * @return string
     */
    public function getPreview()
    {
        return SwagEmotionPresets::getBase64Jpg(__DIR__ . '/../../../Resources/assets/media/' . (new \ReflectionClass($this))->getShortName() . '/preview/preview.jpg');
    }

    /**
     * @return array
     */
    public function getTranslations()
    {
        return [
            [
                'label' => 'Virtuelle Reise',
                'description' => 'Mit einfachen, großformatigen Elementen kannst Du Deine Kunden in eine stimmungsvolle Welt entführen. Dazu werden vor allem Banner- und Digital Publishing-Elemente im Storytelling-Modus verwendet.',
                'locale' => 'de_DE',
            ],
            [
                'label' => 'Virtual journey',
                'description' => 'With simple, large-format elements, you can lead your customers through an atmospheric world of your products. Banners and Digital Publishing elements are used here in Storytelling mode.',
                'locale' => 'en_GB',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getPresetData()
    {
        $json = SwagEmotionPresets::getJsonData('VirtualJourney.json');

        return json_decode($json, true);
    }

    /**
     * @return array
     */
    public function getRequiredPlugins()
    {
        return [
            [
                'name' => 'SwagDigitalPublishing',
                'version' => '2.0.0',
            ],
            [
                'name' => 'SwagEmotionAdvanced',
                'version' => '2.0.0',
            ],
        ];
    }

    /**
     * @return bool
     */
    public function getAssetsImported()
    {
        return false;
    }
}
