<?php
/*
 * @package   System - JBZoo YOOtheme Pro
 * @version   1.0
 * @author    Dmitriy Vasyukov - https://fictionlabs.ru
 * @copyright Copyright (c) 2021 Fictionlabs. All rights reserved.
 * @license   GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link      https://fictionlabs.ru/
 */

namespace YOOtheme\Builder\Joomla\JBZoo\Type;

class JBImageType
{
    /**
     * @return array
     */
    public static function config()
    {
        return [

            'fields' => [

                'value' => [
                    'type' => 'String',
                    'metadata' => [
                        'label' => 'Image',
                    ],
                ],

            ],

        ];
    }
}
