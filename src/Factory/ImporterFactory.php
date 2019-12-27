<?php
namespace Cyberduck\LaravelExcel\Factory;

use Illuminate\Support\Str;
use ReflectionClass;

class ImporterFactory
{
    public function make($type)
    {
        $type = Str::studly($type);
        $class = new ReflectionClass('Cyberduck\\LaravelExcel\\Importer\\'.$type);
        return $class->newInstanceArgs(array());
    }
}
