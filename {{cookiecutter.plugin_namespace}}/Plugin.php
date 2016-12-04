<?php

namespace Kanboard\Plugin\{{ cookiecutter.plugin_namespace }};

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return '{{ cookiecutter.plugin_name }}';
    }

    public function getPluginDescription()
    {
        return t('{{ cookiecutter.plugin_description }}');
    }

    public function getPluginAuthor()
    {
        return '{{ cookiecutter.plugin_author }}';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return '{{ cookiecutter.plugin_homepage }}';
    }
}

