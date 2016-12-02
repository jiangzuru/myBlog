$(function (){
    var articleId = encodeURI($("#cm_articleId").val());
    console.log(articleId);
    $.ajax({
        url: "/index.php/Blog/Index/getComment",
        type: "POST",
        dataType: "json",
        data:{
            id: articleId
        },
        success:function (data) {
            console.log(data);
            var ob = new Object();
            for(ob in data){
                var str = '<li class="display_flex flex_c"><div><img src="/Public/Image/noavatar_default.jpg"></div>'
                    + '<div class="flex_1"><h5>'+data[ob]["writer"]+'</h5><p>'+data[ob]["content"] +
                    '</p><div><a class="blog_reply" href="#">回复</a></div></div></li>';
                $(".comment_ul").append(str);
            }
    }
})
}
)