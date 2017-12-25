//1.1预加载效果
var v_pub_preloadingimg = "<div style='' align='center'><img style='width:15px;height:15px;'  src=\"/images/loadingsmall.gif\" title=\"loading...\" /></div>";
var AppConst_PleaseSelectString = "--- 请选择 ---";
function getPageScroll() {
    var yScroll;
    if (self.pageYOffset) {
        yScroll = self.pageYOffset;
        //xScroll = self.pageXOffset; 
    } else if (document.documentElement && document.documentElement.scrollTop) {
        yScroll = document.documentElement.scrollTop;
    } else if (document.body) {
        yScroll = document.body.scrollTop;
    }
    //arrayPageScroll = new Array('',yScroll)
    return yScroll;
}

String.prototype.getQueryString = function (name) { var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); var r = window.location.search.substr(1).match(reg); if (r != null) return decodeURI(r[2]); return null; }

//分页当前页码
var CurrPage = 0;

//如果回调方法是空，这用这个方法代替
function nullfun() { }

//#region 显示提示框 alert("显示文字",显示类型,自动消失时间,回调函数);
//显示类型：
//1：提示信息
//4：成功提示
//5：错误提示
//6：加载提示
//隐藏提示框 alertHide();
//window.alert = ZENG.msgbox.show;
//window.alertHide = ZENG.msgbox._hide;
//#endregion

//#region 显示屏幕下方等待信息
//底栏加载等待
var gWaitingListB = [];
function gfShowWaitingB() {
    var dvBg1 = document.getElementById("waitDivB");
    if (null != dvBg1) {
        //document.body.removeChild(dvBg);
    }
    else {
        var dvMsg = document.createElement("div");

        var dc = _gfDocumentBounds();

        //dc.ch = gfViewportHeight();
        dvMsg.style.position = "fixed";
        dvMsg.setAttribute('id', 'waitDivB');
        dvMsg.style.width = (dc.cw - 10) + "px"; // "280px";
        dvMsg.style.height = "48px";
        dvMsg.style.top = dc.ch + "px";  //h - 50;
        dvMsg.style.left = "0px"; // "50%";
        dvMsg.style.marginTop = "-50px";
        dvMsg.style.marginLeft = "5px"; // "-140px";
        dvMsg.style.zIndex = "9999";
        dvMsg.style.opacity = 0.5;
        dvMsg.style.background = "gray";
        dvMsg.style.filter = "alpha(opacity=80)";
        // width='50' height='50'
        var html = "<center><img src='/images/loadingsmall.gif'><span style='font-weight:bold;font-size:10pt;'></span></center>";

        dvMsg.innerHTML = html;
        document.body.appendChild(dvMsg);
    }
    gWaitingListB.push({ show: 1, close: 0, wait: 0 });

}
function gfHideWaitingB(beforeStop, funname) {
    for (var k = gWaitingListB.length - 1; k >= 0; k--) {
        var p = gWaitingListB[k];
        if (p.close > 0) {
            p.wait = 1;
            gWaitingListB.splice(k, 1);
            break;
        }
        else {
            p.close = 1;
            setTimeout("gfHideWaitingB()", 300);
            break;
        }
        //}
    }
    if (gWaitingListB.length == 0) {
        var dvMsg = document.getElementById("waitDivB");
        if (null != dvMsg) {
            document.body.removeChild(dvMsg);
        }
        dvMsg = document.getElementById("msgDivB");
        if (null != dvMsg) {
            document.body.removeChild(dvMsg);
        }
    }
    else {
        setTimeout("gfHideWaitingB()", 45000); //最多不过45秒
    }
}


