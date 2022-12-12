function loadData()
{
    const xhr = new XMLHttpRequest(); 
    xhr.onload = function(){
        console.log('Resposed Finished'); 
        const container = document.getElementById('demo'); 
        demo.innerHTML = xhr.responseText; 
    }; 
    xhr.open("GET", "./data/data.txt", true);
  //  xhr.open("GET", "./data/data.txt", false);
    xhr.send();

    console.log('Hello'); 
}