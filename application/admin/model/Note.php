<?php

namespace app\admin\model;

use \think\Model;
use traits\model\SoftDelete;

class Note extends Model
{
	//关联user表
	public function user()
	{
		//第二个外键为当前vcomment表里面的字段
		return $this->belongsTo('user','uid');
	}

	//关联视频表
	public function video()
	{
		return $this->belongsTo('video','vid');
	}

	//时间自动完成
	protected $autoWriteTimestamp = true;

	//软删除
	use SoftDelete;
	protected static $deleteTime = 'delete_time';

}