// #region _gfDocumentBounds
function _gfDocumentBounds() {
    if (document.documentElement && document.compatMode == "CSS1Compat") {
        return {
            st: document.documentElement.scrollTop,
            sl: document.documentElement.scrollLeft,
            sw: document.documentElement.scrollWidth,
            sh: document.documentElement.scrollHeight,
            cw: document.documentElement.clientWidth,
            ch: document.documentElement.clientHeight
        }
    } else if (document.body) {
        return {
            st: document.body.scrollTop,
            sl: document.body.scrollLeft,
            sw: document.body.scrollWidth,
            sh: document.body.scrollHeight,
            cw: $(window.parent.document).find("#m_iframe") ? parent.document.body.clientWidth : document.body.clientWidth,
            ch: $(window.parent.document).find("#m_iframe") ? parent.document.body.scrollHeight : document.body.clientHeight
        }
    }
}
function gfViewportHeight() {
    var height = 0;
    if (window.innerHeight) {
        height = window.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight) {
        height = document.documentElement.clientHeight;
    } else if (document.body && document.body.clientHeight) {
        height = document.body.clientHeight;
    }
    return height;

}
// #endregion
//#endregion

//#region 显示全屏加载信息
//全屏加载等待
var gWaitingList = [];
function gfShowWaiting(opt, funname) {
    //if ($("#msglist").length == 0) {
    //    $("body").append("<div id='msglist'></div>");
    // }
    var caller = (funname == undefined || funname == null ? "noname" : funname);
    var msg = "", timer, stopBtnEnable = false, beforeStop = undefined;
    if (opt) {
        if (opt.message) {
            msg = opt.message;
        }
        if (opt.timer) {
            timer = opt.timer;
        }
        if (opt.stopBtnEnable) {
            stopBtnEnable = opt.stopBtnEnable;
        }
        if (opt.beforeStop) {
            beforeStop = opt.beforeStop;
        }
    }
    var dvBg1 = document.getElementById("waitDiv");
    if (null != dvBg1) {
        //document.body.removeChild(dvBg);
    }
    else {
        var dvBg = document.createElement("div");
        var dvMsg = document.createElement("div");

        var h = Math.max(
			document.documentElement.scrollHeight,
			document.body.scrollHeight
		);
        var w = Math.max(
			document.documentElement.scrollWidth,
			document.body.scrollWidth
		);

        dvBg.setAttribute('id', 'waitDiv');

        dvBg.style.height = h + "px";
        dvBg.style.width = w + "px";
        dvBg.style.zIndex = "9999";
        dvBg.style.top = 0;
        dvBg.style.left = 0;

        dvBg.style.background = "#A6BACC";
        dvBg.style.opacity = 0.5;
        dvBg.style.filter = "alpha(opacity=50)";

        dvBg.style.position = "absolute";
        document.body.appendChild(dvBg);


        dvMsg.style.position = "absolute";
        dvMsg.setAttribute('id', 'msgDiv');
        dvMsg.style.width = "280px";
        dvMsg.style.top = "50%";
        dvMsg.style.left = "50%";
        dvMsg.style.marginTop = "-50px";
        dvMsg.style.marginLeft = "-140px";
        dvMsg.style.zIndex = "1112";
        dvMsg.style.opacity = 0.5;
        dvMsg.style.filter = "alpha(opacity=50)";

        var html = "<center><img src='/images/loading.gif'><span style='font-weight:bold;font-size:10pt;'>";
        if (msg) {
            html += msg;
        }
        html += "</span>";
        if (stopBtnEnable) {
            html += "<br/><input type='button' value='Stop' onclick='stopWait(" + beforeStop + ");'>";
        }
        html += "</center>";

        dvMsg.innerHTML = html;

        document.body.appendChild(dvMsg);
    }
    //if(gWaitingCount<=0) gWaitingCount = 1
    //else gWaitingCount++;
    gWaitingList.push({ name: caller, show: 1, close: 0, wait: 0 });
    //$("#msglist").append("<div>show:"+jsonToString(gWaitingList)+'</div>');
    //$("#msglist").append("<div>show:gWaitingCount:" + gWaitingCount + ' gWaitingClosing:' + gWaitingClosing + "</div><div class='clear'></div>");
    //if (gWaitingClosing > 0) gWaitingClosing --;

    if (timer && !isNaN(timer)) {
        if (beforeStop == undefined)
            setTimeout("gfHideWaiting(undefined,'" + funname + "')", timer);
        else
            setTimeout("gfHideWaiting(" + beforeStop + ",'" + funname + "')", timer);
    }
    if (gWaitingList.length == 1) {
        setTimeout("gfHideWaiting(undefined,'" + funname + "')", 45000); //最多不过45秒
    }
}
function gfHideWaiting(beforeStop, funname) {
    var caller = (funname == undefined || funname == null ? "noname" : funname);
    for (var k = gWaitingList.length - 1; k >= 0; k--) {
        var p = gWaitingList[k];
        //        if (p.name == caller) {
        if (p.close > 0) {
            p.wait = 1;
            gWaitingList.splice(k, 1);
            break;
        }
        else {
            p.close = 1;
            if (beforeStop == undefined || beforeStop == null) {
                setTimeout("gfHideWaiting(undefined,'" + funname + "')", 300);
            }
            else {
                setTimeout("gfHideWaiting(" + beforeStop + ",'" + funname + "')", 300);
            }
            //$("#msglist").append("<div>close wait:gWaitingCount:" + gWaitingCount + ' gWaitingClosing:' + gWaitingClosing + "</div><div class='clear'></div>");
            break;
        }
        //}
    }
    //$("#msglist").append("close:done "+jsonToString(gWaitingList));
    if (gWaitingList.length == 0) {
        var dvBg = document.getElementById("waitDiv");
        if (null != dvBg) {
            if (beforeStop) {
                beforeStop();
            }
            document.body.removeChild(dvBg);
        }
        var dvMsg = document.getElementById("msgDiv");
        if (null != dvMsg) {
            document.body.removeChild(dvMsg);
        }
        //$("#msglist").append("<div>close comp:gWaitingCount:" + gWaitingCount + ' gWaitingClosing:' + gWaitingClosing + "</div><div class='clear'></div>");
    }
}
//#endregion

