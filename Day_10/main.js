document.getElementById('get_data').addEventListener('click', loadData);

function loadData()
{
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'data.txt', true);
    xhr.onload = function(){

        if(this.status === 200){
            console.log(this.responseText)
        }
    }
    xhr.send();
    // console.log(xhr);
}