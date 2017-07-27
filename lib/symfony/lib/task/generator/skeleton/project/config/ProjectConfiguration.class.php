<?php
require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once ##SYMFONY_CORE_AUTOLOAD##;
    sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{

    public function setup()
    {

        sfConfig::set('sf_phing_path', sfConfig::get('sf_root_dir') . '/vendor/phing/phing');
        sfConfig::set('sf_propel_path', sfConfig::get('sf_root_dir') . '/vendor/propel/propel1');
    }
}
