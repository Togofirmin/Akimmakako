<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_provider.cancel_product_form_data_provider' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_provider.cancel_product_form_data_provider'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\CancelProductFormDataProvider(${($_ = isset($this->services['prestashop.core.query_bus']) ? $this->services['prestashop.core.query_bus'] : $this->load('getPrestashop_Core_QueryBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});