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

class Homepage implements PresetMetaDataInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'swag_homepage';
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
                'label' => 'Startseite',
                'description' => 'Diese Einkaufswelt besteht aus vielen verschiedenen Elementen, wie beispielsweise Hersteller-Slidern, Bannern und Blogartikeln. Dadurch bekommen Deine Kunden einen guten, ersten Eindruck davon, was sie in Deinem Shop erwartet.',
                'locale' => 'de_DE',
            ],
            [
                'label' => 'Homepage',
                'description' => 'A minimalistic alternative to the “main page” preset, this shopping worlds acts as a perfect introduction to a category. Here large images dominate the screen and are complemented by tasteful item teasers.',
                'locale' => 'en_GB',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getPresetData()
    {
        $json = SwagEmotionPresets::getJsonData('Homepage.json');

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
