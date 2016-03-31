<?php
namespace Craft;

class FileGetContentsVariable
{
    public function getContents($url)
    {
        return file_get_contents($url);
    }

    public function getCwd(){
      return getcwd();
    }

}