//#region 全局弹出窗口扩展

$.extend({
    //#region 弹出DIV窗口
    OpenDiv: function (paras) {
        paras.name = paras.name || "openwindow"; //弹出div的选择器
        paras.title = paras.title || "新窗口"; //窗口的标题
        paras.modal = false == paras.modal ? false : true; //背景是否要阴影
        paras.resizable = true == paras.resizable ? true : false; //是否可调整大小
        paras.width = paras.width || 300; //宽度
        paras.height = paras.height || 0; //高度
        paras.hasclose = false == paras.hasclose ? false : true; //是否需要关闭按钮
        paras.closecallback = paras.closecallback || function () { }; //关闭按钮回调方法，前提是关闭按钮存在
        paras.page = paras.page || ""; //页面的html代码
        paras.zindex = paras.zindex || 1000; //层的上下数值，越大越在上面
        paras.buttons = paras.buttons || {}; //按钮json集合{"name1":function1,"name2",function2}             

        if (paras.hasclose) {
            paras.buttons["关闭"] = function () { $(this).dialog("close"); if (paras.closecallback) { paras.closecallback } }; //$(this).dialog("close"); 
        }
        //首先添加div
        if (undefined == $("#" + paras.name) || 0 == $("#" + paras.name).length)
            $("body").append("<div id='" + paras.name + "' title='" + paras.title + "'></div>");

        $("#" + paras.name).empty().html(paras.page).dialog(
    { title: paras.title,
        width: paras.width,
        height: paras.height,
        modal: paras.modal,
        resizable: paras.resizable,
        zIndex: paras.zindex,
        buttons: paras.buttons
    });
        return false;

    },
    //#endregion

    //#region 弹出窗口
    openWindow: function (URL, Width, Height) {
        window.open(URL, '', 'width=' + Width + ',height=' + Height + ',resizable=1,scrollbars=0,status=no,toolbar=no,location=no,menu=no');
    },
    //弹出窗口，固定位置left=100,top=100
    openWindowS: function (URL, Width, Height) {
        window.open(URL, '', 'width=' + Width + ',height=' + Height + ',resizable=1,scrollbars=1,status=no,toolbar=no,location=no,menu=no,left=60,top=60');
    },
    //弹出窗口，固定位置left=100,top=100; 固定大小800;600;
    openWindowS2: function (URL) { $.openWindowS(URL, 800, 600); },
    openWindowS3: function (URL) { $.openWindowS(URL, 640, 480); },
    openWindowS4: function (URL) { $.openWindowS(URL, 1000, 728); },
    //弹出窗口，全屏
    openWindowL: function (URL) {
        newwindow = window.open(URL, '', 'width=screen.width,height=screen.height,scrollbars=1,status=no,toolbar=no,location=no,menu=no,resizable=1');
        newwindow.focus();
    },
    //#endregion
    //弹出窗口，返回窗口句柄
    openWindowObject: function (URL, Width, Height) {
        return window.open(URL, '', 'width=' + Width + ',height=' + Height + ',resizable=1,scrollbars=0,status=no,toolbar=no,location=no,menu=no');
    }
});
//#endregion

