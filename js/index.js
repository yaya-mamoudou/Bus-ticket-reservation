let billing = (departure,destination)=>{
    let bill = 0;

    if(departure === "Yaounde" && destination === "Douala"){
        bill = 2000;
    }
    else if(departure === "Yaounde" && destination === "Buea"){
        bill = 5000;
    }
    else if(departure === "Yaounde" && destination === "Limbe"){
        bill = 5500;
    }
    else if(departure === "Yaounde" && destination === "Bamenda"){
        bill = 3000;
    }
    else if (departure === "Yaounde" && destination === "Baffoussam") {
        bill = 2500;
    }




    else if (departure === "Douala" && destination === "Yaounde") {
        bill = 2000;
    }
    else if (departure === "Douala" && destination === "Buea") {
        bill = 1500;
    }
    else if (departure === "Douala" && destination === "Limbe") {
        bill = 2000;
    }
    else if (departure === "Douala" && destination === "Baffoussam") {
        bill = 2000;
    }
    else if (departure === "Douala" && destination === "Bamenda") {
        bill = 2500;
    }




    else if (departure === "Baffoussam" && destination === "Yaounde") {
        bill = 2500;
    }
    else if (departure === "Baffoussam" && destination === "Buea") {
        bill = 2000;
    }
    else if (departure === "Baffoussam" && destination === "Limbe") {
        bill = 2500;
    }
    else if (departure === "Baffoussam" && destination === "Douala") {
        bill = 2000;
    }
    else if (departure === "Baffoussam" && destination === "Bamenda") {
        bill = 1500;
    }





    else if (departure === "Buea" && destination === "Yaounde") {
        bill = 5000;
    }
    else if (departure === "Buea" && destination === "Baffoussam") {
        bill = 2000;
    }
    else if (departure === "Buea" && destination === "Limbe") {
        bill = 1000;
    }
    else if (departure === "Buea" && destination === "Douala") {
        bill = 1500;
    }
    else if (departure === "Buea" && destination === "Bamenda") {
        bill = 2500;
    }





    else if (departure === "Limbe" && destination === "Yaounde") {
        bill = 5500;
    }
    else if (departure === "Limbe" && destination === "Baffoussam") {
        bill = 2500;
    }
    else if (departure === "Limbe" && destination === "Buea") {
        bill = 1000;
    }
    else if (departure === "Limbe" && destination === "Douala") {
        bill = 2000;
    }
    else if (departure === "Limbe" && destination === "Bamenda") {
        bill = 3000;
    }







    else if (departure === "Bamenda" && destination === "Yaounde") {
        bill = 3000;
    }
    else if (departure === "Bamenda" && destination === "Baffoussam") {
        bill = 1500;
    }
    else if (departure === "Bamenda" && destination === "Buea") {
        bill = 2500;
    }
    else if (departure === "Bamenda" && destination === "Douala") {
        bill = 2000;
    }
    else if (departure === "Bamenda" && destination === "Limbe") {
        bill = 3000;
    }


    else{
        bill = -1;
    }

    return bill;
}
let reserveState = 0;
let Reserve = (event)=>{
    
    let form = document.forms["reserve_form"];
    let Reserve_pop_up_window = document.getElementById("close_pop");
    let payment = document.querySelector("#second_form_filds");
    let confirm = document.querySelector(".payment");
    let price_place = document.getElementById("price_place");
    let date = document.forms["reserve_form"]["date"].value;
    let date1 = new Date(date);
    let filds = 0;
    
    for(let i = 0; i < form.length; i++){

        if(form[i].value.toString()){
            filds += 1;
        }
        else{
            break;
        }
    }
    
    if(filds < 8){
        alert("All fields must be filled");
        filds = 0;
        return 0;
    }

    if(form["departure"].value === form["destination"].value){
        alert("Destination and departure must be different");
        return 0;
    }


    let currentDate = new Date();

    if (date1 < currentDate) {
        alert("Date must be today or later");
        
    }

    if(calculatePrice() == -1){
        alert("Destination and departure Must be different!!!");
        return 0;
    }
    else{

        setTimeout(()=>{

            price_place.value = calculatePrice();
            confirm.style.display = 'block';
            payment.style.display = 'block';
            Reserve_pop_up_window.style.display = 'block';
    
        },600)
    }

    reserveState = 1;
    

}

 let calculatePrice = ()=>{
    let mode = document.forms["reserve_form"]["mode"].value;
    let numberOfPlaces = document.forms["reserve_form"]["number_of_places"].value;
    let destination = document.forms["reserve_form"]["destination"].value;
    let departure = document.forms["reserve_form"]["departure"].value;

    if(numberOfPlaces == ""){
        numberOfPlaces = 1;
    }

    let bill = billing(departure,destination);

    if(mode === 'VIP'){
        bill += 1500;
    }
    return (bill * numberOfPlaces);
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
    let payment = document.querySelector("#second_form_filds");
    let confirm = document.getElementById("confirm");

    setTimeout(()=>{

        payment.style.display = 'none';
        confirm.style.display = 'none';
        pop_up.style.display = 'none';

    },500)

    reserveState = 0;

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
    let popup_blur = document.querySelector(".pop_up").style;

    checkWindowWidth()

    if(menu === 0){

        
        if(window.innerWidth <= 801){
            
            setTimeout(()=>{
                iconChange.classList = "fa fa-long-arrow-right menu"
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
                iconChange.classList = "fa fa-long-arrow-right menu"
            },700)
            blur_sideNav.cssText = "opacity: 1; z-index: 3";
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

    let form = document.forms["reserve_form"]["payment_number"].value;
    let payment = document.getElementById("payment");
    let confirm = document.getElementById("confirm");
    let loading = document.getElementById("loading_button");
    let close = document.querySelector(".close_btn");

    if(!form){
        alert('input number please');
        return 0;
    }
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
        close.style.display = 'none';
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

    let username = document.querySelector(".username");
    let toHide = document.querySelectorAll("#reservation,#down,.menu");
    if(username.innerText.toString().length == 0){
        toHide[0].style.display = "none";
        toHide[1].style.display = "none";
        toHide[2].style.display = "none";
        username.innerHTML = "<span style = 'font-size: 1.1rem'>Click here to login  <a href = './authenticate/login.php'><button style = 'padding: 0.4rem'>Sign In<button></a></span>";
        
    }
    
    

    

    setInterval(picFront, 10000);
    let button = document.querySelector(".reserve_button_link").style;
    button.cssText = "transition: opacity 1.5s 1.5s ease-in;"
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



// PHP Part


