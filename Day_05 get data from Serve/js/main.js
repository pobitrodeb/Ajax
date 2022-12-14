$(document).ready(function(){
    $('#btnClick').click(function(){
        $('#loadData').load('../content.html', function(){
            alert("This is done.."); 
        });
    })
});
