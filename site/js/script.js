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
    $.post("php/getImg.php",
    {
        c: cat,
        o: offset
    },
    function(data, status){
        if(data.length != 0){
            let html = "";
            for(i = 0; i < data.length; i++){
                html += '<div class="annonce"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="category"></p><p class="name">'+ data[i]["name"] +'</p><p class="price">'+ data[i]["price"] +'</p></div>';
            }
            $("#content").html(html);
        }
        IsSend = false;
    }, "json");
}

$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });