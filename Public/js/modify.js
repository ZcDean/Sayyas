/**
 * Created by Administrator on 2016-7-6.
 */
var VARIABLE = {};//存放变量
var FUN = {};
var _PUBLICURL,_APPURL;
VARIABLE.Food={};
VARIABLE.Amuse={};
VARIABLE.Shopping={};
VARIABLE.Bus={};
VARIABLE.Other={};
//json文件加载次数
VARIABLE.load_count_json = 0;
//餐饮分类个数
VARIABLE.food_item_count = 0;
VARIABLE.bus_item_count = 0;
VARIABLE.amuse_item_count = 0;
VARIABLE.shopping_item_count = 0;
VARIABLE.other_item_count = 0;
VARIABLE.type_item_count = 0;
VARIABLE.isadditem = true;

VARIABLE.UP={};//需要添加到数据库的变量集

$(function () {

    _PUBLICURL = $("#publicurl").val();
    _APPURL = $("#appurl").val();


    $(".addsubitem").click(function () {
        var type_par = $(this).siblings()[0];
        var typename = type_par.value;

        $("#"+typename).val(0);
        $("#"+typename).attr("readonly","readonly");

        //控制json文件只加载一次
        if(VARIABLE.load_count_json == 0){
            //同步加载，异步加载会导致赋值失败
            $.ajaxSettings.async = false;
            $.getJSON(_PUBLICURL+"/items.json", function(data){
                VARIABLE.items_JSON=data;
                if(!FUN.checkAddType(typename)){
                    return false;
                }
                VARIABLE.load_count_json++;
            });
        }else{
            if(!FUN.checkAddType(typename)){
                return false;
            }
        }

        //判断是否可以添加
        if(VARIABLE.isadditem){
            var par = $(this).parent().parent();
            var html = ' <div class="subitem">'+
                '<select class="subitem-choosetype"  name='+typename+'>';

                    for(var i = VARIABLE.type_item_count-1 ; i < VARIABLE.typeArray.length ; i++){
                        html += '<option>'+VARIABLE.typeArray[i]+'</option>';
                    }

            html += '</select>'+
            '<span class="subitem-connect">:</span>'+
            '<input type="number" min="0" class="subitem-inputtext" step="0.01" value="0" >'+
            '<i class="glyphicon glyphicon-remove item-remove color-red" title="删除"></i>'+
            '</div>';

            par.find(".col-md-6").append(html);
        }

    });

    $(".parentitem").on("click",'.item-remove',function () {

        var par = $(this).parent();
        par.remove();

        var typename = par.find(".subitem-choosetype").attr('name');
        var value = FUN.float(par.find(".subitem-inputtext").val());
        switch (typename){
            case "food":
                VARIABLE.food_item_count--;
                VARIABLE.type_item_count = VARIABLE.food_item_count;
                break;
            case "bus":
                VARIABLE.bus_item_count--;
                VARIABLE.type_item_count = VARIABLE.bus_item_count;
                break;
            case "shopping":
                VARIABLE.shopping_item_count--;
                VARIABLE.type_item_count = VARIABLE.shopping_item_count;
                break;
            case "amuse":
                VARIABLE.amuse_item_count--;
                VARIABLE.type_item_count = VARIABLE.amuse_item_count;
                break;
            case "other":
                VARIABLE.other_item_count--;
                VARIABLE.type_item_count = VARIABLE.other_item_count;
                break;
        }

        //移除只读属性
        if(VARIABLE.type_item_count == 0){
            $("#"+typename).removeAttr("readonly");
        }

    });
    $(".parentitem").on("change",'.subitem-inputtext',function () {

        var v = $(this).val();
        if(!isNaN(v)){
        }else{
            $(this).css("border","1px solid #f00");
            return false;
        }

    });

    //餐饮选项组
    VARIABLE.UP.food_items = [];
    //购物选项组
    VARIABLE.UP.shopping_items = [];
    //公交选项组
    VARIABLE.UP.bus_items = [];
    //娱乐选项组
    VARIABLE.UP.amuse_items = [];
    VARIABLE.UP.other_items = [];

    $("#commit").click(function () {

        $(this).attr("disabled","disabled");
        FUN.init();
        $(".subitem").each(function () {

            var type = $(this).find(".subitem-choosetype").attr("name");
            var select = $(this).find(".subitem-choosetype").val();
            var value = $(this).find(".subitem-inputtext").val()==""?0:$(this).find(".subitem-inputtext").val();
            switch (type){
                case "food":
                    VARIABLE.Food.food_total += FUN.float(value);
                    VARIABLE.UP.food_items.push({"name":select,"consume":value});
                    break;
                case "bus":
                    VARIABLE.Bus.bus_total += FUN.float(value);
                    VARIABLE.UP.bus_items.push({"name":select,"consume":value});
                    break;
                case "shopping":
                    VARIABLE.Shopping.shopping_total += FUN.float(value);
                    VARIABLE.UP.shopping_items.push({"name":select,"consume":value});
                    break;
                case "amuse":
                    VARIABLE.Amuse.amuse_total += FUN.float(value);
                    VARIABLE.UP.amuse_items.push({"name":select,"consume":value});
                    break;
                case "other":
                    VARIABLE.Other.other_total += FUN.float(value);
                    VARIABLE.UP.other_items.push({"name":select,"consume":value});
                    break;
            }

        });

        VARIABLE.UP.date = $("#calendar1").val();
        VARIABLE.UP.food =  FUN.float($("#food").val())==0?VARIABLE.Food.food_total:FUN.float($("#food").val());
        VARIABLE.UP.amuse =   FUN.float($("#amuse").val())==0?VARIABLE.Amuse.amuse_total:FUN.float($("#amuse").val());
        VARIABLE.UP.shopping =   FUN.float($("#shopping").val())==0?VARIABLE.Shopping.shopping_total:FUN.float($("#shopping").val());
        VARIABLE.UP.bus =   FUN.float($("#bus").val())==0?VARIABLE.Bus.bus_total:FUN.float($("#bus").val());
        VARIABLE.UP.other =   FUN.float($("#other").val())==0?VARIABLE.Other.other_total:FUN.float($("#other").val());
        VARIABLE.UP.month =VARIABLE.UP.date.split("-")[1];//获取月份
        VARIABLE.UP.year =VARIABLE.UP.date.split("-")[0];//获取年份
        //获取全部累计金额
        VARIABLE.UP.total = VARIABLE.UP.food+VARIABLE.UP.amuse+VARIABLE.UP.shopping+VARIABLE.UP.bus+VARIABLE.UP.other;
        //
        $.ajax({
            url:_APPURL+"/modifyAccount",
            data:JSON.stringify(VARIABLE.UP),
            type:"post",
            timeout:2000,
            success: function (data,status) {
                if(status == 'success'){
                    $(".modal-body").html(data['msg']);
                    $('#myModal').on('hide.bs.modal', function () {
                        location.href=_APPURL+"/index";
                    });
                }else{
                    $(".modal-body").html("请求数据失败！");
                }
                $("#myModal").modal("show");


                $("#commit").attr("disabled",false);
            }
        });
    });

});


