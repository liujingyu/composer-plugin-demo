<?php

namespace phpDocumentor\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class TemplateInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 23);
        if ('liujingyu/template-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install template, liujingyu templates '
                .'should always start their package name with '
                .'"liujingyu/template-"'
            );
        }

        return 'data/templates/'.substr($package->getPrettyName(), 23);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'liujingyu-template' === $packageType;
    }
}
