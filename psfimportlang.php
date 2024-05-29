<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class PsfImportLang extends Module
{
    public function __construct()
    {
        $this->name = 'psfimportlang';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'PrestaSafe';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('PSF Import Language Module');
        $this->description = $this->l('Imports additional languages to your PrestaShop store.');

    }

    public function install()
    {


        return parent::install() ;
    }

    public function uninstall()
    {
        return parent::uninstall();
    }


}
