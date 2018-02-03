function loadUsersOnline() {

    $.get("functions.php?onlineusers=result",function(data){
//targeting the class name from the  header
        $(".useronline").text(data);


    })

}

setInterval(function () {

   loadUsersOnline()
},500);