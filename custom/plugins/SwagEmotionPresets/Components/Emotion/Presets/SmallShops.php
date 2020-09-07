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

class SmallShops implements PresetMetaDataInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'swag_small_shops';
    }

    /**
     * @return bool
     */
    public function getPremium()
    {
        return false;
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
                'label' => 'Small Shops',
                'description' => 'Hier wechseln sich Banner-Elemente mit verschiedenen Artikel-Elementen ab. In stimmungsvollen Bildern können die Produkte und deren Mehrwert inszeniert werden, anschließend wird auf die entsprechenden Produkte verlinkt. Somit ist diese Einkaufswelt besonders für Shops mit einem kleinen, ausgewählten Sortiment interessant.',
                'locale' => 'de_DE',
            ],
            [
                'label' => 'Small shops',
                'description' => 'Here banner elements alternate with various item elements. Use content-rich, atmospheric images to stage selected products. You can also map images so that they link to specific product pages. This is particularly interesting for shops with a unique product range.',
                'locale' => 'en_GB',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getPresetData()
    {
        $json = SwagEmotionPresets::getJsonData('SmallShops.json');

        return json_decode($json, true);
    }

    /**
     * @return array
     */
    public function getRequiredPlugins()
    {
        return [];
    }

    /**
     * @return bool
     */
    public function getAssetsImported()
    {
        return false;
    }
}
