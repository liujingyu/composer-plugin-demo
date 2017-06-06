<?php

namespace phpDocumentor\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class TemplateInstallerPlugin implements PluginInterface
{
	public function activate(Composer $composer, IOInterface $io)
	{
		$installer = new TemplateInstaller($io, $composer);
		$composer->getInstallationManager()->addInstaller($installer);
	}

	public function getCapabilities()
	{
		return array(
			'Composer\Plugin\Capability\CommandProvider' => 'phpDocumentor\Composer\CommandProvider',
		);
	}
}
