<?php

namespace WebPT\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class PublicFolderInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new PublicFolderInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}