//#region 打印方法
$.extend({
    print: function (eventTarget, eventArgument) {
        window.print();
        //window.opener.__doPostBack(eventTarget, eventArgument);
        //window.close();

        jQuery(document).ready(function () {
            setTimeout(function () { window.close(); }, 1);
        });
    },
    printagain: function (eventTarget, eventArgument) {
        if (confirm("重复打印！")) {
            window.print();
            //window.opener.__doPostBack(eventTarget,eventArgument);
            //window.close();

            jQuery(document).ready(function () {
                setTimeout(function () { window.close(); }, 1);
            });
        }
        else {
            window.close();
        }
    }
});

//#endregion

//#region 列表加载显示
$.fn.ListWaiting = function () {
    $(this).empty().html(v_pub_preloadingimg);
}
//#endregion

function GetOnLoadIFrame(f) {
    var main = $(window.parent.document).find("#m_iframe");
    var thisheight = $(document).height(); // +30;
    //main.height(thisheight);
    if ($(".control").attr("class") == "control status_down")
        f += $('.id_check_detail').height();
    //alert('$(window).height=' + $(window).height() + ",f=" + f + ",thisheight=" + thisheight+',main:'+main);
    f = Number($(window).height()) < Number(f) ? f : $(window).height();
    return f - 70;
}

function OnLoadIFrame(f, isFrag) {
    var main = $(window.parent.document).find("#m_iframe");
    var thisheight = $(document).height(); // +30;
    //main.height(thisheight);
    if ($(".control").attr("class") == "control status_down")
        f += $('.id_check_detail').height();
    //alert('$(window).height=' + $(window).height() + ",f=" + f + ",thisheight=" + thisheight+',main:'+main);
    f = Number($(window).height()) < Number(f) ? f : $(window).height();
    main.height(f);
}


//#region 全局回车搜索注册方法
$.extend({
    EnterAutoSearch: function (TriggerIds, SearchId) {

        SearchId = SearchId || "search";
        //alert(TriggerIds.length);
        TriggerIds = TriggerIds || []; //默认值
        for (var i = 0; i < TriggerIds.length; i++) {
            //绑定回车查询事件
            $("#" + TriggerIds[i]).keydown(function (event) {
                if (13 == event.keyCode) {
                    $("#" + SearchId).click(); //查询
                    return false;
                }
            });
        }
    },
    EnterAutoSearch1: function (TriggerIds, SearchId) {

        SearchId = SearchId || "search1";
        //alert(TriggerIds.length);
        TriggerIds = TriggerIds || []; //默认值
        for (var i = 0; i < TriggerIds.length; i++) {
            //绑定回车查询事件
            $("#" + TriggerIds[i]).keydown(function (event) {
                if (13 == event.keyCode) {
                    $("#" + SearchId).click(); //查询
                    return false;
                }
            });
        }

    }
});
//#endregion

//#region 扩展trim方法
//String.prototype.trim = function () { return $.trim(this); }
//#endregion

//#region 表单序列化函数
function convertArray(o) { //主要是推荐这个函数。它将jquery系列化后的值转为name:value的形式。
    var v = {};
    for (var i in o) {
        if (typeof (v[o[i].name]) == 'undefined') v[o[i].name] = o[i].value;
        else v[o[i].name] += "," + o[i].value;
    }
    return v;
}
//#endregion 

