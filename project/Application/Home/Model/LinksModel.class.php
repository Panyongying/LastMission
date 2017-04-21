<?php
	namespace Home\Model;

	use Think\Model;

	class LinksModel extends Model
	{
		public function getAllLinks()
		{
			$res = M('links')->where('status = 1')->select();

			return $res;
		}
	}