<div id="box">
<!-- 收货信息部分开始 -->
<div class="message">
	<li class="eli">收货信息</li>
	<ul>
	<li>
	<span class="star">*</span>选择地区：
	<select >
		<option value="">北京市 海淀区 五环内</option>
		<option value="">西安市 长安区 西安邮电大学</option>
		<option value="">西安市 雁塔区 五环内</option>
		<option value="">西安市 碑林区 三环内</option>
	
	</select>
	</li>
	<li>
	<span class="star">*</span>详细地址：
	<input type="text">
	</li>
	<li>
	<span class="star">*</span> 收 货 人：
	<input type="text" >
	</li>
	<li>
	<span class="star">*</span>  手 机 ： &nbsp;&nbsp;
	<input type="text" />或固定电话：<input type="text" value="区号" >-<input type="text" value="电话号码" >-<input type="text" value="分机号（可选）" >
	</li>
	<li ><a href="#"><img  class="spimg" src="images/sure.png" height="28" width="114" alt=""></a></li>
	</ul>
</div>
<!-- 收货信息部分结束 -->


<!-- 支付方式部分开始 -->
<div class="message">
	<li class="eli">支付方式</li>
	<ul>
	<li>
	<input type="radio" name="money">&nbsp;微信支付<img src="images/weixin.png" height="20" width="31" alt=""><span>用微信扫一扫就能支付！</span>
	</li>
	<li>
	<input type="radio" name="money">&nbsp;货到付款<span>送货上门后再付款，使用现金或刷银行卡。</span>
	</li>
	
	</ul>
</div>
<!-- 支付方式部分结束 -->

<!-- 发票信息部分开始 -->
<div class="message">
	<li class="eli">发票信息</li>
	<ul>
	<li>
	<input type="checkbox" name="" value="">需要发票
	</li>
	<li>
	<span class="star">*</span>发票类型：
	<select >
		<option value="">商业零售发票</option>
		<option value="">增值税专用发票</option>
		<option value="">增值税普通发票</option>
	</select>
	</li>
	<li>
	<span class="star">*</span>发票抬头：
	<select >
		<option value="">个人</option>
		<option value="">企业</option>
		<option value="">其他</option>
	</select>
	<input type="text" value="阿斯顿">
	</li>
	<li ><a href="#"><img src="images/save.png" height="24" width="65"  class="spimg"></a><a href="#"><img src="images/cancel.png" height="24" width="65"  class="spimg"></a></li>
	</ul>
</div>
<!-- 发票信息部分结束-->

<!-- 送货清单部分开始-->
<div class="message">
	<li class="eli">送货清单<a href="detailed.php" id="bb">返回购物车修改</a></li>
	<ul>
	<li class="lb">
		<ul id="flt">
			<li id="pli">商品名称</li>
			<li>单价</li>
			<li>返现</li>
			<li>数量</li>
			<li>小计</li>
		</ul>
	</li>
	<li id="come"></li>
	<li>
		<label class="sll">如有要求请留言备注<input type="text/submit/hidden/button/etc" id="siii" value=""></label>
	</li>
	</ul>
</div>
<!-- 送货清单部分结束 -->

<!-- 订单结算部分开始 -->
<div class="message">
	<li class="eli">订单结算</li>
	<ul>
	<li>
	<span class="big">共计：<span id="mmy"></span></span>
	</li>
	<li ><a href="#"><img  class="tjdd" src="images/tjdd.png" alt=""></a></li>
	</ul>
</div>
<!-- 订单结算部分结束 -->
</div>