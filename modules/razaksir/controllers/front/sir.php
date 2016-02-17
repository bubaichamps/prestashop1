<?php
class razaksirSirModuleFrontController extends ModuleFrontController
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
		$this->display_column_left=false;
		$register=$this->context->cookie->register;
		$this->context->smarty->assign(array());
		
		
		
		
		
		
		
		
		$this->setTemplate('sir.tpl');
	}
	public function setMedia()
    {
        parent::setMedia();
        $this->addjQuery();
    }
}
