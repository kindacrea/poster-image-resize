<?php
class ImageResizer
{
    private $source;
    private $destination;
    private $newWidth;
    private $newHeight;

    public function __construct($source, $destination, $newWidth, $newHeight) {
        $this->source = $source;
        $this->destination = $destination;
        $this->newWidth = $newWidth;
        $this->newHeight = $newHeight;
    }

    // Function to resize image
    public function resize() {
        // Get the original dimensions and image type
        list($width, $height, $type) = getimagesize($this->source);

        // Create a new blank image with new dimensions
        $resizedImage = imagecreatetruecolor($this->newWidth, $this->newHeight);

        // Create image resource from source
        switch ($type) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($this->source);
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($this->source);
                break;
            case IMAGETYPE_GIF:
                $sourceImage = imagecreatefromgif($this->source);
                break;
            case IMAGETYPE_TIFF_II:
            case IMAGETYPE_TIFF_MM:
                $sourceImage = imagecreatefromtiff($this->source);
                break;
            default:
                echo "Unsupported image type.";
                return false;
        }

        // Resize the image
        imagecopyresampled($resizedImage, $sourceImage, 0, 0, 0, 0, $this->newWidth, $this->newHeight, $width, $height);

        // Save the resized image
        switch ($type) {
            case IMAGETYPE_JPEG:
                imagejpeg($resizedImage, $this->destination, 90); // Adjust quality (0-100)
                break;
            case IMAGETYPE_PNG:
                imagepng($resizedImage, $this->destination);
                break;
            case IMAGETYPE_GIF:
                imagegif($resizedImage, $this->destination);
                break;
            case IMAGETYPE_TIFF_II:
            case IMAGETYPE_TIFF_MM:
                imageTIFF($resizedImage, $this->destination);
                break;
        }

        // Free memory
        imagedestroy($resizedImage);
        imagedestroy($sourceImage);

        echo "Image resized successfully!";
    }
}
