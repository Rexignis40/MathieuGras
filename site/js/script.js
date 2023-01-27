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

async function GetPrestation(){
    if(IsSend) return;
    IsSend = true;
    let prestation = [];
    prestation["title"] = $("#title").val();
    prestation["description"] = $("#description").val();
    $.post("php/updatePrestation.php",
    {
        p: prestation
    },
    function(data, status){
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
                html += '<div class="annonce"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="category"></p><p class="name">'+ data[i]["name"] +'</p><p class="price">'+ data[i]["price"] +'</p><form method="post"><input name="id" type="hidden" value="'+ data[i]["id"] +'" /><input name="name" type="hidden" value="'+ data[i]["name"] +'" /><input name="price" type="hidden" value="'+ data[i]["price"] +'" /><input name="product" type="submit" value="Buy"></form></div>'+'<button onclick="favorie('+ data[i]["id"] +')">Like</button>';
            }
            $("#content").html(html);
        }
        IsSend = false;
    }, "json");
}

function GetUserInfo(_id){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserInfo.php",
    {
        id: _id
    },
    function(data, status){
        if(data.length != undefined){
            $("#content").html(data);
        }
        IsSend = false;
    });
}

function GetUserGalerie(_id){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserGalerie.php",
    {
        id: _id
    },
    function(data, status){
        console.log(data);
        if(data.length != 0){
            let html = "";
            for(i = 0; i < data.length; i++){
                html += '<div class="image"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="name">'+ data[i]["name"] +'</p><button onclick="favorie('+ data[i]["id"] +')">Like</button></div>';
            }
            $("#content").html(html);
        }
        IsSend = false;
    }, "json");
}

function BuyBasket(_basket, u){
    if(IsSend) return;
    IsSend = true;
    console.log(_basket);
    console.log(u);
    $.post("php/buyBasket.php",
    {
        basket: _basket,
        user: u
    },
    function(data, status){
        $("#basket").html("");
        IsSend = false;
    });
}

function favorie(id){
    value = $("#uid").val();
    if(IsSend) return;
    IsSend = true;
    $.post("php/addFavorie.php",
    {
        uid: value,
        img: id 
    },
    function(data, status){
        IsSend = false;
    });
}

$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });