/**
 * Created by Administrator on 2016/5/14.
 */


$(function () {


    $("input[type=password]").focus(function () {

        var name = $(this).attr("name");
        var txt = "";
        if(name == "oldpwd"){
            txt = "请输入原密码";
        }

        if(name == "newpwd"){
            txt = "请输入新密码";
        }
        if(name == "ensurepwd"){
            txt = "请确认新密码";
        }
        $(this).css("outline","1px solid #35b558");
        $(this).siblings().eq(0).html(txt).fadeIn();
    });

    $("input[type=password]").blur(function () {

        var v = $(this).val();

        if(v == ""){
            $(this).css("outline","1px solid #f00");
            $(this).siblings().eq(0).html("必填项不能为空");
        }else{
            $(this).siblings().eq(0).fadeOsut();
        }
    });

    $("#newpwd").keydown(function () {

        var v = $(this).val().length+1;

        if(v>=6 && v<=10){
            $("#l").fadeIn();
            $("#m").fadeOut();
            $("#s").fadeOut();
        }
        if(v >10 && v<=14){
            $("#l").fadeIn();
            $("#m").fadeIn();
            $("#s").fadeOut();
        }

        if(v > 14){
            $("#l").fadeIn();
            $("#m").fadeIn();
            $("#s").fadeIn();
        }

        if(v < 6){
            $("#l").fadeOut();
            $("#m").fadeOut();
            $("#s").fadeOut();
        }
    });


    var appurl = $("#appurl").val();
    $(".deletebtn").click(function () {

        if(confirm('确定要删除吗?')){
            var id = $(this).attr("id");

            $.post(
                appurl+"/delAccount",
                {id:id},
                function(result,status){
                    if(result['status'] == "success"){

                        $("#modal-body").html("删除成功");
                        $('#myModal').on('hide.bs.modal', function () {
                            location.href=appurl+"/index";
                        });

                    }else{
                        $("#modal-body").html("删除失败，请重试");
                    }
                    $('#myModal').modal('show');
                });
        }

    });




});


!function ($) {


    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
        $(this).find('em:first').toggleClass("glyphicon-minus");
    });
    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
}(window.jQuery);

$(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show');
});
$(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide');
});