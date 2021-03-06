<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-添加新用户</title>
    <?php $this->load->view('view_keyword'); ?>
    
    <link href="<?=base_url().'assets/images/moa.ico' ?>" rel="shortcut icon">
    
    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/iCheck/custom.css' ?>" rel="stylesheet">
        
    <link href="<?=base_url().'assets/css/plugins/chosen/chosen.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/jasny/jasny-bootstrap.min.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/datepicker/datepicker3.css' ?>" rel="stylesheet">
        
    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/style.css?v=2.2.0' ?>" rel="stylesheet">

</head>

<body onload="startTime()">
    <div id="wrapper">
        <?php $this->load->view('view_nav'); ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php $this->load->view('view_header'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2 id="time"></h2>
                    <ol class="breadcrumb">
                        <li>
                            MOA
                        </li>
                        <li>
                        	用户管理
                        </li>
                        <li>
                            <strong>添加</strong>
                        </li>	
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>添加新用户</h5>
                            </div>
                            <div class="ibox-content">
                                <form role="form" id="form" class="form-horizontal m-t">
                                	
                                    <div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">姓名</label>
                                        <div class="col-sm-4">
                                            <input id="name" name="name" class="form-control" type="text" 
                                            placeholder="请输入真实姓名">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">职务</label>
                                        <div class="col-sm-4">
                                        	<select id="select_level" name="level" data-placeholder="请选择用户类型" class="chosen-select col-sm-12" tabindex="4">
                                        		<option value="-1">请选择用户类型</option>
                                        		<option value="0">普通助理</option>
                                        		<option value="1">组长</option>
                                        		<option value="2">负责人助理</option>
                                        		<option value="3">助理负责人</option>
                                        		<option value="4">管理员</option>
                                        		<option value="5">办公室负责人</option>
                                                <option value="-1">离职人员</option>
                                        	</select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group" id="radio_group">
	                                    <label class="col-sm-3 col-sm-offset-1 control-label">组别</label>
										<div class="col-sm-7">
										    <label class="radio-inline" style="font-size: 14px;">
										        <input type="radio" checked="" value="1" id="group_A" name="group_radio"> A 组</label>
										    <label class="radio-inline" style="font-size: 14px;">
										        <input type="radio" value="2" id="group_B" name="group_radio"> B 组</label>
										    <label class="radio-inline" style="font-size: 14px;">
										        <input type="radio" value="3" id="group_C" name="group_radio"> C 组</label>
										</div>
									</div>
                                    
                                    <div class="form-group" id="chosen_daily">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">常检课室</label>
                                        <div class="col-sm-4">
                                        	<select id="select_daily" name="classroom" data-placeholder="请选择常检课室" class="chosen-select col-sm-12" tabindex="4">
                                        		<option value="">请选择常检课室</option>
                                        		<?php for ($i = 0; $i < count($daily_classrooms); $i++) {?>
                                        			<option value="<?php echo $daily_classrooms[$i]; ?>"><?php echo str_replace(',', ' ', $daily_classrooms[$i]); ?></option>
                                        		<?php } ?>
                                        	</select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group"  id="chosen_weekly">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">周检课室</label>
                                        <div class="col-sm-4">
                                        	<select id="select_weekly" name="week_classroom" data-placeholder="请选择周检课室" class="chosen-select col-sm-12" tabindex="4">
                                        		<option value="">请选择周检课室</option>
                                        		<?php for ($i = 0; $i < count($weekly_classrooms); $i++) {?>
                                        			<option value="<?php echo $weekly_classrooms[$i]; ?>"><?php echo str_replace(',', ' ', $weekly_classrooms[$i]); ?></option>
                                        		<?php } ?>
                                        	</select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">用户名</label>
                                        <div class="col-sm-4">
                                            <input id="username" name="username" class="form-control" type="text" 
                                            placeholder="请输入用户名，如：mms_01">
                                        </div>
                                    </div>
                                    
                                	<div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">密码</label>
                                        <div class="col-sm-4">
                                            <input id="password" name="password" class="form-control" type="password" 
                                            placeholder="请设置密码(至少6位)">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">确认密码</label>
                                        <div class="col-sm-4">
                                            <input id="confirm_password" name="confirm_password" class="form-control" type="password" 
                                            placeholder="请再次输入密码">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group"  id="calendar_date">
	                                    <label class="col-sm-3 col-sm-offset-1 control-label">入职日期</label>
	                                    <div class="col-sm-4">
		                                    <div class="input-group date col-sm-12"
		                                    style="border-left: 1px solid #E5E6E7; border-right: 1px solid #E5E6E7;">
		                                        <input type="text" id="indate" name="indate" class="form-control input-group-addon" 
		                                        placeholder="请选择入职日期">
		                                    </div>
	                                    </div>
	                                </div>
                                
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-5">
                                            <button class="btn btn-primary" type="submit" id="submit_adduser" 
                                            data-toggle="modal" data-target="#myModal">添加</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('view_footer'); ?>

        </div>
    </div>

    </div>
    
    <?php $this->load->view('view_modal'); ?>

    <!-- Mainly scripts -->
    <script src="<?=base_url().'assets/js/jquery-2.1.1.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/bootstrap.min.js?v=3.4.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/slimscroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/adduser.js' ?>"></script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#active-userManagement").addClass("active");
			$("#active-addUser").addClass("active");
			$("#mini").attr("href", "addUser#");
		});
	</script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>
    
    <!-- Dynamic date -->
    <script src="<?=base_url().'assets/js/dynamicDate.js' ?>"></script>
    
    <!-- Jquery Validate -->
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/validate/jquery.validate.min.js' ?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/validate/messages_zh.min.js' ?>"></script>
    
    <!-- iCheck -->
    <script src="<?=base_url().'assets/js/plugins/iCheck/icheck.min.js' ?>"></script>
    
    <!-- Chosen -->
    <script src="<?=base_url().'assets/js/plugins/chosen/chosen.jquery.js' ?>"></script>

    <!-- JSKnob -->
    <script src="<?=base_url().'assets/js/plugins/jsKnob/jquery.knob.js' ?>"></script>

    <!-- Input Mask-->
    <script src="<?=base_url().'assets/js/plugins/jasny/jasny-bootstrap.min.js' ?>"></script>

    <!-- Date picker -->
    <script src="<?=base_url().'assets/js/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
    
    <script>
        $(document).ready(function () {
            // 默认隐藏组别、常检课室、周检课室
            $("#radio_group").hide();
            $("#chosen_daily").hide();
            $("#chosen_weekly").hide();

            // validate form on keyup and submit
            $("#form").validate({
                rules: {
                    password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    }
                },
                messages: {
                	password: {
                        required: "请输入您的新密码",
                        minlength: "密码必须6个字符以上"
                    },
                    confirm_password: {
                        required: "请再次输入新密码",
                        minlength: "密码必须6个字符以上",
                        equalTo: "两次输入的密码不一致"
                    }
                }
            });

            /* Radio */
            $('#group_A').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $('#group_B').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $('#group_C').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            

            /* Calendar */
            $('#calendar_date .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
            
        });

        /* Chosen */
        var config = {
                '.chosen-select': {
                	// 实现中间字符的模糊查询
                	search_contains: true,
                	no_results_text: "没有找到",
                	disable_search_threshold: 10
                },
                '.chosen-select-deselect': {
                    allow_single_deselect: true
                },
                '.chosen-select-no-single': {
                    disable_search_threshold: 10
                },
                '.chosen-select-no-results': {
                    no_results_text: 'Oops, nothing found!'
                },
                '.chosen-select-width': {
                    width: "95%"
                }
            }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
		
        
    </script>

</body>

</html>
