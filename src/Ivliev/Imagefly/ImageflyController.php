<?php
namespace Ivliev\Imagefly;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ImageflyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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