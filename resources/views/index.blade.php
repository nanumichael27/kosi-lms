<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Kosi</title>
</head>
<body id="landing-body">
    <header id="landing-header">
        <a href="{{route('index')}}" class="logo">
            <img src="{{asset('img/logo.svg')}}" alt="brand logo" class="img-fluid">
        </a>
        <nav>
            <ul>
                <li>
                    <a href="#landing-showcase">Home</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#offer">Courses</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <div class="buttons">
                <a href="{{route('login')}}" class="text-warning">sign in</a>
                <a href="{{route('register')}}" class="start-btn">Start Now</a>
            </div>
        </nav>
        <div class="toggle">
            <i class="fa fa-bars fa-2x icon-menu"></i>
        </div>
    </header>
    <section id="landing-showcase" class="landing-showcase">
        <div class="container-fluid">
            <div class="row">
                <div class="landing-showcase-details col-12 col-md-10 col-lg-6 my-4">
                    <h2>Launch your career in tech by taking our courses</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut deleniti iusto quibusdam delectus numquam quaerat repellat porro enim perferendis, accusantium odio! Quas aperiam odit explicabo?</p>
                    <div class="col-5 col-md-5 px-0">
                        <a href="{{route('register')}}" class="btn btn-warning get-started-btn">Get Started</a>
                    </div>
                   </div>
            </div>
        </div>
    </section>
   <section id="about" class="about-us d-flex justify-content-around py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="about-text text-dark col-12 col-md-6 my-4">
                    <h2>About <span class="color">Us</span></h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Deserunt tenetur a, repudiandae ab suscipit qui voluptatum.
                        Iure asperiores officia et soluta temporibus ut amet dolores
                        laborum optio ea ipsum accusamus eum saepe rerum eligendi adipisci tempora,
                        vero ex assumenda repellat voluptas? Fugit laboriosam similique tempore
                        ipsum vel minima magnam alias.</p>
                    <div class="col-12 col-md-4 px-0">
                        <a href="{{route('register')}}" class="btn btn-warning get-started-btn mt-5">Explore</a>
                    </div>
                </div>
                <div class="code-img col-12 col-md-6 my-4">
                    <img src="{{asset('img/undraw_develop_app_re_bi4i.svg')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
   </section>
   <section id="offer" class="offer">
       <h3 class="text-center text-secondary py-4">Courses we offer</h3>
       <div class="container-fluid">
           <div class="row">
               <div class="col-12 col-md-3 my-4">
                   <div class="offer-box d-flex flex-column">
                       <img src="https://pluralsight.imgix.net/paths/python-7be70baaac.png" alt="">
                        <div class="offer-text">
                            <h4>Python Programming.</h4>
                            <span>20 courses</span>
                            <div class="view-details mt-auto">
                                <button class="btn btn-outline-dark btn-sm px-5 my-2">View</button>
                             </div>
                        </div>
                   </div>
               </div>
               <div class="col-12 col-md-3 my-4">
                <div class="offer-box d-flex flex-column">
                    <img src="https://pluralsight2.imgix.net/paths/images/javascript-542e10ea6e.png" alt="">
                     <div class="offer-text">
                         <h4>JavaScript Programming.</h4>
                         <span>20 courses</span>
                         <div class="view-details mt-auto">
                            <button class="btn btn-outline-dark btn-sm px-5 my-2">View</button>
                         </div>
                     </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-4">
                <div class="offer-box d-flex flex-column">
                    <img src="https://pluralsight.imgix.net/paths/path-icons/angular-14a0f6532f.png" alt="">
                     <div class="offer-text">
                         <h4>Angular Programming.</h4>
                         <span>20 courses</span>
                         <div class="view-details mt-auto">
                            <button class="btn btn-outline-dark btn-sm px-5 my-2">View</button>
                         </div>
                     </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-4">
                <div class="offer-box d-flex flex-column">
                    <img src="https://pluralsight.imgix.net/paths/path-icons/csharp-e7b8fcd4ce.png?" alt="">
                     <div class="offer-text">
                         <h4>C# Programming.</h4>
                         <span>20 courses</span>
                         <div class="view-details mt-auto">
                            <button class="btn btn-outline-dark btn-sm px-5 my-2">View</button>
                         </div>
                     </div>
                </div>
            </div>
           </div>
           <div class="more-btn d-flex mx-auto col-md-4 mt-4">
            <a href="courseSearch.html" class="btn btn-warning get-started-btn">Go to courses</a>
           </div>
       </div>
   </section>
   <section id="contact" class="contact">
       <h3 class="text-secondary text-center py-4">Contact Us</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 my-5">
                    <div class="contact-card">
                        <h4 class="text-light text-center py-3">Contact card</h4>
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" rows="7" class="form-control" placeholder="Type message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning get-started-btn text-center" value="SEND MESSAGE">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-5 ml-auto text-center my-5">
                    <div class="contact-text">
                        <h4>We look forward to hearing from you</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam pariatur in eligendi error quidem modi dolores incidunt alias fuga praesentium!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eaque necessitatibus sequi culpa vitae voluptatum cupiditate, architecto tempora perferendis blanditiis excepturi assumenda neque sit officia ut. Cupiditate optio nobis laborum inventore, impedit velit neque nulla ipsam, maxime, at autem minus!</p>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <footer class="footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="contact-links">
                <img src="{{asset('img/logo.svg')}}" alt="logo">
                <ul>
                    <li><a href=""><i class="fa fa-envelope "></i><span class="pl-3">hi@kosi.com</span></a></li>
                    <li><a href=""><i class="fa fa-phone-square"></i><span class="pl-3">+2347018863916</span></a>
                    </li>
                    <li><a href=""><i class="fa fa-address-card"></i><span class="pl-3">20-26 Enu Owa Street
                                Lagos.</span></a></li>
                </ul>
            </div>
            <div class="pages-link">
                <h4>Pages</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Newsletters</a></li>
                    <li><a href="">Contact us</a></li>
                </ul>
            </div>
            <div class="other-links">
                <h4>Other links</h4>
                <ul>
                    <li><a href="">Privacy and cookie policy</a></li>
                    <li><a href="">Terms ans condition</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Pricing</a></li>
                </ul>
            </div>
            <div class="legal-link">
                <h4>Legal</h4>
                <ul>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Privacy policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <ul class="icons text-light">
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="{{asset('js/landing.js')}}"></script>
</body>
</html>