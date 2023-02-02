IsSend = false;
function SwitchTheme(theme){
    if(!theme){
        document.documentElement.style.setProperty('--white', 'black');
        document.documentElement.style.setProperty('--black', 'white');
        $("#logo").attr("src", "img/dark_logo.png");
        return;
    }
    document.documentElement.style.setProperty('--white', 'white');
    document.documentElement.style.setProperty('--black', 'black');
    $("#logo").attr("src", "img/logo.png");
}

function ChangeTheme(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/setTheme.php",
    {
    },
    function(data, status){
        SwitchTheme(parseInt(data));
        IsSend = false;
    });
}

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
    $.post("php/getListUser.php",
    {
        search: $("#search-bar").val()
    },
    function(data, status){
        $("#userList").html(data);
        IsSend = false;
    });
}

function SendImgPrest(id){
    if(IsSend) return;
    IsSend = true;

    var form = new FormData();
    form.append("uid", id);
    form.append("name", $("#name-"+id+"-img").val());
    form.append("img", $("#img-"+id+"")[0].files[0]);

    $.ajax({
        url: 'php/SendImgPrest.php',
        type: 'post',
        data: form,
        contentType: false,
        processData: false,
        success: function(response){
            $("#name-"+id+"-img").val("");
            $("#img-"+id).val("");
           IsSend = false;
        },
     });
}

function SetPrestation(){
    if(IsSend) return;
    IsSend = true;

    var form = new FormData();
    form.append("title", $("#title").val());
    form.append("desc", $("#description").val());
    form.append("price", $("#price").val());
    form.append("img1", $("#img1")[0].files[0]);
    form.append("img2", $("#img2")[0].files[0]);

    $.ajax({
        url: 'php/setPrestation.php',
        type: 'post',
        data: form,
        contentType: false,
        processData: false,
        success: function(response){
           IsSend = false;
        },
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
        $("#prest"+_id).css("display", "none");
        IsSend = false;
    });
}

//Portfolio

function SetPortfolio(){
    if(IsSend) return;
    IsSend = true;

    var form = new FormData();
    form.append("title", $("#title-portfolio").val());
    form.append("desc", $("#description-portfolio").val());
    form.append("img1", $("#img1-portfolio")[0].files[0]);
    form.append("img2", $("#img2-portfolio")[0].files[0]);
    form.append("img3", $("#img3-portfolio")[0].files[0]);
    form.append("img4", $("#img4-portfolio")[0].files[0]);

    $.ajax({
        url: 'php/setPortfolio.php',
        type: 'post',
        data: form,
        contentType: false,
        processData: false,
        success: function(response){
            IsSend = false;
        },
     });
}

// function GetPortfolio(){
//     for(i = 0; i < 4; i++){
//         document.documentElement.style.setProperty('--carousel-img-portfolio', 'url(img/portfolio/portfolio1img'+i+'.png)');
//     }
// }


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
    GetImgStore(cat, ($("#num-page").val() - 1) * 12);
}

lastScreenWidth = 5000;
actualCat = -1;
actualOffset = 0;
window.addEventListener('resize', function(event) {
    w = event.currentTarget.innerWidth;
    if(w < 1000 && lastScreenWidth >= 1000 || w > 1000 && lastScreenWidth <= 1000 || w < 1300 && lastScreenWidth >= 1300 || w > 1300 && lastScreenWidth <= 1300 || w > 1500 && lastScreenWidth <= 1500 || w < 1500 && lastScreenWidth >= 1500) GetImgStore(actualCat, actualOffset);
    lastScreenWidth = w;
}, true);

