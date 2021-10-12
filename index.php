<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include 'links/links.php';?>
        <?php include 'css/style.php';?>
    </head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style P-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#previd">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  
  </div>
</nav>
<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="images\together.jfif" width="380px" width="380px">
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1> Let's Stay Safe And Fight Together Against<BR>
           Cor<span class="rotate"><img src="images/corona.png" width="120px" height="120px"></span>na Virus </h1>
      </div>
    </div>
  </div>
</div>
<!-- latest update -->
<section class="corona-update container-fluid">
  <div class="mb-3 mt-5">
    <h3 class="text-uppercase text-center">covid-19 Live Updates Of The World</h3>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-striped text-center" id="tbval">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
       <th>TotalDeaths</th>  
      <th>NewConfirmed</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
   </tr>
  </table>
</div>
</section>
<!-- about section-->
<div class="container-fluid sub_section pt-5 pb-5"id="aboutid">
  <div class="section_header text-center mb-5 mt-5">
    <h1>About Covid-19</h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5 abtimg">
      <img src="images/coronnn.jpg"width="600px" height="800px" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2> What is Covid-19 (Corona-Virus)</h2>
      <p>Coronaviruses are a large family of viruses, including some that cause the
         common cold to some that cause major diseases such as the Severe Acute Respiratory
          Syndrome (SARS) and the Middle East Respiratory Syndrome (MERS).</p>
         <p> The outbreak of coronavirus disease 2019 (COVID-19) is stressful for many people. 
     People respond to stress in different ways and it is normal to experience a range of emotions, 
      including fear, anxiety, and grief. Sharing accurate information about COVID-19 and strategies
     for coping can be an effective way to manage stress and connect with others.</p>
    </div>
  </div>
</div>
<!-- corona symptom-->
<div class="container-fluid pt-5 pb-5"id="sympid">
  <div class="section_header text-center mb-5 mt-5">
    <h1>Coronavirus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images\cough.jfif" class="img-fluid" width="150" height="150">
        <figcaption>Cough</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images\tired.jfif" class="img-fluid" width="200" height="200">
        <figcaption>Tired</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images\fever.jfif" class="img-fluid" width="150" height="150">
        <figcaption>Fever</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images\nose.png" class="img-fluid" width="150" height="150">
        <figcaption>Runny Nose</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images\breath.png" class="img-fluid" width="150" height="150">
        <figcaption>Breathing Issue</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images\throat.png" class="img-fluid" width="150" height="150">
        <figcaption>Throats</figcaption>
        </figure>
      </div>
    </div>
</div>
<!-- Prevention against virus-->
<div class="container-fluid sub_section pt-5 pb-5"id="previd">
  <div class="section_header text-center mb-5 mt-5">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class ="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images\mask.png" class="img-fluid" width="100" height="100">
            </figure>
         </div>
            <div class ="col-lg-8 col-md-8 col-12">
              <p> people should to wear face masks in indoor public places and outdoors.</p>
            </div>
         </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class ="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images\wah.jfif" class="img-fluid" width="100" height="100">
            </figure>
         </div>
            <div class ="col-lg-8 col-md-8 col-12">
              <p> people should wash their hands after visting indoor public places and outdoors.</p>
            </div>
         </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class ="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images\distance.jfif" class="img-fluid" width="100" height="100">
            </figure>
         </div>
            <div class ="col-lg-8 col-md-8 col-12">
              <p> people should maintain at least ditance of 2m in indoor public places and outdoors.</p>
            </div>
         </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class ="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images\stay.jpg" class="img-fluid" width="100" height="150">
            </figure>
         </div>
            <div class ="col-lg-8 col-md-8 col-12">
              <p> people should stay in home and should avoid unneccesarily outing.</p>
            </div>
         </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class ="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images\sani.jfif" class="img-fluid" width="100" height="150">
            </figure>
         </div>
            <div class ="col-lg-8 col-md-8 col-12">
              <p> people should regularly sanitize the place where they live after visting any outers.</p>
            </div>
         </div>
     </div>
     <div class="col-lg-4 col-md-4 col-12 mt-5">
       <div class="row">
         <div class ="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
            <img src="images\gloves.png" class="img-fluid" width="100" height="100">
            </figure>
         </div>
            <div class ="col-lg-8 col-md-8 col-12">
              <p> people should use gloves indoor public places and outdoors and should avoid touching their face.</p>
            </div>
         </div>
     </div>
  </div>
</div>
</div>
<!-- contact us form -->
<div class="container-fluid pt-5 pb-5"id="contactid">
  <div class="section_header text-center mb-5 mt-5">
    <h1>Contact Us ASAP Possible</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
      <form action="" method="POST">
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="10 digit Mobile no" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label> Select Symptoms:</label><br>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheck1" name ="symptoms[]"  value="Cold">
  <label class="custom-control-label" for="customCheck1">Cold</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheck2" name ="symptoms[]"  value="Fever">
  <label class="custom-control-label" for="customCheck2">Fever</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheck3" name ="symptoms[]"  value="Difficulty in Breath">
  <label class="custom-control-label" for="customCheck3">Difficulty in Breath</label>
  </div>
  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="customCheck4" name ="symptoms[]"  value="weakness">
  <label class="custom-control-label" for="customCheck4">weakness</label>
  </div>
</div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" >Describe your symptoms</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="msg"></textarea>
  </div>
  <button type ="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>

<button id="topbtn"><i class="fas fa-arrow-up"></i></button>
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by @Simranprasad</p>
  </div>
</footer>
  <script type ="text/javascript">
  $('.count').counterUp({
    delay:10,
    time:3000
  });


  $(document).ready(function(){
$(window).scroll(function(){
  if($(this).scrollTop()>100){
    $("#topbtn").fadeIn();
  }
  else{
    $("#topbtn").fadeOut();
  }
});
$("#topbtn").click(function(){
  $('html,body').animate({scrollTop:0},400);
});
});

function fetch(){
  $.get("https://api.covid19api.com/summary",
  function(data){
    //console.log(data['Countries'].length);
     var tbval=document.getElementById("tbval");
     for(var i=1;i<(data['Countries'].length);i++){
    var x = tbval.insertRow();
    x.insertCell(0);
    tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
    tbval.rows[i].cells[0].style.background="#7a4a91";
    tbval.rows[i].cells[0].style.color="#fff";

    x.insertCell(1);
    tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
    tbval.rows[i].cells[1].style.background="#4bb7d8";

    x.insertCell(2);
    tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
    tbval.rows[i].cells[2].style.background="#7a4a91";

    x.insertCell(3);
    tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
    tbval.rows[i].cells[3].style.background="#f36e23";

    x.insertCell(4);
    tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
    tbval.rows[i].cells[4].style.background="#4bb7d8";

    x.insertCell(5);
    tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
    tbval.rows[i].cells[5].style.background="#9cc850";

    x.insertCell(6);
    tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['TotalDeaths'];
    tbval.rows[i].cells[6].style.background="#f36e23";
     }
  }
  )
}
</script>
</body>
</html>
<?php 
include 'dbconn.php';

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['symptoms'];
  $msg=$_POST['msg'];
  $chk = "";
   foreach($symp as $chk1){
    $chk .= $chk1.",";
  }
  $insertquery= "insert into covid(userame,email,mobile,symptoms,message)
   VALUE('$username','$email','$mobile','$chk','$msg')";
   $query =mysqli_query($conn,$insertquery)or die('query unsuccessful');
}
?>