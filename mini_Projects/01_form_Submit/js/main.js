$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault()

        var firstname = document.getElementById("firstname").value;
        var lastname = document.getElementById("lastname").valu; 

        // 
        $.post("action.php", {firstName: firstname, lastName: lastname}, function(data){
            console.log(data);
        })
    })
})