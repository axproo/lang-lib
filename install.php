<?php 

echo "Installing Axproo Language Library...\n";

$source = __DIR__ . '/src/Language';
$destination = getcwd() . '/app/Language';

if (!is_dir($source)) {
    echo "Source folder not found: $source\n";
    exit(1);
}

if (!is_dir($destination)) {
    mkdir($destination, 0755, true);
}

$dirIterator = new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($dirIterator, RecursiveIteratorIterator::SELF_FIRST);

foreach ($iterator as $item) {
    /** @var SplFileInfo $item */
    // @phpstan-ignore-next-line
    // @intelephense-ignore-next-line
    $subPath = $iterator->getSubPath(); // répertoire relatif
    $fileName = $item->getFilename();
    $targetDir = rtrim($destination . DIRECTORY_SEPARATOR . $subPath, DIRECTORY_SEPARATOR);
    $targetPath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

    if ($item->isDir()) {
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
    } else {
        if (!file_exists($targetPath)) {
            copy($item->getPathname(), $targetPath);
            echo "✅ Copied: " . ($subPath ? "$subPath/" : "") . "$fileName\n";
        } else {
            echo "⚠️ Skipped (exists): " . ($subPath ? "$subPath/" : "") . "$fileName\n";
        }
    }
}

echo "Language files installed successfully in app/Language/\n";