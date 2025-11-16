<?php 

namespace Axproo\LangLib\Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /**
     * Default Locale
     * @var string
     */
    public string $defaultLocale = 'en';

    /**
     * Negotiate Locale
     * @var bool
     */
    public bool $negotiateLocale = true;

    /**
     * Supported Locales
     * @var array
     */
    public array $supportedLocales = ['en','fr'];

    /**
     * Application Timezone
     * @var string
     */
    public string $appTimezone = 'Europe/Paris';

    /**
     * Default Character Set
     * @var string
     */
    public string $charset = 'UTF-8';
}