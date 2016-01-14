<?php
namespace Ivliev\Imagefly;

use App\Http\Controllers\Controller;

class ImageflyController extends Controller
{

    /*
     * |--------------------------------------------------------------------------
     * | Imagefly Controller
     * |--------------------------------------------------------------------------
     * |
     * |
     */
    public function index($size, $file)
    {
        new \Ivliev\Imagefly\Imagefly();
    }
}