<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Forms;

use Nette\Http\FileUpload;
use Nette\Object;

/**
 * Description of UploadManager
 *
 * @author Stanislav
 * 
 * @method UploadManager setWwwDir(string $wwwDir)
 * @method UploadManager setPath(string $path)
 */
class UploadManager extends Object {

    /** @var string */
    private $wwwDir;

    /** @var string */
    private $path;

    /** @var array */
    private $disableExtension = ['php'];

    function __construct($wwwDir, $path) {
        $this->wwwDir = $wwwDir;
        $this->path = $path;
    }

    public function save(FileUpload $upload) {
        $image = $this->saveFile($upload);
        return $image ? $image : NULL;
    }
    
    protected function saveFile(FileUpload $upload) {
        if($upload->ok) {
            $pathinfo = pathinfo($upload->name);
            $extension = in_array($pathinfo['extension'], $this->disableExtension) ? 'txt' : $pathinfo['extension'];
            $file = $this->path . '/' . $upload->name . '.' . $extension;
            $upload->move($this->wwwDir . '/' . $file);
            return ['name'=>$upload->name, 'src' => $file];
        }
        return NULL;
    }

}
