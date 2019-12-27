<?php
namespace Cyberduck\LaravelExcel\Factory;

use Illuminate\Support\Str;
use ReflectionClass;

class ExporterFactory
{
    public function make($type)
    {
        $type = Str::studly($type);
        $class = new ReflectionClass('Cyberduck\\LaravelExcel\\Exporter\\'.$type);
        return $class->newInstanceArgs(array());
    }
}
