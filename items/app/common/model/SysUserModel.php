<?php
namespace app\common\model;

use think\Model;

class SysUserModel extends Model
{
	//表名
	protected $table = 'sys_user';
	//主键
	protected $pk = 'id';
	//模型数据不区分大小写
	protected $strict = false;
}
