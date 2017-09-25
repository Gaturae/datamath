$(document).ready(function() {

    var formApp = angular.module('loginPanel', []);

    formApp.controller('loginPanelCtrl', function($scope,$http) {


        $scope.user={};

        $scope.processForm = function(){

            $http({
                method  : 'POST',
                url     : '/Home/Index/loginAction',
                data    : $.param($scope.user),
                headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).then(function successCallback(data) {
                //返回的是json数据对象
                if(data['data']['code']=="success"){
                    window.location.href="/Home/Index/index";
                }else {
                    alert("用户名密码错误")
                }

            }, function errorCallback(data) {
                //var jsonStr = JSON.stringify(data)
                alert(data)
            });
        }

    });
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
});


$(function () { $(".title_img a").tooltip({html : true });});

function fade(){

    $("#loginPanel").fadeToggle(1500,function(){

        $("#registPanel").slideDown()
    });


}

//title
function navListover(){

    $("#navList").css("display","block");
   // $("title_panel").css("background-color",": 2c2c2c");
}

function navListleave(){

    setTimeout(function () {
        $("#navList").css("display","none");
    },2000);

}
function chkIn(){

    $("#navList").attr("id","navListBlock");
    $("#title_panel").attr("id","titlePanel");

}

function chkOut() {

    $("#navListBlock").attr("id","navList");
    $("#titlePanel").attr("id","title_panel");
    $("#navList").css("display","none");

}


//matrix
function rollback(a){

    $("#m"+a).find("#back").fadeIn(500)
}
function turnback(a){

    $("#m"+a).find("#back").fadeOut(500)

}

function ran(a) {
    //$(window).attr('location',window.location.href+a);
    alert("选择进入第"+a+"区域")
}

function randomStart() {

    var cnt = parseInt(Math.random()*100+30)
    var a = parseInt(Math.random()*9+1)
    $("#m_search").find("input").val("Running!");
    $("#m_search").find("input").attr("disabled", true);
    var time1 = setInterval(function () {
        if(a==10){
            $("#m"+a).find("#back").fadeIn(500)
            $("#m"+a).find("#back").fadeOut(500)
            a=1
            cnt--;

        }else {
            $("#m"+a).find("#back").fadeIn(500)
            $("#m"+a).find("#back").fadeOut(500)
            cnt--;
            a++;
        }
        if(cnt==5){
            clearInterval(time1)
            var time2 = setInterval(function () {
                if(a==10){
                    $("#m"+a).find("#back").fadeIn(500)
                    $("#m"+a).find("#back").fadeOut(500)
                    a=1
                    cnt--;

                }else {
                    $("#m"+a).find("#back").fadeIn(500)
                    $("#m"+a).find("#back").fadeOut(500)
                    cnt--;
                    a++;
                }
                if(cnt==0){
                    clearInterval(time2)
                    $("#m_search").find("input").removeAttr("disabled");
                    $("#m_search").find("input").val("感受下随机的乐趣");
                    ran(a-2)
                }
            },1000)
        }
    },100)
}

