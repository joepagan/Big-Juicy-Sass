<?php
namespace Craft;

class FileGetContentsPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('File Get Contents');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'lexbi';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/lexbi';
    }
}
