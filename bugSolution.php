This improved version explicitly checks if the number of bytes written is greater than 0.  If not, it logs an error and returns `false`, providing accurate feedback about the file writing operation.

```php
<?php
function writeToFile(string $filename, string $content): bool {
    $bytesWritten = file_put_contents($filename, $content);
    if ($bytesWritten === false || $bytesWritten === 0) {
        error_log("Failed to write to file: " . $filename);
        return false;
    }
    return true;
}
?>
```