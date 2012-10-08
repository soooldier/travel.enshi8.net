<?php
/**
 * BaseAction
 * @author soooldier@live.com
 * @version $Id$
 */
class BaseAction extends Action {

    /**
     * @ignore
     */
    public function _initialize() {
        $this->checkRbac();
    }

    protected function checkRbac() {
        echo __FUNCTION__;
    }
}