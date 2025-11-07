<?php 
namespace Axproo\LangLib;

class Installer
{
    public static function install(): void
    {
        $source = __DIR__ . '/Language';
        $destination = getcwd() . '/app/Language';

        echo "Installing Axproo Language Library...\n";

        if (!is_dir($source)) {
            echo "Source folder not found: $source\n";
            exit(1);
        }

        if (!is_dir($destination)) {
            mkdir($destination, 0755, true);
        }
        
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        $baseLength = strlen($source) + 1;

        foreach ($iterator as $item) {
            $relativePath = substr($item->getPathname(), $baseLength);
            $targetPath = $destination . DIRECTORY_SEPARATOR . $relativePath;

            if ($item->isDir()) {
                if (!is_dir($targetPath)) {
                    mkdir($targetPath, 0755, true);
                }
            } else {
                if (!file_exists($targetPath)) {
                    copy($item->getPathname(), $targetPath);
                    echo "Copied: $relativePath\n";
                } else {
                    echo "Skipped (exists): $relativePath\n";
                }
            }
        }

        echo "Language files installed successfully in app/Language/\n\n";
    }
}