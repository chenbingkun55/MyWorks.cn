<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$work_account = M('account');

		$this->tdate = date("Y-m-d H:i");
		$this->username = $work_account->where("U_id=1" )->getField('U_name');

		$this->title = "个人网络工作室";
		$this->display();
    }
}