/**
 * 根据类型名称判断是否可以继续添加
 * @param typename
 * @returns {boolean}
 */
FUN.checkAddType =function(typename){
    switch (typename){
        case "food":
            VARIABLE.typeArray = VARIABLE.items_JSON.food;
            if(VARIABLE.food_item_count >= VARIABLE.typeArray.length){
               return false;
            }
            VARIABLE.food_item_count++;
            VARIABLE.type_item_count = VARIABLE.food_item_count;
            break;
        case "amuse":
            VARIABLE.typeArray = VARIABLE.items_JSON.amuse;
            if(VARIABLE.amuse_item_count >= VARIABLE.typeArray.length){
                return false;
            }
            VARIABLE.amuse_item_count++;
            VARIABLE.type_item_count = VARIABLE.amuse_item_count;
            break;
        case "bus":
            VARIABLE.typeArray = VARIABLE.items_JSON.bus;
            if(VARIABLE.bus_item_count >= VARIABLE.typeArray.length){
                return false;
            }
            VARIABLE.bus_item_count++;
            VARIABLE.type_item_count = VARIABLE.bus_item_count;
            break;
        case "shopping":
            VARIABLE.typeArray = VARIABLE.items_JSON.shopping;
            if(VARIABLE.shopping_item_count >= VARIABLE.typeArray.length){
                return false;
            }
            VARIABLE.shopping_item_count++;
            VARIABLE.type_item_count = VARIABLE.shopping_item_count;
            break;
        case "other":
            VARIABLE.typeArray = VARIABLE.items_JSON.other;
            if(VARIABLE.other_item_count >= VARIABLE.typeArray.length){
                return false;
            }
            VARIABLE.other_item_count++;
            VARIABLE.type_item_count = VARIABLE.other_item_count;
            break;
    }
    return true;
};

FUN.float = function (v) {

    return parseFloat(v);
};


FUN.init = function(){
    VARIABLE.Food.food_total = 0;
    VARIABLE.Amuse.amuse_total = 0;
    VARIABLE.Shopping.shopping_total = 0;
    VARIABLE.Bus.bus_total = 0;
    VARIABLE.Other.other_total = 0;
};