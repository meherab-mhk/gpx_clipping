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
  @if(session()->has('success'))
    <div class="alert alert-success">
       <h4>{{ session()->get('success') }}</h4> 
    </div>
@endif
  <!-------------------------Menu part end----------------------------->
  <!-------------------------Banner part start----------------------------->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-6 col-xxl-6">
          <div class="banner_text text-center">
            <h1>HERE WE ARE</br>THE GPX PARADISE</h1>
            <p>We do photoshop clipping paths & image editing for you</p>
            <h3>Let's Go</h3>
            <h4>Try with a free sample</h4>
            <p>Upload your first file & test our services</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUploadForm">Upload</button>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 col-xxl-6"></div>
      </div>
    </div>
  </section>
  <!-------------------------Banner part end------------------------------->



  <!-- Modal For email and image upload -->
  <div class="modal fade" id="modalUploadForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Upload a image</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>
      <div class="modal-body mx-3">


      <form method='post' action='/add-order' enctype="multipart/form-data">
            @csrf 
           <i class="fas fa-user prefix grey-text pb-3"></i> Your Name
           <input type="text" name="username" id="" class='form-control' required><br>

          <i class="fas fa-envelope prefix grey-text pb-3"></i> Your email
           <input type="email" name="useremail" id="" class='form-control' required><br>


           <i class="fas fa-comment prefix grey-text pb-3"></i> Instructions 
          <input type="text" name='instructions' id='' class='form-control'><br>

           <i class="fas fa-image prefix grey-text pb-3"></i> Upload images 
          <input type='file' name='images[]' id='file' class='form-control' multiple required><br>

      
        <button type="submit" class="btn btn-success" value='Upload' id='btn_upload'>Upload</button>
        </form>

      

      </div>

    </div>
  </div>
