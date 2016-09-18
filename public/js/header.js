
function online_tel(){
	$('#tel_detail').fadeIn(1000);
	//$('#qq').css('display','none');
	//$('#tel').css('display','none');
}

function close_tel(){
	$('#tel_detail').css('display','none');
	$('#detail_tel1').css('display','block');
	$('#detail_tel2').css('display','none');
}
function sendemail(strurl,strpost) //定义函数
{
    var xmlHttp
    //接收表单的URL地址
    var url="./"+strurl;
    //浏览器兼容识别
             var ajax = false;
            //开始初始化XMLHttpRequest对象
            if(window.XMLHttpRequest) { //Mozilla 浏览器
                    ajax = new XMLHttpRequest();
                    if (ajax.overrideMimeType) {//设置MiME类别
                            ajax.overrideMimeType("text/xml");
                    }
            }
            else if (window.ActiveXObject) { // IE浏览器
                    try {
                            ajax = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                            try {
                                    ajax = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {}
                    }
            }
            if (!ajax) { // 异常，创建对象实例失败
                    window.alert("不能创建XMLHttpRequest对象实例.");
                    return false;
            }
//通过Post方式打开连接
ajax.open("POST",url,true);

//定义传输的文件HTTP头信息
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//发送POST数据
ajax.send(strpost);

//获取执行状态
ajax.onreadystatechange = function() {
      //如果执行状态成功，那么就把返回信息写到指定的层里
      if (ajax.readyState == 4 && ajax.status == 200) {
		  document.getElementById('detail_tel1').style.display="none";
		  document.getElementById('detail_tel2').style.display="";
		  document.getElementById("phone").value="";
		 document.getElementById("nick").value="";
		 $('#phone').css('border','1px solid #bcbcbc');
		 setTimeout('close_tel()',2000);

      }
}
}
function submit_tel_info(tag){
	//var test=/^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;
	if($('#nick').val().replace(/\s/g,'').length==0){
		$('#nick').css('border','1px solid red');
		return;
	}
	var test1=/^1[3|4|5|8][0-9]\d{4,8}$/;
	if($('#phone').val()==''||$('#phone').val().replace(/[ ]/g,"")==''){
		$('#phone').css('border','1px solid red');
	}else{
		if(test1.test($('#phone').val())){
		var strurl=tag+"sendemail.php";
       var strpost="user_name="+$('#nick').val()+"&user_company="+''+"&user_email="+''+"&user_mobile="+$('#phone').val()+"&user_suggestion="+''+"&type="+''+"&contect="+''+"&mobile_code="+'';
       sendemail(strurl,strpost);
		}else{
		 $('#phone').css('border','1px solid red');
		}
	}
}

function xs_vcode(tag){
	document.getElementById('wx_vcode').style.display="";
	document.getElementById('wx_img').src=tag+"images/f_wx_on.png";
}

function yc_vcode(tag){
	document.getElementById('wx_vcode').style.display="none";
	document.getElementById('wx_img').src=tag+"images/f_wx.png";
}
function xz_shareways(tag){
	document.getElementById('share_ways').style.display="";
	document.getElementById('share_ways_img').src=tag+"images/f_share_on.png";
}

function qx_shareways(tag){
	document.getElementById('share_ways').style.display="none";
	document.getElementById('share_ways_img').src=tag+"images/f_share.png";
}

function log_out(strurl)
{
    //清除session值
    var url=strurl+'message?a=ajax_login_out';
    $.post(url,null,function(data){
        data=eval('('+data+')');
        if(data.message==0)
        {
			//alert('确定退出？');
           window.location.href=strurl+"index.php";
        }
    })

}
