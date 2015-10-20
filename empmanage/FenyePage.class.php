<?php
	//该类可以封装我们分页需要的各种信息
	class FenyePage{
		public $pagesize=6;
		public $res_array; //这是显示数据
		public $rowcount;  //这个需要 我们计算
		public $pageNow;   //这个是用户指定的
		public $pagecount; //这个也需要我们去计算
		public $navigate;  //这个是我们的导航页
		public $goToUrl;   //这个表示把分页请求提交给谁
	}