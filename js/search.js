//JS document
 $(function(){
var nav=$(".fixed"); //得到导航对象
var win=$(window); //得到窗口对象
var sc=$(document);//得到document文档对象。
win.scroll(function(){
  if(sc.scrollTop()>=70){
    nav.addClass("fixednav"); 
   $(".fixednav").fadeIn(); 
  }else{
   nav.removeClass("fixednav");
   $(".fixednav").fadeOut();
  }
})  
      //鼠标经过li对象时，查找li下的ul.
 $("ul li").hover(function(){
$(this).find("ul").show();
 },function(){
$(this).find("ul").hide();
 })
 })

  function searchbox() {
            var divDisp = document.getElementById("search").style.display;
            if (divDisp == "block") {
                document.getElementById("search").style.display = "none";
            } else {
                document.getElementById("search").style.display = "block";
            }
        }

        $(function(){
            var m_st, m_po = 250; //滚动到250像素时
            $(window).scroll(
                function () {
                    m_st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
                    if (m_st > m_po) {
                        $('.header').slideDown();//classNmae : tips
                    }else{
                        $('.header').slideUp();//classNmae : tips
                    }
                })
                        
        });
function time1() 
{ 
var now,n,y,r,h,m,s; 
now=new Date(); 
h = now.getHours(); 
m =now.getMinutes(); 
s = now.getSeconds(); 
if(h<10) h="0"+h; 
if(m<10) m="0"+m; 
if(s<10) s="0"+s; 
document.getElementById("time").innerHTML="现在时间是：" + h + ":" + m + ":" + s; 
setTimeout("time1();", 1000); 
} 
time1(); 

function checkform() {
 if(commentform.comname.value==""){
 alert("\昵称不能为空！");
 return false;
 }
 if(commentform.comment.value==""){
 alert("\PO主很期待你的精彩评论哦 ~");
 return false;
 }
 return true;
}


