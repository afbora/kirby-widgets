<?php

use Kirby\Cms\App as Kirby;
use Kirby\Toolkit\I18n;
use Kirby\Toolkit\Str;

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('afbora/kirby-widgets', [
    'sections' => [
        'widget' => [
            'props' => [
                'icon' => function (string $icon = null) {
                    return empty($icon) === false ? [
                        'type' => $icon,
                        'back' => 'black'
                    ] : null;
                },
                'default' => function (string $default = null) {
                    return $default;
                },
                'text' => function ($text = null) {
                    return I18n::translate($text, $text);
                },
                'query' => function ($query = null) {
                    return $query;
                },
                'before' => function ($before = null) {
                    return I18n::translate($before, $before);
                },
                'after' => function ($after = null) {
                    return I18n::translate($after, $after);
                }
            ],
            'computed' => [
                'value' => function () {
                    return empty($this->query) === false ? Str::query($this->query, [
                        'kirby' => $this->model()->kirby(),
                        'site' => $this->model()->site()
                    ]) : $this->default;
                },
                'width' => function () {
                    return empty($this->icon) === false ? '5/6' : '1/1';
                },
                'info' => function () {
                    $info = '';

                    if (empty($this->before) === false) {
                        $info .= '<span>' . $this->before . '</span>';
                    }

                    $info .= $this->value();

                    if (empty($this->after) === false) {
                        $info .= '<span>' . $this->after . '</span>';
                    }

                    return $info;
                }
            ],
            'methods' => []
        ]
    ]
]);
