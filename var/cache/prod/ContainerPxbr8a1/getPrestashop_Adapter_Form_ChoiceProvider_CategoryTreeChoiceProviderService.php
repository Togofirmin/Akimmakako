<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.form.choice_provider.category_tree_choice_provider' shared service.

return $this->services['prestashop.adapter.form.choice_provider.category_tree_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CategoryTreeChoiceProvider(${($_ = isset($this->services['prestashop.adapter.data_provider.category']) ? $this->services['prestashop.adapter.data_provider.category'] : $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.category']) ? $this->services['prestashop.adapter.data_provider.category'] : $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')) && false ?: '_'}->getRootCategory()->id, false);