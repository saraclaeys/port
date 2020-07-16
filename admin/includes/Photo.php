<?php


class Photo extends Db_object
{
    protected static $db_table = "images";
    protected static $db_table_fields = array('title', 'type', 'alt', 'size', 'path', 'name');

    public $id;
    public $title;
    public $type;
    public $alt;
    public $size;
    public $path;
    public $name;

    public $tmp_path;
    public $upload_directory = 'images';

    public function set_file($file)
    {
        if (empty($file) || !$file || is_array($file)) {
            $this->errors[] = "No file uploaded";
            return false;
        } elseif ($file['error'] != 0) {
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        } else {
            $this->name = basename($file['name']);
            $this->tmp_path = $file['tmp_path'];
            $this->type = $file['type'];
            $this->size = $file['size'];
        }
    }

    public function save()
    {
        if ($this->id) {
            $this->update();
        } else {
            if (!empty($this->errors)) {
                return false;
            }
            if (empty($this->name) || empty($this->temp_path)) {
                $this->errors[] = "File not available";
                return false;
            }
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->name;

            if (file_exists($target_path)) {
                $this->errors[] = "File {$this->name} exists";
                return false;
            }

            if (move_uploaded_file($this->tmp_path, $target_path)) {
                if ($this->create()) {
                    unset($this->tmp_path);
                    return true;
                }
            } else {
                $this->errors[] = "This folder has no write rights";
                return false;
            }
        }

    }

    public function picture_path()
    {
        return $this->upload_directory . DS . $this->name;
    }

    public function delete_photo()
    {
        if ($this->delete()) {
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->picture_path();
            return unlink($target_path) ? true : false;
        } else {
            return false;
        }
    }

}