<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
	public function index()
	{
		$this->display();
	}
	public function about()
	{
		$this->display('About:index');
	}

	public
	function _empty($name)
	{
		//把所有城市的操作解析到city方法
		$this->show($name);
	}
}