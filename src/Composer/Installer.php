<?php

namespace WebPT\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class PublicFolderInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        $packageName = $package->getPrettyName();
        return 'public/shared';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'public-folder' === $packageType;
    }
}