let Reserve = (event)=>{
    
    let Reserve_pop_up_window = document.getElementById("close_pop");
    let payment = document.getElementById("payment");

    setTimeout(()=>{

        payment.style.display = 'block';
        Reserve_pop_up_window.style.display = 'block';

    },600)

}

let sidenavValue = 20
let restOfPage = 80

let checkWindowWidth = ()=>{

    if(window.innerWidth < 801){
        sidenavValue = 62;
        restOfPage = 38;
    }
    else{
        sidenavValue = 20
        restOfPage = 80
    }
    
}

window.addEventListener('scroll',()=>{

    let sidenav = document.querySelector(".navbar").style;
    let background_picture = document.querySelector(".background_picture").style;
    let reservation = document.querySelector("#reservation").style;
    let footer = document.querySelector(".footer").style;
    console.log(window.scrollY);
    
    if(window.scrollY > 437 ){
        sidenav.cssText = 'background-color: white ; color: #46344E; box-shadow: 0 0.5px 12px #e6e6e6';
               
    }
    else if(window.scrollY > 90){
        sidenav.cssText = 'background-color: #d9d9d9 ; color: #46344E'; 
    }

    else{
        sidenav.cssText = 'background-color: transparent; color: white';
    }
})

let Close_pop_up = ()=>{

    let pop_up = document.getElementById("close_pop");
    let payment = document.getElementById("payment");
    let confirm = document.getElementById("confirm");

    setTimeout(()=>{

        payment.style.display = 'none';
        confirm.style.display = 'none';
        pop_up.style.display = 'none';

    },500)

}

let menu = 0;
let toggleMenu = ()=>{
    
    let menu_icon = document.querySelector(".menu").style;
    let iconChange = document.querySelector("#icon")
    let sidenav = document.querySelector(".sideNav").style;
    let background_picture = document.querySelector(".background_picture").style;
    let reservation = document.querySelector("#reservation").style;
    let footer = document.querySelector(".footer").style;
    let blur_sideNav = document.querySelector(".blur_sideNav").style
    let navbar = document.querySelector(".navbar").style;

    checkWindowWidth()

    if(menu === 0){

        
        if(window.innerWidth <= 801){
            
            setTimeout(()=>{
                iconChange.classList = "fas fa-long-arrow-alt-right menu"
            },700)
            blur_sideNav.cssText = "opacity: 1; z-index: 2";
            sidenav.width = `${sidenavValue}%`;
            navbar.width = `${restOfPage}%`;
            menu_icon.cssText = "position: fixed; right: 0; z-index: 3; color: #46344E; transition: all 1.3s ease-in-out"
            menu = 1
        }
        else if(window.innerWidth > 437){
            reservation.width = `${restOfPage}%`;
            footer.width = `${restOfPage}%`
            background_picture.width = `${restOfPage}%`;
            setTimeout(()=>{
                iconChange.classList = "fas fa-long-arrow-alt-right menu"
            },700)
            blur_sideNav.cssText = "opacity: 1; z-index: 2";
            sidenav.width = `${sidenavValue}%`;
            navbar.width = `${restOfPage}%`;
            menu_icon.cssText = "position: fixed; right: 0; z-index: 3; color: #46344E; transition: all 1.3s ease-in-out"
            menu = 1
        }
    }
    else{

        menu_icon.cssText = "position: fixed; right: 20%; z-index: 3; color: #46344E; transition: all 2.3s ease-in-out"
        reservation.width = "100%";
        footer.width = "100%"
        background_picture.width = "100%";
        navbar.width = "100%";
        sidenav.width = "0px"
        blur_sideNav.cssText = "opacity: 0; z-index: -1";
        setTimeout(()=>{
            iconChange.classList = "fa fa-bars menu"
        },700)
        menu_icon.cssText = "position: relative; right: 0%; transition: right 1.3s ease-in-out"
        menu = 0
    }
}

let linkTo = (id)=>{

    let about = document.getElementById("about_header")
    let info = document.getElementById("info_header")

    if(id === 'about'){
        about.style.cssText = "animation: focus 0.3s 10 ease-in-out alternate-reverse;"
    
    }
    else{
        info.style.cssText = "animation: focus 0.3s 10 ease-in-out alternate-reverse;"
    }
    setTimeout(()=>{
        about.style.cssText = "animation: none;"
        info.style.cssText = "animation: none;"
    },3000)

    

    toggleMenu();
}

let make_payment = ()=>{

    let payment = document.getElementById("payment");
    let confirm = document.getElementById("confirm");
    let loading = document.getElementById("loading_button");

    setTimeout(()=>{
        loading.style.cssText = 'color: white; background-color:  #46344E;'
        loading.textContent = "Payment is Loading...";

    },1000);

    setTimeout(()=>{
        loading.textContent = "Validating transaction...";

    },3000);
    
    
    setTimeout(()=>{

        payment.style.display = 'none'
        loading.textContent = "Click here to make Payment";
        confirm.style.display = 'block'

    },6000);

}

let count = 0;

let picFront = ()=>{

    count += 25;
    let picPlace = document.getElementById("pic_place");

    if(count > 75){
        picPlace.style.transform = "translateX(0%)"
        count = 0
    }

    else{
        picPlace.style.transform = `translateX(-${count}%)`;
    }    

}
 let loader = ()=>{

    setInterval(picFront, 10000);
 }
    

let picBack = ()=>{

    count -= 25;
    "yaya"
    let picPlace = document.getElementById("pic_place");

    if(count < 0){
        count = 75;
        picPlace.style.transform = "translateX(-100%)";
    }
    
    picPlace.style.transform = `translateX(-${count}%)`;

}