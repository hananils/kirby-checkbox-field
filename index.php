<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('hananils/checkbox-field', [
    'fields' => [
        /**
         * Displays a single checkbox in the panel.
         */
        'checkbox' => [
            'extends' => 'toggle',
            'props' => [
                'after' => null,
                'before' => null,
                'icon' => null,
                'placeholder' => null,
                'text' => null,
                'help' => null,
                /**
                 * Sets the info text next to the checkbox label.
                 */
                'info' => function ($info = null) {
                    return $this->info = $info;
                }
            ],
            'computed' => [
                'checked' => function () {
                    return $this->toBool($this->value);
                }
            ]
        ]
    ]
]);
