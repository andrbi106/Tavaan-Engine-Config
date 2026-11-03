<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Config Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور config — همهٔ کلیدهای مستندشده در `docs/03-engines/config.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/config.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('CONFIG_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('CONFIG_PREFIX', 'config:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('CONFIG_LOG_CHANNEL', 'config'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];