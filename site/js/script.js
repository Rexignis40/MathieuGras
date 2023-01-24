IsSend = false;

function GetListUser(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserList.php",
    {
        search: $("#search-bar").val()
    },
    function(data, status){
        $("#user-list").html(data);
        IsSend = false;
    });
}

function GetImg(cat, offset){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserList.php",
    {
        c: cat,
        o: offset
    },
    function(data, status){
        let html = "";
        data.forEach(elm => {
            
        });
        $("#content").html(html);
        IsSend = false;
    });
}

$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });