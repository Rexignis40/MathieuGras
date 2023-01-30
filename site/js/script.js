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
    let prestation = {
        title : $("#title").val(),
        description : $("#description").val()
    } 
    $.post("php/setPrestation.php",
    {
        p: JSON.stringify(prestation)
    },
    function(data, status){
        console.log(data);
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
        $("#prestation").html(data);
        IsSend = false;
    });
}

function deletePrestation(_id){
    if(IsSend) return;
    IsSend = true;
    $.post("php/deletePrestation.php",
    {
        i: _id
    },
    function(data, status){
        console.log(data);
        IsSend = false;
    });
}

//Store Page
let imgCount = 0;
function GetImgCount(){
    return $.post("php/getImgCount.php",
    {
    },
    function(data, status){
        imgCount = data;
    });
}

function RemoveInput(id){
    $("#" + id).val("");
}

function GetImgFromInput(cat){
    GetImg(cat, ($("#num-page").val() - 1) * 12);
}

async function GetImg(cat, offset){
    if(imgCount == 0) await GetImgCount();
    if(IsSend || offset > imgCount + 12) return;
    IsSend = true;
    $.post("php/getImg.php",
    {
        c: cat,
        o: offset
    },
    function(data, status){
        let html = "";
        let page = "";
        if(offset != 0){
            page += "<button onclick='GetImg("+cat+","+(offset-12)+")'><-</button>";
        }
        page += "<input id='num-page' type='number' value='"+(offset/12+1)+"' ondbclick='RemoveInput('num-page')' onchange='GetImgFromInput("+cat+")'/><p>"+(Math.ceil(imgCount/12))+"</p>";
        if(data.length != 0){
            html += "<div class='annonce-line'>";
            for(i = 0; i < data.length; i++){
                if(i == 12){
                    page += "<button onclick='GetImg("+cat+","+(offset+12)+")'>-></button>";
                }
                else{
                    if(i != 0 && i % 4 == 0){
                        html += "</div>";
                        if(i != 12) html += "<div class='annonce-line'>";
                    }
                    html += '<div class="annonce"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="category"></p><p class="name">'+ data[i]["name"] +'</p><p class="name">'+ data[i]["category"] +'</p><p class="price">'+ data[i]["price"] +'</p><form method="post"><input name="id" type="hidden" value="'+ data[i]["id"] +'" /><input name="name" type="hidden" value="'+ data[i]["name"] +'" /><input name="price" type="hidden" value="'+ data[i]["price"] +'" /><input name="product" type="submit" value="Buy"></form>'+'<button onclick="favorie('+ data[i]["id"] +')">Like</button></div>';
                }
            }
        }
        else{
            html = "<p>Il n'y a aucune image</p>";
        }
        $("#content").html(html);
        $("#page").html(page);
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

  setInterval(function(){
    $('.carousel.carousel-slider').carousel("next");
  }, 5000);

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