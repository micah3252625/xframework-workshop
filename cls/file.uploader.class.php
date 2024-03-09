<?php

class FileUploader
{
    private $targetDirectory;
    private $allowedFileTypes;
    private $maxFileSize;

    public function __construct($targetDirectory, $allowedFileTypes = array(), $maxFileSize = 1048576)
    {
        $this->targetDirectory = $targetDirectory;
        $this->allowedFileTypes = $allowedFileTypes;
        $this->maxFileSize = $maxFileSize;
    }

    public function generateUniqueFilname($file)
    {
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $hashedFileName = hash('sha256', uniqid() . time()) . '.' . $fileExtension;
        return $hashedFileName;
    }

    public function uploadFile($file)
    {
        $fileName = basename($file['name']);
        $targetFilePath = $this->targetDirectory . '/' . $fileName;
        $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Check if file type is allowed
        if (!empty($this->allowedFileTypes) && !in_array($fileType, $this->allowedFileTypes)) {
            return 'Invalid file type.';
        }

        // Check if file size exceeds the limit
        if ($file['size'] > $this->maxFileSize) {
            return 'File size exceeds the limit.';
        }

        // Validate file MIME type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $uploadedFileType = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($uploadedFileType, $this->allowedFileTypes)) {
            return 'Invalid file type.';
        }

        // Sanitize file name
        $sanitizedFileName = preg_replace("/[^A-Za-z0-9_\-\.]/", '', $fileName);

        // Generate a unique filename to prevent overwriting existing files
        $targetFilePath = $this->targetDirectory . '/' . uniqid() . '_' . $sanitizedFileName;

        // Move the file to the target directory
        if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            // Set appropriate file permissions (e.g., 0644)
            chmod($targetFilePath, 0644);
            return 'File uploaded successfully.';
        } else {
            return 'Failed to upload the file.';
        }
    }

    public function uploadFiles($files)
    {
        $uploadResults = array();

        foreach ($files['tmp_name'] as $index => $tmpName) {
            $file = array(
                'name' => $files['name'][$index],
                'type' => $files['type'][$index],
                'tmp_name' => $tmpName,
                'error' => $files['error'][$index],
                'size' => $files['size'][$index]
            );

            $uploadResults[$file['name']] = $this->uploadFile($file);
        }

        return $uploadResults;
    }
}
