<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/style/style.css" />
	<script src="/Public/Admin/js/jquery.min.js"></script>
	<script src="/Public/Admin/js/echarts.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
	<style>
		/*
		* main
		*/

		body::-webkit-scrollbar {
			display: none
		}


		.main {
			width: 100%;
			min-height: 900px;
			background: #f4f8f9;
			padding-top: 30px;
		}

		.main .box_top {
			width: 93%;
			margin: 0 auto;
			padding: 30px;
			background: #FFF;
			display: flex;
			justify-content: space-between;
		}

		.main .box_top h1 {
			font-size: 22px;
			margin: 5% 0 0 50%;
			color: #FFF;
		}

		.main .box_top .item1 {
			width: 24%;
			padding: 2% 0 3.4% 0;
			background: url('/Public/Admin/images/item1_bg.png') no-repeat;
			background-size: cover;
		}

		.main .box_top .item2 {
			width: 24%;
			padding: 2% 0 3.4% 0;
			background: url('/Public/Admin/images/item2_bg.png') no-repeat;
			background-size: cover;
		}

		.main .box_top .item3 {
			width: 24%;
			padding: 2% 0 3.4% 0;
			background: url('/Public/Admin/images/item3_bg.png') no-repeat;
			background-size: cover;
		}

		.main .box_top .item4 {
			width: 24%;
			padding: 2% 0 3.4% 0;
			background: url('/Public/Admin/images/item4_bg.png') no-repeat;
			background-size: cover;
		}

		.main .box_bottom {
			width: 96.5%;
			margin: 2% auto;
			display: flex;
			justify-content: space-between;
		}

		.main .box_bottom .item1 {
			width: 46%;
			min-height: 560px;
			padding-top: 20px;
			background: #FFF;
		}

		.main .box_bottom .item2 {
			width: 23%;
			min-height: 580px;
			background: #FFF;
			overflow: hidden;
		}

		.main .box_bottom .item2 li {
			list-style-type: none;
			width: 100%;
			padding: 10% 0 20% 20%;
			border-bottom: 1px solid #f1f5f8;
		}

		.main .box_bottom .item2 li:first-child {
			background-image: url('/Public/Admin/images/li1_icon.png');
			background-repeat: no-repeat;
			background-position: 70% 56%;
		}

		.main .box_bottom .item2 li:nth-child(2) {
			background-image: url('/Public/Admin/images/li2_icon.png');
			background-repeat: no-repeat;
			background-position: 70% 56%;
		}

		.main .box_bottom .item2 li:last-child {
			background-image: url('/Public/Admin/images/li3_icon.png');
			background-repeat: no-repeat;
			background-position: 70% 56%;
		}

		.main .box_bottom .item2 li h1 {
			font-size: 18px;
			color: #666666;
			margin: 5% auto;
		}

		.main .box_bottom .item2 li span {
			font-size: 34px;
		}

		.main .box_bottom .item2 li:first-child span {
			color: #f98d80;
		}

		.main .box_bottom .item2 li:nth-child(2) span {
			color: #12a6ff;
		}

		.main .box_bottom .item2 li:last-child span {
			color: #05c9a8;
		}

		.main .box_bottom .item3 {
			width: 27%;
			min-height: 580px;
		}

		.main .box_bottom .item3 .row {
			width: 100%;
			height: 48%;
		}

		.main .box_bottom .item3 .row:first-child {
			margin-bottom: 5%;
		}

		.main .box_bottom .item3 .row .col {
			width: 48%;
			background: #FFF;
			float: left;
			text-align: center;
			padding: 10% 0 13% 0;
		}

		.main .box_bottom .item3 .row .col h2 {
			font-size: 18px;
			color: #333333;
		}

		.main .box_bottom .item3 .row .col h1 {
			font-size: 50px;
			margin: 25% 0 30% 0;
		}

		.main .box_bottom .item3 .row:first-child .col:first-child h1 {
			color: #12a6ff;
		}

		.main .box_bottom .item3 .row:first-child .col:last-child h1 {
			color: #6474db;
		}

		.main .box_bottom .item3 .row:last-child .col:first-child h1 {
			color: #05c9a8;
		}

		.main .box_bottom .item3 .row:last-child .col:last-child h1 {
			color: #f98f83;
		}

		.main .box_bottom .item3 .row .col a {
			font-size: 18px;
			color: #333333;
			padding: 5% 15%;
			background: url('/Public/Admin/images/show_bg.png') no-repeat;
			background-size: cover;
			text-decoration: none;
		}

		.main .box_bottom .item3 .row .col:first-child {
			margin-right: 4%;
		}

		.main .box_bottom .item3 .row:first-child .col:first-child {
			border-top: 5px solid #12a6ff;
			border-radius: 5px 5px 0 0;
		}

		.main .box_bottom .item3 .row:first-child .col:last-child {
			border-top: 5px solid #6474db;
			border-radius: 5px 5px 0 0;
		}

		.main .box_bottom .item3 .row:last-child .col:first-child {
			border-top: 5px solid #05c9a8;
			border-radius: 5px 5px 0 0;
		}

		.main .box_bottom .item3 .row:last-child .col:last-child {
			border-top: 5px solid #f98f83;
			border-radius: 5px 5px 0 0;
		}
	</style>
