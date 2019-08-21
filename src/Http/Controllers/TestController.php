<?php


namespace Jihan\JunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index()
    {
        return '这是测试junit 的一个测试 测试目标';
    }
}

?>