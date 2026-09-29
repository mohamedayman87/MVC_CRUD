<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__));
define("APP",ROOT_PATH.DS.'app'.DS);
define("CORE",APP.'Core'.DS);
define("CONFIG",APP.'Config'.DS);
define("CONTROLLERS",APP.'Controllers'.DS);
define("MODELS",APP.'Models'.DS);
define("VIEWS",APP.'Views'.DS);
define("LIBS",APP.'Libs'.DS);
define("UPLOADS",ROOT_PATH."public".DS.'uploads'.DS);

require_once(CONFIG.'config.php');
require_once(CONFIG.'helpers.php');

$moduls = [ROOT_PATH,APP,CORE,CONTROLLERS,MODELS,CONFIG];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$moduls));
spl_autoload_register('spl_autoload');

new App();