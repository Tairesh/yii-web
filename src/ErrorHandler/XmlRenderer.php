<?php
namespace Yiisoft\Web\ErrorHandler;

class XmlRenderer implements ErrorRenderer
{
    public function render(\Throwable $e): string
    {
        return $e->getMessage();
    }
}
