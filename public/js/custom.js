function add_hall_validate() {

   var name=document.getElementsByName('hall_name');
   var location=document.getElementsByName('hall_location');
   var city=document.getElementsByName('hall_city');
   var contact=document.getElementsByName('hall_contact');
   var category=document.getElementsByName('category');


    if(!(name[0].value.match (/^[A-Za-z]+$/))) {
        document.getElementById("hall_name").innerHTML="Enter Valid Hall Name";
        return false;
    }

    if(((location[0].value.length < 10) || (location[0].value.length > 80))) {

        document.getElementById("hall_location").innerHTML="Enter Valid Hall Location";
        return false;
    }

    if(!(city[0].value.match (/^[A-Za-z]+$/))) {

        document.getElementById("hall_city").innerHTML="Enter Valid city Name";

        return false;
    }

    if(!(contact[0].value.match (/^\d{11}$/)))  {

        document.getElementById("hall_contact").innerHTML="Enter Valid contact #";
        return false;
    }
    if((category[0].value.length ==0))  {

        document.getElementById("hall_category").innerHTML="Select category";
        return false;
    }

return true;
}

function edit_user_profile_validat() {

    var name=document.getElementsByName('name');

    var contact=document.getElementsByName('contact');

    if(!(name[0].value.match (/^[A-Za-z]+$/))) {
        document.getElementById("pname").innerHTML="Enter name  in alphabets";
        return false;
    }


    if(!(contact[0].value.match (/^\d{11}$/)))  {

        document.getElementById("pcontact").innerHTML="Enter correct contact";
        return false;
    }
    return true;
}


function signup_validat() {

    var name=document.getElementsByName('name');

    var contact=document.getElementsByName('contact');
    var cpass=document.getElementsByName('password_confirmation');
    var pass=document.getElementsByName('password');

    if(!(name[0].value.match (/^[A-Za-z]+$/))) {
        document.getElementById("rname").innerHTML="Invalid Name";
        return false;
    }
    if(!(contact[0].value.match (/^\d{11}$/)))  {

        document.getElementById("rcontact").innerHTML="Incorrect phone#";
        return false;
    }
    if(!(cpass[0].value == pass[0].value))  {

        document.getElementById("rpassword").innerHTML="Not Same passwrord";
        return false;
    }
    return true;
}



function contacus_validat(){
    var name=document.getElementsByName('name');
    var email=document.getElementsByName('email');
    var contact=document.getElementsByName('contact');

    if(!(name[0].value.match (/^[A-Za-z]+$/))) {
        document.getElementById("cname").innerHTML="Enter Name";
        return false;
    }


    if(!(email[0].value.match (/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/))) {
        document.getElementById("cemail").innerHTML="Enter email";
        return false;
    }


    if(!(contact[0].value.match (/^\d{11}$/)))  {

        document.getElementById("ccontact").innerHTML="Enter phone#";
        return false;
    }



    return true;
}