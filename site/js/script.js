IsSend = false;

$(document).ready(function(){
    var state = false,
        links = $('.navbar-responsive__link')
      $('#nav-icon3').click(function(){
          $(this).toggleClass('open');
      if(!state) {
        $('.navbar-responsive').css("transform", "translate3d(0,0,0)")
        state = true
      } else {
        $('.navbar-responsive').css("transform", "translate3d(-100%,0,0)")
        state = false
      }
      
      })
    $.each(links, function(index,value){
      value.addEventListener("click",function(){
        if(!state) {
          $('.navbar-responsive').css("transform", "translate3d(0,0,0)")
          state = true
        } else {
          $('.navbar-responsive').css("transform", "translate3d(-100%,0,0)")
          state = false
        }
        $('#nav-icon3').removeClass('open')
      })
    })
  })

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

function SetPrestation(){
    if(IsSend) return;
    IsSend = true;
    let prestation = [];
    prestation["title"] = $("#title").val();
    prestation["description"] = $("#description").val();
    $.post("php/updatePrestation.php",
    {
        p: JSON.stringify(prestation)
    },
    function(data, status){
        let html = "";
        html += '<div><p>'+ data["title"] +'</p></div>';
        alert(html);
        IsSend = false;
    });
}

function GetPrestation(){
    if(IsSend) return;
    IsSend = true;
        $.post("php/getPrestation.php",
    {
    },
    function(data, status){
        presta = JSON.parse(data);
        console.log(data);
        let html = "";
        html += '<div class="annonce"><h2 class="titlePrestation">'+ presta["title"] +'</h2><p class="prestationDescription">'+ presta["description"] +'</p></div>';
        $("#prestation").html(html);
        IsSend = false;
    }, "json");
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
        let html = "";
        if(data.length != 0){
            for(i = 0; i < data.length; i++){
                html += '<div class="annonce"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="category"></p><p class="name">'+ data[i]["name"] +'</p><p class="price">'+ data[i]["price"] +'</p><form method="post"><input name="id" type="hidden" value="'+ data[i]["id"] +'" /><input name="name" type="hidden" value="'+ data[i]["name"] +'" /><input name="price" type="hidden" value="'+ data[i]["price"] +'" /><input name="product" type="submit" value="Buy"></form></div>'+'<button onclick="favorie('+ data[i]["id"] +')">Like</button>';
            }
        }
        else{
            html = "<p>Il n'y a aucune image</p>";
        }
        $("#content").html(html);
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

function mail(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/mail.php",
    {
        prénom:$("#name").val(),
        nom:$("#family-name").val(),
        email:$("#email").val(),
        obj:$("#subject").val(),
        Msg:$("#remarque").val()
    },
    function(data, status){
        console.log(data);
        IsSend = false;
    });
}