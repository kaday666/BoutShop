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
               <a href="#">login</a>
               <i class="fa-solid fa-bag-shopping nav__menu-bag"></i>
            </div>

        </div>
    </nav>
    
    @yield('content');
    


    <script src="/js/all.min.js"></script>
</body>
</html>