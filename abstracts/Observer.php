<?php
/*说明：
* 模式接口类
*/

interface Observer{

	/*函数说明：
	* 模式设置
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function setting($condition = []);
	/*函数说明：
	* 模式所有涉及到的计算
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function cal($condition = []);
	/*函数说明：
	* 模式所有涉及到sql语句
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function sql($condition = []);
	/*函数说明：
	* 模式所有涉及到表操作：入库等，用于事件回调
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function update($condition = []);//这里就是在事件发生后要执行的逻辑

	/*函数说明：
	* 模式额外的操作
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function extend($condition = []);

	/*函数说明：
	* 模式主函数
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function mian($condition = []);

	/*函数说明：
	* 模式异步回调函数
	* @$condition：参数
	* @return：返回给自身对象：$this
	*/
	function notity($condition = []);

}
//一个实现了EventGenerator抽象类的类，用于具体定义某个发生的事件