//#region 格式替换函数
$.format = function (source, params) {
    if (arguments.length == 1)
        return function () {
            var args = $.makeArray(arguments);
            args.unshift(source);
            return $.format.apply(this, args);
        };
    if (arguments.length > 2 && params.constructor != Array) {
        params = $.makeArray(arguments).slice(1);
    }
    if (params.constructor != Array) {
        params = [params];
    }
    $.each(params, function (i, n) {
        source = source.replace(new RegExp("\\{" + i + "\\}", "g"), n);
    });
    return source;
};
//String.prototype.format = function () { if (arguments.length == 0) { return this; } var str = this; for (var i = 0; i < arguments.length; i++) { var re = new RegExp('\\{' + i + '\\}', 'gm'); str = str.replace(re, arguments[i]); } return str; }
//#endregion 
//#region 分页函数
function getPageStr(totalCount, pageSize, curretPage, OnClickFunc) {
    //var totalPage = 0,
    if (OnClickFunc == null || OnClickFunc == undefined || OnClickFunc == '')
        OnClickFunc = 'onPagerFunc';
    var totalPage = 0;
    if ((totalCount % pageSize) == 0)
        totalPage = totalCount / pageSize;
    else
        totalPage = parseInt(totalCount / pageSize) + 1;

    var strHtml = "<script>var CurrPage=" + curretPage + ";</script>";
    if (totalPage > 1 && curretPage + 1 > 1) {
        strHtml += $.format("<a href=\"javascript:{0}({1})\">首页</a>&nbsp;", OnClickFunc, 0);
    }
    if (pageSize > totalCount) {
        //str += "";
    }
    else {
        //one
        if (totalCount <= pageSize * 10) {
            //left
            if (curretPage == 0) {

            }
            else {
                strHtml += $.format("<a href=\"javascript:{0}({1})\">上一页</a>&nbsp;",
                            OnClickFunc, curretPage - 1);
            }
            //middle
            for (var i = 0; i < totalPage; i++) {
                if (curretPage == i) {
                    strHtml += "&nbsp;&nbsp;" + (i + 1) + "&nbsp;&nbsp;";
                }
                else {
                    strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                          OnClickFunc, i, i + 1);
                }
            }
            //right
            if (curretPage < Number(totalPage - 1)) {
                strHtml += $.format("<a href=\"javascript:{0}({1})\" >下一页</a>&nbsp;",
                          OnClickFunc, curretPage + 1);
            }
            else {
            }
        } //two
        else {
            //left
            if (curretPage == 0) {

            }
            else {
                strHtml += $.format("<a href=\"javascript:{0}({1})\">上一页</a>&nbsp;",
                          OnClickFunc, curretPage - 1);
            }
            //middle left
            if (curretPage < 4) {
                for (var i = 0; i < 5; i++) {
                    if (curretPage == i) {
                        strHtml += "&nbsp;&nbsp;" + (i + 1) + "&nbsp;&nbsp;";
                    }
                    else {
                        strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                        OnClickFunc, i, i + 1);
                    }
                }
                strHtml += "<a href=\"javascript:;\">...</a>&nbsp;";
                strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                        OnClickFunc, totalPage - 1, totalPage);
            } //middle one
            else if (curretPage >= 4 && curretPage < totalPage - 6) {
                strHtml += "<a href=\"javascript:" + OnClickFunc + "(0)\">1</a>&nbsp;";
                strHtml += "<a href=\"javascript:;\">...</a>&nbsp;";
                for (var i = -2; i < 3; i++) {
                    if (i == 0) {
                        strHtml += "&nbsp;&nbsp;" + (curretPage + 1) + "&nbsp;&nbsp;";
                    }
                    else {
                        strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                       OnClickFunc, curretPage + i, curretPage + i + 1);
                    }
                }
                strHtml += "<a href=\"javascript:;\">...</a>&nbsp;";
                strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                     OnClickFunc, totalPage - 1, totalPage);
            }
            else if (curretPage > totalPage + 1) {

            } //middle two
            else {
                strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                   OnClickFunc, 0, 1);
                strHtml += "<a href=\"javascript:;\">...</a>&nbsp;";
                for (var i = 6; i > 0; i--) {
                    if (curretPage == totalPage - i) {
                        strHtml += "&nbsp;&nbsp;" + (totalPage - i + 1) + "&nbsp;&nbsp;";
                    }
                    else {
                        strHtml += $.format("<a href=\"javascript:{0}({1})\">{2}</a>&nbsp;",
                    OnClickFunc, totalPage - i, totalPage - i + 1);
                    }
                }
            }
            if (curretPage < totalPage - 1) {
                strHtml += $.format("<a href=\"javascript:{0}({1})\">下一页</a>&nbsp;",
                        OnClickFunc, curretPage + 1);
            }
            else {

            }
        }
    }
    if (totalPage > 1 && curretPage < totalPage - 1) { strHtml += $.format("<a href=\"javascript:{0}({1})\">尾页</a>&nbsp;", OnClickFunc, totalPage - 1); }


    return strHtml;
}
//#endregion 
function getPageStr2(totalCount, pageSize, curretPage, OnClickFunc) {
    //var totalPage = 0,
    if (OnClickFunc == null || OnClickFunc == undefined || OnClickFunc == '')
        OnClickFunc = 'onPagerFunc';
    var totalPage = 0;
    if ((totalCount % pageSize) == 0)
        totalPage = totalCount / pageSize;
    else
        totalPage = parseInt(totalCount / pageSize) + 1;

    var strHtml = "<script>var CurrPage=" + curretPage + ";</script>";
    if (totalPage > 1 && curretPage + 1 > 1) {
        strHtml += $.format("<li><a href=\"javascript:{0}({1})\"><i class=\"icon-home\"></i></a></li>", OnClickFunc, 0);
    }
    if (pageSize > totalCount) {
        //str += "";
    }
    else {
        //one
        if (totalCount <= pageSize * 10) {
            //left
            if (curretPage == 0) {

            }
            else {
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\" ><i class='icon-angle-left'></i></a></li>",
                            OnClickFunc, curretPage - 1);
            }
            //middle
            for (var i = 0; i < totalPage; i++) {
                if (curretPage == i) {
                    strHtml += "<li class=\"active\"><a href=\"javascript:;\">" + (i + 1) + "</a></li>";
                }
                else {
                    strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                          OnClickFunc, i, i + 1);
                }
            }
            //right
            if (curretPage < Number(totalPage - 1)) {
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\" ><i class=\"icon-angle-right\"></i></a></li>",
                          OnClickFunc, curretPage + 1);
            }
            else {
            }
        } //two
        else {
            //left
            if (curretPage == 0) {

            }
            else {
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\"><i class=\"icon-angle-left\"></i></a></li>",
                          OnClickFunc, curretPage - 1);
            }
            //middle left
            if (curretPage < 4) {
                for (var i = 0; i < 5; i++) {
                    if (curretPage == i) {
                        strHtml += "<li class=\"active\"><a href=\"javascript:;\">" + (i + 1) + "</a></li>";
                    }
                    else {
                        strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                        OnClickFunc, i, i + 1);
                    }
                }
                strHtml += "<li><a href=\"javascript:;\">...</a></li>";
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                        OnClickFunc, totalPage - 1, totalPage);
            } //middle one
            else if (curretPage >= 4 && curretPage < totalPage - 6) {
                strHtml += "<li><a href=\"javascript:" + OnClickFunc + "(0)\">1</a></li>";
                strHtml += "<li><a href=\"javascript:;\">...</a></li>";
                for (var i = -2; i < 3; i++) {
                    if (i == 0) {
                        strHtml += "<li class=\"active\"><a href=\"javascript:;\">" + (curretPage + 1) + "</a></li>";
                    }
                    else {
                        strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                       OnClickFunc, curretPage + i, curretPage + i + 1);
                    }
                }
                strHtml += "<li><a href=\"javascript:;\">...</a></li>";
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                     OnClickFunc, totalPage - 1, totalPage);
            }
            else if (curretPage > totalPage + 1) {

            } //middle two
            else {
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                   OnClickFunc, 0, 1);
                strHtml += "<li><a href=\"javascript:;\">...</a></li>";
                for (var i = 6; i > 0; i--) {
                    if (curretPage == totalPage - i) {
                        strHtml += "<li class=\"active\"><a href=\"javascript:;\">" + (totalPage - i + 1) + "</a></li>";
                    }
                    else {
                        strHtml += $.format("<li><a href=\"javascript:{0}({1})\">{2}</a></li>",
                    OnClickFunc, totalPage - i, totalPage - i + 1);
                    }
                }
            }
            if (curretPage < totalPage - 1) {
                strHtml += $.format("<li><a href=\"javascript:{0}({1})\"><i class=\"icon-angle-right\"></i></a></li>",
                        OnClickFunc, curretPage + 1);
            }
            else {

            }
        }
    }
    if (totalPage > 1 && curretPage < totalPage - 1) { strHtml += $.format("<li><a href=\"javascript:{0}({1})\"><i class=\"icon-stop\"></i></a></li>", OnClickFunc, totalPage - 1); }


    return strHtml;
}
//#region url参数替换，特殊场景使用
//url参数替换，特殊场景使用
function UrlReplace(url, objArr) {
    var obj = '',
        pairs = url.split('&'),
        d = decodeURIComponent,
        name,
        value;
    $.each(pairs, function (i, pair) {
        pair = pair.split('=');
        name = d(pair[0]);
        value = d(pair[1]);
        //        obj[name] = overwrite || !obj[name] ? value :
        //                    [].concat(obj[name]).concat(value);
        var isRemove = false;
        for (var i in objArr) {
            if (name == objArr[i]) {
                isRemove = true;
                break;
            }
        }
        if (!isRemove) {
            obj += name + '=' + value + '&';
        }
    });
    if (obj.length > 0) obj = obj.substring(0, obj.length - 1);
    return obj;
}
//#endregion 
//#region 生成UcBaseStatus用户自定义控件
function GetUcBaseStatusHtml(itemObj, IsAll, selectedValue) {
    var Options;
    $.each(itemObj, function (i, s) {
        var n = this;
        Options += "<option" + ((n.Code == selectedValue) ? " selected " : "") + " value='" + n.Code + "'>" + n.Name + "</option>";
    });
    if (IsAll) {
        Options = "<option value='-999999'>" + AppConst_PleaseSelectString + "</option>" + Options;
    }
    return Options;
}
//#endregion 
//#region 生成UcBaseStatusRadio用户自定义控件
function GetUcBaseStatusRadio(Columns, obj, selValue, Name, Id) {
    var strhtml = '<table class="table_rma_get"><colgroup>';
    for (var i = 0; i < Columns; i++) {
        strhtml += '<col class="col5">';
    }
    strhtml += '</colgroup>';
    var objLen = 0;
    $.each(obj, function () { objLen++; });
    $.each(obj, function (counter, s) {
        var n = this;
        if (counter++ % Columns == 0) strhtml += '<tr>';
        strhtml += '<td><input type="radio" id="' + Id + counter + '" name="' + Name + '" value="' + n.Code + '"' +
                (n.Code == selValue ? ' checked="checked" ' : '') + ' title="' + n.CDesc + '" /><label for="' + Id + counter + '">' + n.Name + '</label></td>';
        if (counter == objLen && objLen % Columns != 0) {
            for (var i = 0; i < Columns - (objLen % Columns); i++) {
                strhtml += '<td>&nbsp;</td>';
            }
        }
        if (counter % Columns == 0) strhtml += '</tr>';
    });
    strhtml += '</table>';
    return strhtml;
}
//#endregion 

