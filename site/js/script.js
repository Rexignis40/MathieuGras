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
    $.post("php/getUserList.php",
    {
        search: $("#search-bar").val()
    },
    function(data, status){
        $("#user-list").html(data);
        IsSend = false;
    });
}

function SendImgPrest(id){
    if(IsSend) return;
    IsSend = true;

    var form = new FormData();
    form.append("uid", id);
    form.append("name", $("#name-user-img").val());
    form.append("img", $("#img-user")[0].files[0]);

    $.ajax({
        url: 'php/SendImgPrest.php',
        type: 'post',
        data: form,
        contentType: false,
        processData: false,
        success: function(response){
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
        IsSend = false;
    });
}

//Portfolio

function SetPortfolio(){
    if(IsSend) return;
    IsSend = true;

    var form = new FormData();
    form.append("title", $("#title").val());
    form.append("desc", $("#description").val());
    form.append("img1", $("#img1")[0].files[0]);
    form.append("img2", $("#img2")[0].files[0]);
    form.append("img3", $("#img3")[0].files[0]);
    form.append("img4", $("#img4")[0].files[0]);

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

function GetPortfolio(){
    for(i = 0; i < 4; i++){
        document.documentElement.style.setProperty('--carousel-img-portfolio', 'img/portfolio/portfolio1img'+i+'.png');
    }
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
    GetImgStore(cat, ($("#num-page").val() - 1) * 12);
}

lastScreenWidth = 5000;
actualCat = -1;
actualOffset = 0;
window.addEventListener('resize', function(event) {
    w = event.currentTarget.innerWidth;
    if(w < 1100 && lastScreenWidth >= 1100 || w > 1100 && lastScreenWidth <= 1100 || w < 1300 && lastScreenWidth >= 1300 || w > 1300 && lastScreenWidth <= 1300 || w > 1500 && lastScreenWidth <= 1500 || w < 1500 && lastScreenWidth >= 1500) GetImgStore(actualCat, actualOffset);
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
            if(window.innerWidth < 1500){
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
            html += "<div class='annonce-line'>";
            for(i = 0; i < data.length; i++){
                if(i == 12) break;
                    if(i != 0 && i % modulo == 0){
                        html += "</div>";
                        if(i != 12) html += "<div class='annonce-line'>";
                    }
                    html += '<div class="annonce"><img src="./img/store/'+ data[i]["id"] +'.png"><p class="name">'+ data[i]["name"] +'</p><p class="cat">'+ data[i]["category"] +'</p><p class="price">'+ data[i]["price"] +'</p><button class="basket" onclick="AddToBasket('+ data[i]["id"] +',\''+ data[i]["name"] +'\','+ data[i]["price"] +')"><i class="fa-solid fa-cart-shopping"></i></button><button onclick="favorie('+ data[i]["id"] +', this)">';
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
function SetUserInfo(){
    if(IsSend) return;
    IsSend = true;
    $.post("php/actions/uptateUser.php",
    {
        first_name:$("#FN").val(),
        name:$("#N").val(),
        email:$("#E").val(),
        password:$("#P").val(),
        age:$("#age").val(),
        adresse:$("#A").val(),
        num:$("#Nu").val()
    },
    function(data, status){
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
        $("#content").html(html);
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
        $("#content").html(html);
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
    }, "json");
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
        $("#content").html(html);
    }, "json");
}

function BuyBasket(){
    if(IsSend) return;
    IsSend = true;
    console.log(_basket);
    console.log(u);
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
        console.log(data);
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
        IsSend = false;
    });
}
  
$(document).ready(function(){
    $('.sidenav').sidenav();
  });