</head>

<body>
	<div class="main">
		<div class="box_top">
			<div class="item1">
				<h1>推广人数</h1>
				<h1><?php echo ($data["seller_union"]); ?></h1>
			</div>
			<div class="item2">
				<h1>发布任务数</h1>
				<h1><?php echo ($data["seller_task"]); ?></h1>
			</div>
			<div class="item3">
				<h1>任务总金额</h1>
				<h1><?php echo ($data["task_price"]); ?>￥</h1>
			</div>
			<div class="item4">
				<h1>任务均价</h1>
				<h1><?php echo ($data["task_equally"]); ?>￥</h1>
			</div>
		</div>
		<div class="box_bottom">
			<div class="item1" id="myChart"></div>
			<div class="item2">
				<ul>
					<li>
						<h1>会员充值总金额</h1>
						<span><?php echo ($data["seller_recharge"]); ?>￥</span>
					</li>
					<li>
						<h1>会员消费总金额</h1>
						<span><?php echo ($data["seller_consume"]); ?>￥</span>
					</li>
					<li>
						<h1>会员可用总金额</h1>
						<span><?php echo ($data["seller_money"]); ?>￥</span>
					</li>
				</ul>
			</div>
			<div class="item3">
				<div class="row">
					<div class="col">
						<h2>文档列表</h2>
						<h1><?php echo ($data["article"]); ?></h1>
						<a href="<?php echo U('Article/show');?>">查看文档</a>
					</div>
					<div class="col">
						<h2>注册会员</h2>
						<h1><?php echo ($data["seller_sum"]); ?></h1>
						<a href="<?php echo U('Seller/ushow');?>">查看会员</a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h2>充值记录</h2>
						<h1><?php echo ($data["seller_recharge_sum"]); ?></h1>
						<a href="<?php echo U('Pay/record');?>">查看记录</a>
					</div>
					<div class="col">
						<h2>任务记录</h2>
						<h1><?php echo ($data["seller_task"]); ?></h1>
						<a href="<?php echo U('Seller/exlist');?>">查看记录</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var myChart = echarts.init(document.getElementById('myChart'));
		var option = {
			title: {
				// text: '未来一周气温变化',
				// subtext: '纯属虚构'
			},
			tooltip: {
				trigger: 'axis'
			},
			legend: {
				data: ['任务统计', '金融统计']
			},
			toolbox: {
				show: true,
				feature: {
					dataZoom: {
						yAxisIndex: 'none'
					},

				}
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ["<?php echo ($task[6]['date']); ?>", "<?php echo ($task[5]['date']); ?>", "<?php echo ($task[4]['date']); ?>", "<?php echo ($task[3]['date']); ?>", "<?php echo ($task[2]['date']); ?>", "<?php echo ($task[1]['date']); ?>", "<?php echo ($task[0]['date']); ?>"]
			},
			yAxis: {
				type: 'value',
				axisLabel: {
					formatter: '{value}'
				}
			},
			series: [
				{
					name: '任务统计',
					type: 'line',
					data: ['<?php echo ($task[6]['num']); ?>', '<?php echo ($task[5]['num']); ?>', '<?php echo ($task[4]['num']); ?>', '<?php echo ($task[3]['num']); ?>', '<?php echo ($task[2]['num']); ?>', '<?php echo ($task[1]['num']); ?>', '<?php echo ($task[0]['num']); ?>'],
					markPoint: {
						itemStyle: {
							normal: {
								color: '#12a6ff',
							}
						},
						data: [
							{ type: 'max', name: '最大值' },
							{ type: 'min', name: '最小值' }
						]
					},
					markLine: {
						data: [
							{ type: 'average', name: '平均值' }
						]
					},
					itemStyle: {
						normal: {
							lineStyle: {
								color: '#12a6ff'
							},
							color: '#12a6ff'
						}
					},
				},
				{
					name: '金融统计',
					type: 'line',
					data: ['<?php echo ($task[6]['money']); ?>', '<?php echo ($task[5]['money']); ?>', '<?php echo ($task[4]['money']); ?>', '<?php echo ($task[3]['money']); ?>', '<?php echo ($task[2]['money']); ?>', '<?php echo ($task[1]['money']); ?>', '<?php echo ($task[0]['money']); ?>'],
					markPoint: {
						itemStyle: {
							normal: {
								color: '#05c9a8',
							}
						},
						data: [
							{ type: 'max', name: '最大值' },
							{ type: 'min', name: '最小值' }
						]
					},
					markLine: {
						data: [
							{ type: 'average', name: '平均值' }
						]
					},
					itemStyle: {
						normal: {
							lineStyle: {
								color: '#05c9a8'
							},
							color: '#05c9a8'
						}
					},
				}
			]
		};
		myChart.setOption(option);
	</script>
</body>

</html>