document.getElementById('get_data').addEventListener('click', loadJokes);


function loadJokes()
{
    let xhr = new XMLHttpRequest(); 

    xhr.open('GET', 'https://jsonplaceholder.typicode.com/todos/', true);

    xhr.onload = function()
    {
        if(this.status === 200)
        {
            // console.log(this.responseText); 
            let data = JSON.parse(this.responseText); 
            console.log(data)
        }
    }
    xhr.send();
}