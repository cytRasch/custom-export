<?php

namespace PluginCustomExportTutorial;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class CustomExportServiceProvider extends DataExchangeServiceProvider
{
	public function register()
	{
	}

	public function exports(ExportPresetContainer $container)
	{
		$container->add(
			'CustomExport',
            'PluginCustomExportTutorial\ResultField\CustomExport',
            'PluginCustomExportTutorial\Generator\CustomExport',
            '',
			true,
            true
		);
	}
}
