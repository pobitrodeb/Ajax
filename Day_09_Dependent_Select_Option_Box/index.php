<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ajax | pobitordeb </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
 <section class="py-5">
    <div class="contaer">
        <h2 class="text-center"> Please Select The Programme And Framework To Continue </h2>
    </div>
    <div class="container col-md-6">
      
        <div class="card">
            <div class="card-body">
                <form action="">

                   <div class="row mb-4">
                    <div class="col-md-3"> Program : </div>
                    <div class="col-md-9">
                        <select name="" id="" class="form-control" onchange="myLang(this.value)"> 
                            <option>--- Select Language ---</option>
                            <option> PHP  </option>
                            <option> JavaScript </option>
                            <option> Python </option>
                        </select>
                    </div>
                   </div>

                   <!--  Framework  -->
                   <div class="row mb-4">
                    <div class="col-md-3"> Framwork </div>
                    <div class="col-md-9">
                        <select name="" id="frameWorkList" class="form-control"> 
                          <option>-- Select FrmaeWork --- </option>
                          
                        </select>
                    </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
 </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
    <script src="./js/main.js"></script>
    <script>
       function myLang(data){
      //  alert(data);
            const ajaxreq = new XMLHttpRequest(); 
            ajaxreq.open('GET', 'http://localhost/php_laravel_ajax_learning/Day_09_Dependent_Select_Option_Box/formdata.php?selectvalue='+data,'TRUE');
            ajaxreq.send();

            ajaxreq.onreadystatechange = function (){
                if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
                    document.getElementById('frameWorkList').innerHTML= ajaxreq.responseText;
                }
            }
        }
    </script>  
</body>
</html>