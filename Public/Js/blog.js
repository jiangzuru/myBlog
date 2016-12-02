$(function () {
    $(".reply_btn").click(function () {
        var writer = $("#cm_writer").val();
        var content  = $("#cm_comment").val();
        var articleId = encodeURI($("#cm_articleId").val());
        $.ajax({
            url:"/index.php/Blog/Comment/addComment",
            type:"POST",
            dataType:"json",
            data:{
                writer:writer,
                content:content,
                articleId:articleId
            },
            success:function(){
                window.location = "/Index/index";
            }
        })
    })

    $(".blog_reply").click(function () {
        $(".mb").css("display","block");
        $("#inputBox").fadeIn("slow");
    })

    $("#submit_btn").click(function () {
        var writer = $("#cm_writer").val();
        var content  = $("#cm_comment").val();
        var articleId = encodeURI($("#cm_articleId").val());
        console.log("article is:"+articleId);
        $.ajax({
            url:"/index.php/Blog/Comment/addComment",
            type:"POST",
            dataType:"json",
            data:{
                writer:writer,
                content:content,
                articleId:articleId
            },
            success:function(){
                window.location = "/Index/detail/id?" + articleId;
            }
        })
    })
    

});

