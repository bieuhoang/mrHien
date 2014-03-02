/**/
function checknumber(numb, value){
var anum=/(^\d+$)|(^\d+\.\d+$)/
if (anum.test(numb))testresult=true
else{alert(value + " Bạn phải nhập số");testresult=false
}return (testresult)} 

function validRequireField(str, name) {
    if ($.trim(str) == "" || $.trim(str) == name) {
        alert(name + " không được để trống.");
        return false;
    }
    return true;
}
function validEmail(email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reg.test(email) == false) {
        alert("Sai định dạng email.");
        return false;
    }
    return true;
}
function RefreshCaptchaLH(){
    var img = document.getElementById("imgCaptcha");
    img.src = "/control/CaptchaHandler.ashx?query=" + Math.random();
}
var nameLh = '';
var telLh = '';
var monilelLh = '';
var faxLh = '';
var congtyLh = '';
var emailLh = '';
var websiteLh = '';
var contentLh = '';
var captchaLh = '';
var diachilh = '';
function GuiYeuCau() {
    if (validRequireField($("#txtname").val(), "Họ tên")
    && validRequireField($("#txtcongty").val(), "Tên công ty")
    && validRequireField($("#txtdiachi").val(), "Địa chỉ")
    && validEmail($("#txtemail").val())
    && checknumber($("#txttel").val(), "Điện thoại")
    && validRequireField($("#txtnoidung").val(), "Nội dung")
    && validRequireField($("#txtcode").val(), "Mã xác nhận")
    ) {
        //$("#btnSend").attr('disabled', 'disabled');
        nameLh = $("#txtname").val();
        congtyLh = $("#txtcongty").val();
        diachilh = $("#txtdiachi").val();
        emailLh = $("#txtemail").val();
        monilelLh = $("#txtmobile").val();
        telLh = $("#txttel").val();
        faxLh = $("#txtfax").val();
        contentLh = $("#txtnoidung").val();
        captchaLh = $("#txtcode").val();
        var dataString = "namelh=" + nameLh + "&congtylh=" + congtyLh + "&diachilh=" + diachilh + "&emaillh=" + emailLh + "&mobilelh=" + monilelLh +"&tellh=" + telLh +"&faxlh=" + faxLh +"&noidunglh=" + contentLh +"&capchalh=" + captchaLh;
        $.ajax({
            type: "POST",
            url: "/control/Update_lh.ashx",
            data: dataString,
            cache: false,
            beforeSend: function() {
            $("#divloadding").show();
            },
            complete: function() {
            $("#divloadding").hide();
            },
            success: function(data) {
                $("#divloadding").css('display','block');
                if (data == "1") {
                    $("#divloadding").css('display','none');
                    alert("Bạn hãy điền đúng mã xác nhận trước khi tiếp tục.");
                    return;
                }else {
                    alert("Thông tin của bạn đã được gửi tới chúng tôi.");
                     $("#btnOk").attr('disabled', 'true');
                    $("#OK").css('display', 'none');
                    $("#NOTOK").css('display', 'block');
                }
            }
        });
    }
    return false;
}

function share_twitter() { u = location.href; t = document.title; window.open("http://twitter.com/home?status=" + encodeURIComponent(u)); }
function share_facebook() { u = location.href; t = document.title; window.open("http://www.facebook.com/share.php?u=" + encodeURIComponent(u) + "&t=" + encodeURIComponent(t)); }
function share_google() { u = location.href; t = document.title; window.open("http://www.google.com/bookmarks/mark?op=edit&bkmk=" + encodeURIComponent(u) + "&title=" + t + "&annotation=" + t); }
function share_buzz() { u = location.href; t = document.title; window.open("http://buzz.yahoo.com/buzz?publisherurn=tinquangcaop&targetUrl=" + encodeURIComponent(u)); }
function share_Zing() { u = location.href; t = document.title;window.open("http://link.apps.zing.vn/share?u=" + encodeURIComponent(u) + "&t=" + encodeURIComponent(t)); }
function share_LinhHay() { u = location.href; t = document.title;window.open(" http://linkhay.com/submit?url=" + encodeURIComponent(u) + "&t=" + encodeURIComponent(t)); }


function locdau(str){str= str.toLowerCase();
str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
str= str.replace(/^\-+|\-+$/g,""); return str;
}

function runMiniClock()
{
    var time = new Date();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds = time.getSeconds();
    minutes=((minutes < 10) ? "0" : "") + minutes;
    ampm = (hours >= 12) ? "PM" : "AM";
    hours=(hours > 12) ? hours-12 : hours;
    hours=(hours == 0) ? 12 : hours;
    var clock = hours + ":" + minutes + ":" + seconds +" " + ampm;
    if(clock != document.getElementById('miniclock').innerHTML)
    document.getElementById('miniclock').innerHTML = clock;
    timer = setTimeout("runMiniClock()",1000);
}
function FloatTopDiv() {
        startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust, startLY = TopAdjust + 80;
        startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust, startRY = TopAdjust + 80;
        var d = document;
        function ml(id) {
            var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
            el.sP = function (x, y) { this.style.left = x + 'px'; this.style.top = y + 'px'; };
            el.x = startRX;
            el.y = startRY;
            return el;
        }
        function m2(id) {
            var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
            e2.sP = function (x, y) { this.style.left = x + 0 + 'px'; this.style.top = y + 'px'; };
            e2.x = startLX;
            e2.y = startLY;
            return e2;
        }
        window.stayTopLeft = function () {
            if (document.documentElement && document.documentElement.scrollTop)
                var pY = document.documentElement.scrollTop;
            else if (document.body)
                var pY = document.body.scrollTop;
            if (document.body.scrollTop > 30) { startLY = 3; startRY = 3; } else { startLY = TopAdjust; startRY = TopAdjust; };
            ftlObj.y += (pY + startRY - ftlObj.y) / 16;
            ftlObj.sP(ftlObj.x, ftlObj.y);
            ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;
            ftlObj2.sP(ftlObj2.x, ftlObj2.y);
            setTimeout("stayTopLeft()", 1);
        }
        ftlObj = ml("divAdRight");
        ftlObj2 = m2("divAdLeft");
        stayTopLeft();
    }
function ShowAdDiv() {var objAdDivRight = document.getElementById("divAdRight");var objAdDivLeft = document.getElementById("divAdLeft");
        if (document.body.clientWidth < 948) {objAdDivRight.style.display = "none";objAdDivLeft.style.display = "none";
        }
        else {objAdDivRight.style.display = "block"; objAdDivLeft.style.display = "block";FloatTopDiv();}
}