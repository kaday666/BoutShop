<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/all.min.js">
</head>
<body>
    <nav class="nav">
        <div class="warp">
            <h1 class="nav__logo">
                BoutShop
            </h1>
            <ul class="nav__list">
                <li class="nav__list-item">
                    <a href="#">For Him</a>
               </li>
               <li class="nav__list-item">
                   <a href="#">For Her</a>
               </li>
               <li class="nav__list-item">
                   <a href="#">Shoe</a>
               </li>
               <li class="nav__list-item">
                   <a href="#">Thrift</a>
               </li>
              
            </ul>
            <div class="nav__menu">
                    <a href="#" class="nav__menu__item nav__menu-link">login</a>
                    <div class="nav__menu__item">
                        <i class="fa-solid fa-bag-shopping  nav__menu-bag"></i>
                    </div>
            </div>
        </div>
    </nav>
    
    <section class="productDetail">
         <div class="productDetail__con">
             <div class="productDetail__show">
                 <div class="productDetail__imgs">
                    <img src="{{asset('img/Shirt.png')}}" class="productDetail__img productDetail__img-1">
                </div>
                 {{-- <div class="productDetail__simgs">
                    <div class="productDetail__simg productDetail__simg-1">
                        <span>Front </span>
                        <img src="{{asset('img/Shirt.png')}}" class="productDetail__img productDetail__img-1">
                    </div>
                    <div class="productDetail__simg productDetail__simg-2">
                        <span>Back</span>
                        <img src="{{asset('img/Shirt.png')}}" class="productDetail__img productDetail__img-1">
                    </div>
                 </div> --}}
             </div>
             <div class="productDetail__detail">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae non sapiente tempora quas facilis illo nostrum ad optio eligendi commodi asperiores natus blanditiis, laboriosam doloremque, dicta, distinctio quidem aspernatur? Magni!
             </div>
         </div>
    </section>

     <footer class="footer">
        <div class="footer__con">
            <div class="footer__header">
                <h3 >Boutshop</h3>
                <p class="footer__legal">
                    @2021 site by<a href="#">
                        lin kaday
                    </a>
                </p>
            </div>
            <div class="footer__helpful">
                <ul class="footer__link">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Refund policy</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
                <ul class="footer__address">
                    <li><i class="fa-solid fa-square-phone icon"></i>09452131398</li>
                    <li>No.18, Sesone , Yangon</li>
                    
                </ul>
            </div>
            <div class="footer__social">
                <a href="#"><i class="fa-brands fa-facebook icon"></i></a>
                <a href="#"><i class="fa-brands fa-instagram icon"></i></a>
                <a href="#"><i class="fa-brands fa-telegram icon"></i></a>
                <a href="#"><i class="fa-brands fa-twitch icon"></i></a>
            </div>
          
        </div>
    </footer>   
     <script src="/js/all.min.js"></script>
    </body>
    </html>