//#region  Js获取当前时间并格式化
function getNowFormatDate() {
    var date = new Date();
    var hs = date.getHours();
    if (hs <= 9) {
        hs = "0" + hs;
    }
    var ms = date.getMinutes();
    if (ms <= 9) {
        ms = "0" + ms;
    }
    var ss = date.getSeconds();
    if (ss <= 9) {
        ss = "0" + ss;
    }
    return date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate() + " " + hs + ":" + ms + ":" + ss; ;
}
function getFormatDate(longtime) {
    if (longtime == 0) return "";
    var day2 = new Date(longtime * 1000);
    var hs = day2.getHours();
    if (hs <= 9) {
        hs = "0" + hs;
    }
    var ms = day2.getMinutes();
    if (ms <= 9) {
        ms = "0" + ms;
    }
    var ss = day2.getSeconds();
    if (ss <= 9) {
        ss = "0" + ss;
    }
    return day2.getFullYear() + "/" + (day2.getMonth() + 1) + "/" + day2.getDate() + " " + hs + ":"
    + ms + ":" + ss;
}
//#endregion

$.fn.extend({
    validateForm: function () {
        var ctx = $(this);
        var ok = true;
        $("input[required],select[required]", ctx).each(function () {
            if (!ok) return;
            //if ($(this).attr('required') == undefined) return; $(this).attr('required') == '1' &&
            if ($.trim($(this).val()) == '') {
                ok = false;
                alert($(this).attr("message"), 5);
                $(this).focus().select();
            }
        });
        $("input[defaultValue]", ctx).each(function () { var obj = $(this); if (obj.val() == '') obj.val(obj.attr('defaultValue')); });
        return ok;
    }
});

