<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.theme.exporter' shared service.

$this->services['prestashop.translation.theme.exporter'] = $instance = new \PrestaShopBundle\Translation\Exporter\ThemeExporter(${($_ = isset($this->services['prestashop.translation.theme_extractor']) ? $this->services['prestashop.translation.theme_extractor'] : $this->load('getPrestashop_Translation_ThemeExtractorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.translation.theme_provider']) ? $this->services['prestashop.translation.theme_provider'] : $this->load('getPrestashop_Translation_ThemeProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.addon.theme.repository']) ? $this->services['prestashop.core.addon.theme.repository'] : $this->load('getPrestashop_Core_Addon_Theme_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.translation.dumper.xliff']) ? $this->services['prestashop.translation.dumper.xliff'] : ($this->services['prestashop.translation.dumper.xliff'] = new \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.utils.zip_manager']) ? $this->services['prestashop.utils.zip_manager'] : ($this->services['prestashop.utils.zip_manager'] = new \PrestaShopBundle\Utils\ZipManager())) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});

$instance->cacheDir = $this->targetDirs[0];
$instance->setExportDir(($this->targetDirs[0].'/export'));

return $instance;
