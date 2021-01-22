require('./bootstrap');



/* Local Storage Cookies JS >> Stored in layout.blade.php */

if(localStorage.getItem("termsandconditions") == "true"){
    $("#termsandconditions").hide();
}

$("#acceptBtn").on("click", function(){

    localStorage.setItem("termsandconditions", "true");
    $("#termsandconditions").fadeOut();

});

