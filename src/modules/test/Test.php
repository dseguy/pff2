<?php

namespace pff\modules;
use pff\Abs\AModule;

/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 05/10/12
 * Time: 11.39
 * To change this template use File | Settings | File Templates.
 */
class Test extends AModule {

    public function testOne($var) {
        return 'test '.$var;
    }

}
