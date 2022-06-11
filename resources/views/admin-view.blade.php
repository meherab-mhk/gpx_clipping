<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GPX Clipping</title>
  <link rel="icon" href="images/GPX.png" alt="icon">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/all.min.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('/css/media.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('/css/slick.css') }}" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-------------------------Menu part start--------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navnav">
    <div class="container">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/GPX.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-align">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li><a class="nav-link active" aria-current="page" href="/">Home</a></li>
              <li><a class="nav-link" href="#service">Services</a></li>
              <li><a class="nav-link" href="#price">Pricing</a></li>
              <li><a class="nav-link" href="#footer">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-------------------------Menu part end----------------------------->


    <div class="container text-center my-5 mx-auto">
       <h1>This is the admin</h1> 
    </div>
    <div class="col-md-6 my-5 mx-auto">
        <h1 class="text-center">Orders</h1>
        <table class="table">
        <thead>
           <th> Orders</th>
           <th>User Name</th>
           <th>User Email</th>
           <th>Instructions</th>
           <th>Images</th>
           <th>View files</th>
        </thead>
        <tbody>
            @php  $i=1;  @endphp

            @forelse ($orders as $order)

            <tr>
            <td>{{$i++;}}</td>
            <td>{{$order->username}}</td>
            <td>{{$order->useremail}}</td>
            <td>{{$order->instructions}}</td>
            <td>{{$order->images->count()}}</td>
            <td>
            <a href={{route('order.images', $order->id)}} class="btn btn-success">View</a>
        </td>
            </tr>
            @empty
            <tr>
               <td colspan="5" class="text-center">There are no orders yet!</td> 
            </tr>
           @endforelse
        </tbody>
        </table>
    </div>

  
  <!-----------------Footer part Start-------------------->
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <!-- <div class="footer-head text-center">
            <a href="#"><img src="images/GPX.png" alt="logo" class="img-fluid"></a>
            <hr><br>
          </div> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="footer-part">
            <h3>About us</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cupiditate facilis vitae nisi, possimus similique beatae
              tempore quis sed. Tenetur, repudiandae. Nisi, labore nobis
              vel laborum dolore laboriosam velit nulla alias.</p>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="footer-part">
            <h3>Info</h3>
            <hr>
            <a href="#">
              <p>Have a Try</p>
            </a>
            <a href="#">
              <p>How GPX Works</p>
            </a>
            <a href="#">
              <p>Pricing</p>
            </a>
            <a href="#">
              <p>Blog & Review</p>
            </a>
            <a href="#">
              <p>Terms & Conditions</p>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="footer-part">
            <h3>Contact</h3>
            <hr>
            <a href="#"><i class="fas fa-map-marker-alt"></i>
              <p>Mirpur,Dhaka-1216</p>
            </a>
            <a href="#"><i class="fas fa-envelope"></i>
              <p>support@doamin.com</p>
            </a>
            <a href="#"><i class="fas fa-phone"></i>
              <p>0123456789</p>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="footer-part">
            <h3>We Accept</h3>
            <hr>
            <ul class="payment-icon">
              <li><i class="fab fa-cc-visa"></i><span>Visa</span></li>
              <li><i class="fab fa-cc-paypal"></i><span>PayPal</span></li>
              <li><i class="fab fa-cc-mastercard"></i><span>MasterCard</span></li>
              <li><i class="fab fa-cc-amex"></i><span>American Express</span></li>

            </ul>




          </div>
        </div>
      </div>
      <hr>
      <div class="row footer-bottom">
        <div class="col-lg-6 col-xl-6 col-xxl-6">
          <p>@2022 Copyright GPX Paradise </p>
        </div>
        <div class="col-lg-6 col-xl-6 col-xxl-6 text-end">
          <div class="social-icon">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>

          </div>
        </div>
      </div>

    </div>
  </section>
  <!-----------------Footer part End-------------------->

  <a href="#" class="back-to-top"><i class="fas fa-location-arrow"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script src="{{asset('js/slick.js')}}"></script>
</body>

</html>
















