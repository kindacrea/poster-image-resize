# Image Resizer

This PHP script resizes images to specified dimensions. It supports JPEG, PNG, GIF, and TIFF formats.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/kindacrea/image-resizer.git

2. Navigate to the project directory:

    ```bash
    cd image-resizer

## Usage

Include the ImageResizer class in your PHP script and create an instance with the required parameters. Here’s an example of resizing a poster:

 ```php
 <?php
 include 'ImageResizer.php';
 
 $source = 'path/to/poster.tiff'; // Path to the source poster image
 $destination = 'path/to/resized_poster.tiff'; // Path to save the resized image
 $newWidth = 600; // New width of the image
 $newHeight = 900; // New height of the image
 
 $resizer = new ImageResizer($source, $destination, $newWidth, $newHeight);
 $resizer->resize();
 ```
## Common Poster Sizes

| Size    | Dimensions (inches) |
|---------|----------------------|
| A5      | 5.8 x 8.3            |
| A4      | 8.3 x 11.7           |
| A3      | 11.7 x 16.5          |
| A2      | 16.5 x 23.4          |
| A1      | 23.4 x 33.1          |
| A0      | 33.1 x 46.8          |
| B5      | 6.9 x 9.8            |
| B4      | 9.8 x 13.9           |
| B3      | 13.9 x 19.7          |
| B2      | 19.7 x 27.8          |

## Additional Information

The script supports JPEG, PNG, GIF, and TIFF image formats.
Make sure the GD library is installed and enabled in your PHP configuration.

## Author

This script is maintained by <a href="https://unikplakat.dk">Unik Plakat</a>.
