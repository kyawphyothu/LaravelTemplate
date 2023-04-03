<?php

if (! function_exists('isSubmenu')) {
    function isSubmenu(array $urls) {
        foreach ($urls as $key => $value) {
            if (request()->is($value)) {
                return 'active';
            }
        }
        return '';
    }
}

if (! function_exists('isMainmenu')) {
    function isMainmenu(array $urls) {
        foreach ($urls as $key => $value) {
            if (request()->is($value)) {
                return 'menu-is-opening menu-open';
            }
        }
        return '';
    }
}