async function GetImgStore(cat, offset){
    if(imgCount == 0) await GetImgCount();
    if(IsSend || offset > imgCount + 12) return;
    IsSend = true;
    actualCat = cat;
    actualOffset = offset;
    $.post("php/getImg.php",
    {
        c: cat,
        o: offset
    },
    async function(data, status){
        let html = "";
        let page = "";
        if(offset != 0){
            page += "<button class='pageBefore' onclick='GetImgStore("+cat+","+(offset-12)+")'><i class='fa-solid fa-arrow-left'></i></button>";
        }
        else{
            page += "<button class='pageBeforeImpossible' ><i class='fa-solid fa-arrow-left'></i></button>";
        }
        page += "<input id='numPage' type='number' value='"+(offset/12+1)+"' ondbclick='RemoveInput('num-page')' onchange='GetImgFromInput("+cat+")'/><p>"+(Math.ceil(imgCount/12))+"</p>";
        if(data.length != 0){
            modulo = 4;
            if(window.innerWidth < 1700){
                if(window.innerWidth < 1300){
                    if(window.innerWidth < 1100){
                        modulo = 1;
                    }
                    else{
                        modulo = 2;
                    }
                }
                else{
                    modulo = 3;
                }
            }
            html += "<div class='annonceLine'>";
            for(i = 0; i < data.length; i++){
                if(i == 12) break;
                    if(i != 0 && i % modulo == 0){
                        html += "</div>";
                        if(i != 12) html += "<div class='annonceLine'>";
                    }
                    html += '<div class="annonce"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="name">'+ data[i]["name"] +'</p><p class="cat">'+ data[i]["category"] +'</p><p class="price">'+ data[i]["price"] +'</p><button class="basket" onclick="AddToBasket('+ data[i]["id"] +',\''+ data[i]["name"] +'\','+ data[i]["price"] +')"><i class="fa-solid fa-cart-shopping"></i></button><button class="like" onclick="favorie('+ data[i]["id"] +', this)">';
                    if(data[i]["fav"] != undefined) html += '<i class="fa-solid fa-heart"></i></button></div>';
                    else html += '<i class="fa-regular fa-heart"></i></button></div>';
            }
            if(data.length == 13){
                page += "<button class='pageAfter' onclick='GetImgStore("+cat+","+(offset+12)+")'><i class='fa-solid fa-arrow-right'></i></button>";
            }
            else{
                page += "<button class='pageAfterImpossible'><i class='fa-solid fa-arrow-right'></i></button>";
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

function GetUserInfo(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserInfo.php",
    {
    },
    function(data, status){
        if(data.length != undefined){
            $("#content-user").html(data);
        }
        IsSend = false;
    });
}
function SetUserInfo(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/actions/uptateUser.php",
    {
        first_name:$("#FN").val(),
        name:$("#N").val(),
        email:$("#E").val(),
        Old_password:$("#OP").val(),
        New_password:$("#NP").val(),
        age:$("#age").val(),
        adresse:$("#A").val(),
        num:$("#Nu").val()
    },
    function(data, status){
        IsSend = false;
    });
}
function SetUserPassword(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/actions/uptateUserPassword.php",
    {
        Old_password:$("#OP").val(),
        New_password:$("#NP").val(),
    },
    function(data, status){
        console.log(data);
        IsSend = false;
    });
}

function GetUserGalerie(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserGalerie.php",
    {
    },
    function(data, status){
        let html = "";
        if(data.length != 0){
            for(i = 0; i < data.length; i++){
                html += '<div class="image"><img src="./img/user/'+ data[i]["id"] +'.png"><p class="name">'+ data[i]["name"] +'</p><button onclick="favorie('+ data[i]["id"] +', this)"><i class="fa-solid fa-heart"></i></button></div>';
            }
        }
        else{
            html += "<div><p>Vous n'avez aucune image</p></div>";
        }
        $("#content-user").html(html);
        IsSend = false;
    }, "json");
}

function GetUserBuyImg(_id){
    if(IsSend) return;
    IsSend = true;
    $.post("php/getUserBuyImg.php",
    {
        id: _id
    },
    function(data, status){
        let html = "";
        if(data.length != 0){
            for(i = 0; i < data.length; i++){
                html += '<div class="image"><img src="./img/user/'+ data[i]["id"] +'.png"><p class="name">'+ data[i]["name"] +'</p><button onclick="favorie('+ data[i]["id"] +', this)"><i class="fa-solid fa-heart"></i></button></div>';
            }
        }
        else{
            html += "<div><p>Vous n'avez aucune image</p></div>";
        }
        $("#content-user").html(html);
        IsSend = false;
    }, "json");
}

function AddToBasket(_id, _name, _price){
    if(IsSend) return;
    IsSend = true;
    $.post("php/addToBasket.php",
    {
        id: _id,
        name: _name,
        price: _price
    },
    function(data, status){
        IsSend = false;
    });
}

function GetUserLike(_id){
    $.post("php/getUserLike.php",
    {
        id: _id
    },
    function(data, status){
        let html = "";
        if(data.length != 0){
            for(i = 0; i < data.length; i++){
                html += '<div class="image"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="name">'+ data[i]["name"] +'</p><button onclick="favorie('+ data[i]["id"] +', this)"><i class="fa-solid fa-heart"></i></button></div>';
            }
        }
        else{
            html += "<div><p>Vous n'avez aucune image like</p></div>";
        }
        $("#content-user").html(html);
    }, "json");
}

function BuyBasket(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/buyBasket.php",
    {
    },
    function(data, status){
        $("#basketContent").html("");
        IsSend = false;
    });
}

function favorie(id, elm){
    if(IsSend) return;
    IsSend = true;
    $.post("php/addFavorie.php",
    {
        img: id 
    },
    function(data, status){
        if(data){
            $(elm).html('<i class="fa-solid fa-heart"></i>');
        }
        else{
            $(elm).html('<i class="fa-regular fa-heart"></i>');
        }
        IsSend = false;
    });
}

$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  setInterval(function(){
    $('.carousel.carousel-slider.carouselIndex').carousel("next");
  }, 5000);

function mail(){
    if(IsSend) return;
    IsSend = true;
    
    var form = new FormData();
    form.append("prénom", $("#name").val());
    form.append("nom", $("#family-name").val());
    form.append("email", $("#email").val());
    form.append("obj", $("#subject").val());
    form.append("msg", $("#remarque").val());
    form.append("f", $("#f")[0].files[0]);

    $.ajax({
        url: 'php/mail.php',
        type: 'post',
        data: form,
        contentType: false,
        processData: false,
        success: function(response){
           IsSend = false;
        },
     });
}
  
$(document).ready(function(){
    $('.sidenav').sidenav();
  });

