<?php
namespace Files\Uploads;

class ImageUpload
{
    private array $_file;
    private array $_allowed_file_extensions = ['jpg', 'png'];
    private float $_max_size_mb = 0.5;

    public function __construct( array $file )
    {
        $this->_file = $file;
    }

    public function process_upload()
    {
        $file_name   = $this->_file["name"];
        $target_file = "uploads/" . $file_name;
        $temp_file   = $this->_file["tmp_name"];

        if ( file_exists( $target_file ) )
        {
            die("The file already exists");
        }

        if ( ! $this->file_extension_allowed( $file_name ))
        {
            die("The format is not correct. You may only upload: " . implode(", ", $this->_allowed_file_extensions));
        }

        if ( $this->check_max_file_size( $this->_file["size"] ))
        {
            die("The file size is too large. You may only upload up to: " . $this->_max_size_mb . "MB");
        }

        if ( getimagesize($temp_file) === false )
        {
            die("You must upload an image");
        }

        move_uploaded_file($temp_file, $target_file);

        echo "Your image was successfully uploaded.";
    }

    public function file_extension_allowed( string $file_name ): bool
    {
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);

        return in_array($extension, $this->_allowed_file_extensions);
    }

    public function check_max_file_size( $file_size ): bool
    {
        $max_size_bytes = $this->_max_size_mb * 1024 * 1024;

        return $file_size > $max_size_bytes;
    }
}