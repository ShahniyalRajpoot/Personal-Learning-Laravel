@extends('layouts.header')
<style>
    .bg-img{
        background-image: url('../../images/img2.png');
        /* url({{asset('images/img2.png')}}) */
        background-size: cover;
    }
    .form-trs{
        background-color: #a0bef75e;
        padding: 60px;
        margin-bottom: 12px;
        margin-top: 12px;
        border: 1px solid #f0ffffb3;
        border-radius: 10px;
    }
    .text-danger{
        font-size: 18px;
        text-shadow: 0 0 2px #fc1818, 0 0 4px #0000FF;
    }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
        section {
            padding: 60px 0;
           /* min-height: 100vh;*/
        }
.btn2 {
    padding: 14px 25px;
    text-transform: uppercase;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    transition: all 0.8s;
}
.red-btn {
    background: #ed1b24;
    border: 2px solid #ed1b24;
    color: #fff;
}

.red-btn:hover{
    background: #1c376c;
    color: #fff;
    border-color: #ffffff;
}

/*---------footer---------*/
footer {
    background-color: #222023;
    background-image: -webkit-linear-gradient( top, #222023, #1e2c47 );
    background-image: -moz-linear-gradient( top, #222023, #1e2c47 );
    background-image: -o-linear-gradient( top, #222023, #1e2c47 );
    background-image: linear-gradient( to bottom, #222023, #1e2c47 );
    color: #fff;
    padding: 220px 0;
    font-size: 17px;
}
footer h3 {
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
}
footer h4 {
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    display: inline-block;
    margin-bottom: 2px;
}
.about-footer li i {
    position: absolute;
    left: 0;
}
.about-footer li {
    padding-left: 40px;
    position: relative;
    margin-bottom: 40px;
}

.about-footer ul {
    margin-top: 40px;
}

footer a {
    color: #fff;
}

footer a:hover {
    color: #ed1b24;
}
.footer-title {
    border-bottom: 2px solid #a61f2d;
    padding-bottom: 25px;
    margin-bottom: 35px;
}

ul.footer-social {
    float: right;
}

ul.footer-social li {
    display: inline;
    margin-right: 16px;
}

ul.footer-social i {
    width: 30px;
    height: 30px;
    background: #fff;
    color: #222025;
    text-align: center;
    line-height: 30px;
    border-radius: 30px;
    font-size: 16px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    font-weight: 800;
}

ul.footer-social li:last-child {
    margin-right: 0px;
}

ul.footer-social i:hover {
    background: #ed1b24;
    color: #fff;
}

.page-more-info li {
    margin-bottom: 31px;
}

footer .table td:first-child {
    font-weight: 600;
    padding-left: 33px;
}

footer .table {
    color: #fff;
}
footer .table td:last-child {text-align: right;}
footer .table td {
    padding: 0px;
    border: 0;
}

footer .table tr {
}

footer .table td i {
    position: absolute;
    left: 0px;
    font-size: 21px;
    top: 6px;
}

footer .table td {
    position: relative;
    padding: 4px 0;
}
.footer-logo td {
    padding-right: 4px !important;
}

.footer-logo td:last-child {
    padding-right: 0px !important;
}
footer hr {
    border-color: #9294a0;
}

.footer-bottom p {
    text-align: right;
}
.footer-bottom {
    margin-top: 30px;
}
.open-hours hr {
    margin: 30px 0;
}
.btn-sbt{
    margin-bottom: 2px;
    padding: 10px
}

</style>
</head>
  <body class="bg-img">
    <form action="{{$url}}" method="post">
        @csrf
        @php
         $demo="1";   
        @endphp
        <div class="container form-trs">
            <h1 class="text-center">{{$title}}</h1>
            {{-- @if(Route::current()->getName()) --}}
            <x-input type="text" name="fname" label="Please Enter Your Name" :demo="$demo"  :value="@$customer->name"/>
            <x-input type="text" name="email" label="Please Enter Your Email Address" :value="@$customer->email" />
            <x-input type="number" name="contact" label="Your Contact" :value="@$customer->contact"/>
                {{-- @endif --}}
            <x-input type="password" name="password" label="Password"/>
            <x-input type="password" name="password_confirmation" label="Confirm Password"/>
            {{-- <small class="text-danger">

                @error('fname')
                {{$message}}  
              @enderror</small> --}}
              <div class="btn-sbt">
              <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
  </body>
  {{--Footer content--}}
  <footer>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-6 col-lg-3 about-footer">
                    <h3>Lorem Ipsum dummy text </h3>
                    <ul>
                        <li><a href="tel:(010) 1234 4321"><i class="fas fa-phone fa-flip-horizontal"></i>(010) 1234 4321</a></li>
                        <li><i class="fas fa-map-marker-alt"></i>
                            1 / 105 Bay Lights,
                            <br/>Lorem Ipsum,
                            <br/>LIC 3201
                        </li>
                    </ul>
                    <a href="" class="btn2 red-btn">Book Now</a>
                </div>
                <div class="col-md-6 col-lg-2 page-more-info">
                    <div class="footer-title">
                        <h4>Page links</h4>
                    </div>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3 page-more-info">
                    <div class="footer-title">
                        <h4>More Info</h4>
                    </div>
                    <ul>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Dolor sit amet</a></li>
                        <li><a href="#">Consectetur Adipisicing </a></li>
                        <li><a href="#">Ed do eiusmod tempor incididunt</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 open-hours">
                    <div class="footer-title">
                        <h4>Open hours</h4>
                        <ul class="footer-social">
                            <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><i class="far fa-clock"></i>Monday Thursday</td>
                                <td>9:00am - 5:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Friday</td>
                                <td>9:00am - 4:00pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Sturday</td>
                                <td>9:00am - 1:30pm</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-clock"></i>Sunday</td>
                                <td>9:30am - 12:00pm</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="footer-logo">
                    <table>
                        <tbody>
                            <tr>
                                <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <a href="">Privacy policy</a>
                </div>
                <div class="col-sm-8">
                    <p>Lorem ipsum dolor sit amet @ 2019 All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>


</html>