</div>


  <!-- End of modal -->

  <!-------------------------Service part start---------------------------->
  <section id="service">
    <div class="container">
      <div class="service_heading_text">
        <h3>OUR SERVICES</h3>
      </div>
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="card3">
            <div class="card_text">
              <div class="row pl-0">
                <div class="col-lg-4 col-xl-4 col-xxl-4 clipping_text">
                  <h3>Clipping Paths</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Maxime esse est, iure, vel qui officiis, similique sapiente iste
                    ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                    Possimus.
                  </p>
                </div>
                <div class="col-lg-8 col-xl-8 col-xxl-8" style="padding:0;">
                  <div class="clipping-img">
                    <img src="images/clippingpath.jpg" alt="clipping-img" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
          <div class="col-lg-12 card3">
            <div class="row">
              <div class="col-lg-4 card_text clipping_text">
                
                <h3>Clipping Paths</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Maxime esse est, iure, vel qui officiis, similique sapiente iste
                      ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                      Possimus.
                    </p>
              </div>
              <div class="col-lg-8">
                <img src="images/clippingpath.jpg" alt="clipping-img" class="img-fluid">
              </div>
            </div>
          </div>
        </div> -->
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="card5">
            <div class="card_text">
              <div class="row">
                <div class="col-lg-8 col-xl-8 col-xxl-8" style="padding: 0;">
                  <div class="retouch-img">
                    <img src="images/retouch.jpg" alt="retouch-img" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-xxl-4" style="background-color: #dbf0e575;">
                  <h3>Retouch</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Maxime esse est, iure, vel qui officiis, similique sapiente iste
                    ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                    Possimus.
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="card4">
            <div class="card_text">
              <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-4 recolor_box">
                  <h3>Recolor</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Maxime esse est, iure, vel qui officiis, similique sapiente iste
                    ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                    Possimus.
                  </p>
                </div>

                <div class="col-lg-8 col-xl-8 col-xxl-8" style="padding:0;">
                  <div class="recolor-img">
                    <img src="images/recolor.jpg" alt="recolor-img" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="card">
            <div class="card_text">
              <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-4">
                  <h3>Masking</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Maxime esse est, iure, vel qui officiis, similique sapiente iste
                    ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                    Possimus.
                  </p>
                </div>
                <div class="col-lg-8 col-xl-8 col-xxl-8">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/masking.jpg" class="d-block w-100 img-fluid" alt="mask-img1">
                      </div>
                      <div class="carousel-item">
                        <img src="images/masking2.jpg" class="d-block w-100 img-fluid" alt="mask-img2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="card2">
            <div class="card_text">
              <div class="row">
                <div class="col-lg-6 col-xl-6 col-xxl-6">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/manequin.jpg" class="d-block w-100 img-fluid" alt="mannequin-img1">
                      </div>
                      <div class="carousel-item">
                        <img src="images/manequin2.jpg" class="d-block w-100 img-fluid" alt="mannequin-img2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-xxl-6">
                  <h3>Ghost Mannequin</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Maxime esse est, iure, vel qui officiis, similique sapiente iste
                    ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                    Possimus.
                  </p>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>





      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="card6">
            <div class="card_text">
              <div class="row">
                <div class="col-lg-8 col-xl-8 col-xxl-8">
                  <div class="drop_shadow_img">
                    <img src="images/dropshadow.jpg" alt="dropshadow-img" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-xxl-4">
                  <h3>Drop Shadow</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Maxime esse est, iure, vel qui officiis, similique sapiente iste
                    ut tenetur non dicta nam assumenda adipisci odit id quidem numquam.
                    Possimus.
                  </p>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>







    </div>

  </section>

  <!-------------------------How works part start---------------------------->
  <section id="works">
    <div class="container">
      <div class="row">
        <div class="col lg-12 col-xl-12 col-xxl-12">
          <div class="works_text">
            <h3>HOW GPX WORKS</h3>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-4 col-xl-4 col-xxl-4">
          <div class="works_content" style="background-color: #ffeaa727;">
            <img src="images/upload.png" alt="upload" class="img-fluid">
            <h3> Step 1: Upload Images</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, asperiores.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, doloribus!</p>
          </div>

        </div>
        <div class="col-lg-4 col-xl-4 col-xxl-4">
          <div class="works_content" style="background-color: #91fcde25;">
            <img src="images/message.png" alt="message" class="img-fluid">
            <h3> Step 2: Processing in 5 min </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, asperiores.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, doloribus!</p>
          </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-xxl-4">
          <div class="works_content" style="background-color: #9fcfff28;">
            <img src="images/download.png" alt="download" class="img-fluid">
            <h3> Step 3: Download Files</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, asperiores.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, doloribus!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------How Works part end---------------------------->
  <!-------------------------Pricing part start------------------------------>
  <section id="price">
    <div class="container">
      <div class="row">
        <!-- <div class="price_heading_text">
              <h3>OUR PRICING</h3>
            </div> -->
        <div class="row pricing_bg">
          <div class="col-lg-12 col-xl-12 col-xxl-12">
            <div class="pricing_text text-center">
              <h3>We start our service at only $0.29 per images </h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Non voluptatibus pariatur fuga, amet est officia vero perferendis
                animi similique voluptas voluptatum quam nesciunt alias blanditiis
                cumque eos repudiandae? Nam, tenetur?<br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Non voluptatibus pariatur fuga, amet est officia vero perferendis
                animi similique voluptas voluptatum quam nesciunt alias blanditiis
                cumque eos repudiandae?<br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Non voluptatibus pariatur fuga
              </p>
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUploadForm">Upload</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------Pricing part end------------------------------>
  <!-------------------------Counter part start------------------------------>
  <section id="counter">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="counter_content">
            <h3>100+</h3>
            <p>Photoshop Professionals </p>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="counter_content">
            <h3>1200+</h3>
            <p>Happy Customers </p>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="counter_content">
            <h3>50000+</h3>
            <p>Images Served </p>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-xxl-3">
          <div class="counter_content">
            <h3>$ 12000+</h3>
            <p>Donated to Charity </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-------------------------Counter part end------------------------------>
  <!-----------------Footer part Start-------------------->
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
          <div class="footer-head text-center">
            <a href="#"><img src="images/GPX.png" alt="logo" class="img-fluid"></a>
            <hr><br>
          </div>
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
















