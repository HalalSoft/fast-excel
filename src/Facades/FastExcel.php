<?php

namespace HalalSoft\FastExcel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FastExcel.
 *
 * @method static \HalalSoft\FastExcel\FastExcel data($data)
 * @method static \Illuminate\Support\Collection import($path, callable $callback = null)
 * @method static string export($path, callable $callback = null)
 * @method static \Illuminate\Support\Collection importSheets($path, callable $callback = null)
 * @method static \HalalSoft\FastExcel\FastExcel configureCsv($delimiter = ',', $enclosure = '"', $encoding = 'UTF-8', $bom = false)
 * @method static \HalalSoft\FastExcel\FastExcel configureReaderUsing(?callable $callback = null)
 * @method static \HalalSoft\FastExcel\FastExcel configureWriterUsing(?callable $callback = null)
 *
 * @see \HalalSoft\FastExcel\FastExcel
 */
class FastExcel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fastexcel';
    }
}
