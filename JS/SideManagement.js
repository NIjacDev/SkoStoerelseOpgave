$(document).ready(function(){

    $("#Hjem").click(function(){
        $("#OBI").css("display", "block");
        $("#SBE").css("display", "none");
        $("#SSG").css("display", "none");
    });

    $("#Brugere").click(function(){
        $("#OBI").css("display", "none");
        $("#SBE").css("display", "block");
        $("#SSG").css("display", "none");
    });

    $("#Oversigt").click(function(){
        $("#OBI").css("display", "none");
        $("#SBE").css("display", "none");
        $("#SSG").css("display", "block");
    });

  });