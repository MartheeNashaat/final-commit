<!DOCTYPE html>
<html>
<head>
 <title>Egypt Hut</title>
     <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/gucci.css">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/<?php echo url('/'); ?>/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Mountains+of+Christmas|Shadows+Into+Light&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Hanalei|Indie+Flower|Orbitron|Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|PT+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <div class="box1">
        <ul>
            <li><a href="">EGP</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="">English</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            <li><a href="myaccount.html">My Account</a>  <i class="fa fa-angle-down" aria-hidden="true"></i></li>
            </ul>
        
            <h5> Free shipping on all Egy orders over 1000EGP</h5>
        </div>
        <!-- start novbar-->
        <div class="subbox">
            
            <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('product.index')}}">Shop</a></li>
            <li><a href="">Promotion</a></li>
            <li><a href="sinup.html">SignUp</a></li>
            </ol>
        <!--end novbar-->
            <div class="icon">
            <i class="fa fa-search" aria-hidden="true"></i>
            <i class="fa fa-user" aria-hidden="true"></i>
            
                <div class="background">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
               
               
        </div>
                <!--filter-->
                <div class="small-container">
                    <div class="row row-2">
                    <select>
                       <option> t-shirts</option>
                        <option> shirts</option>
                        <option> jeans</option>
                        <option> jackets</option>
                        
                        </select>
                    
                    
                    
                    </div>
                    
                    
               
                
                    
                   

                    <div class="small-container">
                       <h2 class="title">Products</h2>
                            <div class="row">
                            @foreach ($products as $product)
                                <div class="col-4">
                                @foreach($product->images as $productimage)
                                    <a href="{{route('product.show',$product->id)}}">
                                    <img src={{asset("images/$productimage->image")}} alt="product"/></a>
                                    @break
                                @endforeach  
                                    <h4> <a href="{{route('product.show',$product->id)}}"><div >{{ $product->name}}</div></a></h4>
                                    <p>{{$product->price}}</p>
                                    <p>{{$product->sale_price}}</p>
                                     <p><button>Add to Cart</button></p>
                                   
            </div>
        @endforeach
                        
                        
                        
                        </div>
                        
                        
                        </div>
                    </div>
                
                
                
                
                </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
        
</body>
</html>