<?php

/**
 * The name of the controller is based on the path (home) and the
 * namespace (clientconfig). This home controller is the main client view.
 */
class ClientConfigAdminManagerController extends ClientConfigManagerController {
    /**
     * Any specific processing we need on the Admin controller.
     * @param array $scriptProperties
     */
    public function process(array $scriptProperties = array()) {

    }

    /**
     * The pagetitle to put in the <title> attribute.
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('clientconfig.adminpanel');
    }

    /**
     * Register all the needed javascript files. Using this method, it will automagically
     * combine and compress them if enabled in system settings.
     */
    public function loadCustomCssJs() {
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/grid.groups.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/grid.settings.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/window.groups.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/window.settings.js');
        $this->addJavascript($this->clientconfig->config['jsUrl'].'mgr/widgets/combos.js');

        $this->addLastJavascript($this->clientconfig->config['jsUrl'].'mgr/sections/admin.js');
    }

    /**
     * The name for the template file to load.
     * @return string
     */
    public function getTemplateFile() {
        return $this->clientconfig->config['templatesPath'].'home.tpl';
    }
}
