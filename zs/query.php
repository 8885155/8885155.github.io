<?php
!empty($_REQUEST['action']) ? $action = $_REQUEST['action'] : exit(json_encode(['code'=>202, "msg"=>"请输入网址"],JSON_UNESCAPED_UNICODE));
include_once 'lib/query.class.php';
include_once 'lib/config.php';
$outTradeNo = $_REQUEST['outTradeNo'];
$aliPay = new AlipayQuery();
$aliPay->setAppid($pay_config['appid']);
$aliPay->setRsaPrivateKey($pay_config['private_key']);
$aliPay->setOutTradeNo($outTradeNo);
$result = $aliPay->doQuery();
if($result['alipay_trade_query_response']['code']!='10000'){
		$value = array('code'=>202,'msg'=>$result['alipay_trade_query_response']['sub_msg']);
		/*
		$value = $result['alipay_trade_query_response']['msg'].'：'.$result['alipay_trade_query_response']['sub_code'].' '.$result['alipay_trade_query_response']['sub_msg'];
		*/
}else{
	switch($result['alipay_trade_query_response']['trade_status']){
		case 'WAIT_BUYER_PAY': $value = array('code'=>202,'msg'=>'等待买家付款'); break;
		case 'TRADE_CLOSED': $value = array('code'=>202,'msg'=>'未付款交易超时关闭');break;
		case 'TRADE_SUCCESS': $value = array('code'=>200,'msg'=>'支付成功'); break; 
		case 'TRADE_FINISHED': $value = array('code'=>202,'msg'=>'交易结束'); break;
		default: $value = array('code'=>202,'msg'=>'未知状态'); break;
	}
}
if($action == "query"){
	echo json_encode($value,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
}elseif($action == "out"){ if(!empty($value['code']== 200)):
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>支付结果</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
<style>
body{position:relative;overflow:hidden;margin:auto;width:400px;max-width:100%;background-color:#fff;font-size:16px;line-height:1.5;}
body,html{min-height:100%;}
*{margin:0;padding:0;}
*,:after,:before{box-sizing:border-box;}
button,input,select,textarea{outline:0;}
a{color:#333;text-decoration:none;}
.content{overflow:hidden;margin-top:25%;background-color:#fff;}
.message{overflow:hidden;padding:30px 0;border-bottom:1px solid #eee;}
.message .icon{z-index:1;display:block;margin:0 auto;width:65px;height:65px;background:url(data:image/png;base64,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) no-repeat;background-size:65px auto;-webkit-background-size:65px auto;}
.message h1{margin-top:15px;text-align:center;font-weight:400;font-size:20px;line-height:28px;}
.list{overflow:hidden;margin-bottom:15px;}
.list .item{position:relative;display:-webkit-flex;display:flex;padding:0 10px;min-height:52px;border-bottom:1px solid #fafafa;background:#fff;color:#333;-webkit-box-align:center;-webkit-align-items:center;}
.list .item .item-title{min-width:68px;}
.list .item .item-extra,.list .item .item-title{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;-webkit-box-flex:1;-webkit-flex:1;}
.list .item .item-extra{padding-left:10px;min-width:100px;color:#666;text-align:right;letter-spacing:.58px;font-size:16px;}
.button{overflow:hidden;padding:10px;}
.button button{position:relative;display:inline-block;padding:0 5px;width:100%;height:45px;border:0;border-radius:2px;background-color:#108ee9;color:#fff;text-align:center;font-size:18px;line-height:45px;cursor:pointer;}
</style>
</head>
<body>
<div class="content">
    <div class="message">
        <i class="icon"></i>
        <h1>支付成功</h1>
    </div>
    <div class="list">
        <div class="item">
            <div class="item-title">订单号</div>
			<div class="item-extra"><?php echo $outTradeNo;?></div>
		</div>
		<div class="item">
            <div class="item-title">支付金额</div>
			<div class="item-extra"><?php echo $_REQUEST['m']; ?>元</div>
		</div>
		<div class="item">
            <div class="item-title">支付方式</div>
			<div class="item-extra">扫码支付</div>
		</div>
    </div>
    <div class="button">
        <button class="close" onclick="window.location.href= './';">返回首页</button>
    </div>
</div>
</body>
</html>
<?php endif; }else{ echo 'error';}?>