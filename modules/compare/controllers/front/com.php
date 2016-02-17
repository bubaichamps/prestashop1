<?php

class comparecomModuleFrontController extends ModuleFrontController
{
	public $ssl = true;
 
	public function __construct()
	{
		parent::__construct();
		$this->context = Context::getContext();
	}
	
	public function initContent()
	{
		parent::initContent();
		$my=10;
		$this->context->smarty->assign('variable', $my);
		$this->setTemplate('com.tpl');
	}
	public function setMedia()
    {
        parent::setMedia();
        $this->addjQuery();
    }
}