//#region 判断游览器问题
(function ($, window, document, undefined) {
    if (!window.browser) {

        var userAgent = navigator.userAgent.toLowerCase(), uaMatch;
        window.browser = {}

        /**
        * 判断是否为ie
        */
        function isIE() {
            return ("ActiveXObject" in window);
        }
        /**
        * 判断是否为谷歌浏览器
        */
        if (!uaMatch) {
            uaMatch = userAgent.match(/chrome\/([\d.]+)/);
            if (uaMatch != null) {
                window.browser['name'] = 'chrome';
                window.browser['version'] = uaMatch[1];
            }
        }
        /**
        * 判断是否为火狐浏览器
        */
        if (!uaMatch) {
            uaMatch = userAgent.match(/firefox\/([\d.]+)/);
            if (uaMatch != null) {
                window.browser['name'] = 'firefox';
                window.browser['version'] = uaMatch[1];
            }
        }
        /**
        * 判断是否为opera浏览器
        */
        if (!uaMatch) {
            uaMatch = userAgent.match(/opera.([\d.]+)/);
            if (uaMatch != null) {
                window.browser['name'] = 'opera';
                window.browser['version'] = uaMatch[1];
            }
        }
        /**
        * 判断是否为Safari浏览器
        */
        if (!uaMatch) {
            uaMatch = userAgent.match(/safari\/([\d.]+)/);
            if (uaMatch != null) {
                window.browser['name'] = 'safari';
                window.browser['version'] = uaMatch[1];
            }
        }
        /**
        * 最后判断是否为IE
        */
        if (!uaMatch) {
            if (userAgent.match(/msie ([\d.]+)/) != null) {
                uaMatch = userAgent.match(/msie ([\d.]+)/);
                window.browser['name'] = 'ie';
                window.browser['version'] = uaMatch[1];
            } else {
                /**
                * IE10
                */
                if (isIE() && !!document.attachEvent && (function () { "use strict"; return !this; } ())) {
                    window.browser['name'] = 'ie';
                    window.browser['version'] = '10';
                }
                /**
                * IE11
                */
                if (isIE() && !document.attachEvent) {
                    window.browser['name'] = 'ie';
                    window.browser['version'] = '11';
                }
            }
        }

        /**
        * 注册判断方法
        */
        if (!$.isIE) {
            $.extend({
                isIE: function () {
                    return (window.browser.name == 'ie');
                }
            });
        }
        if (!$.isChrome) {
            $.extend({
                isChrome: function () {
                    return (window.browser.name == 'chrome');
                }
            });
        }
        if (!$.isFirefox) {
            $.extend({
                isFirefox: function () {
                    return (window.browser.name == 'firefox');
                }
            });
        }
        if (!$.isOpera) {
            $.extend({
                isOpera: function () {
                    return (window.browser.name == 'opera');
                }
            });
        }
        if (!$.isSafari) {
            $.extend({
                isSafari: function () {
                    return (window.browser.name == 'safari');
                }
            });
        }
    }
})(jQuery, window, document);
//#endregion
