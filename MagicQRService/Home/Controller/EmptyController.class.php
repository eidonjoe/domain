<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	public function index(){
		//根据当前控制器名来判断要执行那个城市的操作
		$qrCode = CONTROLLER_NAME;
	    $this->routeByQrCode($qrCode);	
	}
	//注意 city方法 本身是 protected 方法
	
	public function routeByQrCode($qr_code){//凭据码检测方法
		$label = D('label');//实例化标签索引表
		$result = $label ->where("check_code = '%s'",$qr_code)->find();//检查标签凭据码是否存在
		if (!empty($result)) {//标签凭据码存在
			$rand_code = $result['rand_code'];//获取标签凭据码
			$type_code = substr($rand_code,0,1);//字符串分割,将标签类型分割
			switch ($type_code) {//判断类型,实例化不同的模型
					case 'I':
					$image = D('image');
					$label = D('label');//实例化标签索引表
					$address = D('address');
					$find_image = $image->where("rand_code = '%s'",$rand_code)->select();//从image表中获取信息
					$explode_add = explode('+',$find_image[0]['address']);
					$count = count($explode_add);
					$find_label = $label->where("rand_code = '%s'",$rand_code)->select();//从label表中获取信息
					$find_address = $address->where("rand_code = '%s'",$rand_code)->select();
					for ($i=0; $i <$count-1 ; $i++) { 
						$image_address[$i]['address'] = $explode_add[$i];
					}
					$state = $find_image[0]['state'];//获取状态值,1为未使用,2为已使用
					$this->assign('label',$find_label);
					$this ->assign('address',$image_address);
					if ($state == 1) {
						$this->display('Index:index');
					}
					else{
						$this->display('Index:image');
					}
					
					break;
				case 'M':
					$movie = D('movie');
					$label = D('label');//实例化标签索引表					
					$find_movie = $movie->where("rand_code = '%s'",$rand_code)->select();//从movie表中获取信息
					$find_label = $label->where("rand_code = '%s'",$rand_code)->select();//从label表中获取信息
					$state = $find_movie[0]['state'];//获取状态值,1为未使用,2为已使用
					$num = strlen($find_movie[0]['address']);
					$find_movie[0]['address'] = substr($find_movie[0]['address'],0,$num-1);
					$this->assign('label',$find_label);
					$this ->assign('movie',$find_movie);
					if ($state == 1) {
						$this->display('Index:index');
					}
					else{
						$this->display('Index:movie');
					}
                    break;
				case 'V':
					$voice = D('voice');
					$label = D('label');//实例化标签索引表					
					$find_voice = $voice->where("rand_code = '%s'",$rand_code)->select();//从voice表中获取信息
					$find_label = $label->where("rand_code = '%s'",$rand_code)->select();//从label表中获取信息
					$state = $find_voice[0]['state'];//获取状态值,1为未使用,2为已使用
					$num = strlen($find_voice[0]['address']);
					$find_voice[0]['address'] = substr($find_voice[0]['address'],0,$num-1);
					$this->assign('label',$find_label);
					$this ->assign('voice',$find_voice);
					if ($state == 1) {
						$this->display('Index:index');
					}
					else{
						$this->display('Index:voice');
					}
                    
                    break;
				case 'F':
					$function = D('function');
					$state = $function->where("rand_code = '%s'",$rand_code)->getField('state');
					$this->tempShow();
					break;
				case 'L':
					$limit = D('limit');
					$state = $function->where("rand_code = '%s'",$rand_code)->getField('state');
					$this->tempShow();
					break;
				default:
					break;
			}
		}else{
				$this->tempShow();
				//echo "Data not exist";
			}
    }
	public function tempShow(){
		$this->display('Index:index');
	}

}