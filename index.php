<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
    <meta name="author" content="web-themes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>crunchy | cows</title>

    <!-- favicon -->
    <link href="img/nouka-icon.png" type="image/png" rel="icon">

    <!-- all css here -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="css/helper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <!-- start header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-8 text-left">
                    <!--logo start-->
                    <div class="logo">
                        <a href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <!--logo end-->
                </div>
                <div class="col-md-8 col-sm-6 col-4 d-flex align-items-center justify-content-end">

                    <div class="mobile-menu d-flex align-items-center">
                        <!--menu start-->
                        <ul id="menu">
                            <li class="nav-item">
                                <a href="#collect-currency-cows-wrapper" class="nav-link">Collect Cows</a>
                            </li>
                            <li class="nav-item">
                                <a href="#cow-facts-wrapper" class="nav-link menu_link" >Cow Facts</a>
                            </li>
                            <li class="nav-item">
                                <a href="#text-center" class="nav-link menu_link">FAQ</a>
                            </li>
                            
                        </ul>
                        <!--menu end-->

                        <div class="d-inline-flex align-items-center">
                            <a class="wallet-btn" href="#" onmouseover="this.innerHTML='DISCONNECT';" onmouseout="this.innerHTML='Wallet';">Wallet</a>
                            <a class="nouka-icon" href="https://opensea.io/collection/crunchycows"><img src="img/nouka-icon.png" alt=""></a> 
                        </div>
                    </div>
                    

                    <div class="hamburger-menu">
                        <span class="line-top"></span>
                        <span class="line-center"></span>
                        <span class="line-bottom"></span>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- home area start -->
    <div class="home-wrapper" style="background-image: url(./img/home-bgs.png);">
        <img class="home-shape-two position-absolute" src="img/home-shape-two.png" alt="">
        <img class="home-shape-bg position-absolute" src="img/home-shape-bg.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 home-content-ab">
                    <div class="home-content">
                        <div class="d-flex align-items-center">
                            <img class="home-cow" src="img/home-cow.png" alt="">
                            <div>
                                <p>Crunchy Cows are a collection of <br> 9,999 fun loving, food chomping NFT <br> friends, cruising on the Ethereum <br> block chain.</p>
                                <p class="mt_custom">Adopt some cows and come on <br> down to the Cow Club!</p>
                                <span class="moo-text">-Moo</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a class="social-btn twitter-bg" href="https://twitter.com/crunchycows"><img src="img/twitter-icon.png" alt="">Twitter</a>
                            <a class="social-btn discord-bg" href="https://discord.gg/pGjKkHKV"><img src="img/discord-icon.png" alt="">Discord</a>
                            <a class="buy-bg social-btn" href="#collect-currency-cows-wrapper">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home area end -->

    <!-- pre sale area start -->
    <div class="pre-wrapper" style="background-image: url(./img/pre-sale-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pre-box text-center">

                      
                        <h2>Pre-Sale Sign Up</h2>
                        <h4>Mint Crunchy Cows 48 Hours Before the Public</h4>
                     
                      
                        <form action="submit-form.php" method="POST">
                        <div class="search-box">
                            <input type="text" name="email" placeholder="Enter Your Email">
                            <button type="submit" class="sign-btn">SIGN Me Up</button>
                        </div>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- pre sale area end -->

    <!-- collect currency area start -->
    <div id="collect-currency-cows-wrapper" class="collect-currency-wrapper" style="background-image: url(./img/collect-currency-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="collect-head" id="collect-head">Collect Crunchy Cows</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="collect-box mt_30 text-center">
                        <img class="collect-img" src="img/collect-img-01.png" alt="">
                        <h3 class="mt_10">Single Serving</h3>
                        <p class="color-one mt_10">1 Cow</p>
                        <p class="mt_10">0.02 ETH per Cow</p>
                        <button data-toggle="modal" data-target="#mintModal" class="mint-btn mt_30" type="button" data-value="0.02" data-cow-count="1">MINT</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="collect-box mt_30 text-center">
                        <img class="collect-img" src="img/collect-img-02.png" alt="">
                        <h3 class="mt_10">Combo</h3>
                        <p class="color-one mt_10">2 Cows</p>
                        <p class="mt_10">0.035 ETH per Cow</p>
                        <button data-toggle="modal" data-target="#mintModal" class="mint-btn mt_30" type="button" data-value="0.035" data-cow-count="2">MINT</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="collect-box mt_30 text-center">
                        <img class="collect-img" src="img/collect-img-03.png" alt="">
                        <h3 class="mt_10">Super Sized</h3>
                        <p class="color-one mt_10">3 Cows</p>
                        <p class="mt_10">0.045 ETH per Cow</p>
                        <button data-toggle="modal" data-target="#mintModal" class="mint-btn mt_30" type="button" data-value="0.045" data-cow-count="3">MINT</button>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="opensa-btn" href="#">Opensea</a>
                </div>
            </div>
        </div>
    </div>
    <!-- collect currency area end -->

    <!-- perks area start -->
       <div class="perks-wrapper position-relative">
           <img class="perk-shape-01 position-absolute" src="img/perk-shape-01.svg" alt="">
           <img class="perk-shape-02 position-absolute" src="img/perk-shape-02.svg" alt="">
           <img class="perk-shape-03 position-absolute" src="img/perk-shape-03.svg" alt="">
           <img class="perk-shape-04 position-absolute" src="img/perk-shape-04.svg" alt="">
           <img class="perk-shape-05 position-absolute" src="img/perk-shape-05.svg" alt="">
           <img class="perk-shape-06 position-absolute" src="img/perk-shape-06.svg" alt="">
           <img class="perk-shape-07 position-absolute" src="img/perk-shape-07.svg" alt="">
           <img class="perk-shape-08 position-absolute" src="img/perk-shape-08.svg" alt="">
           <img class="perk-shape-09 position-absolute" src="img/perk-shape-09.svg" alt="">
           <img class="perk-shape-10 position-absolute" src="img/perk-shape-10.svg" alt="">
           <img class="perk-shape-11 position-absolute" src="img/perk-shape-11.svg" alt="">
           <img class="perk-shape-12 position-absolute" src="img/perk-shape-12.svg" alt="">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div>
                           <div class="text-center">
                               <h2 class="collect-head perks-head">WHY BUY A CRUNCHY COW?</h2>
                           </div>
                           <ul class="park-box">
   							<li> Owning a Crunchy Cow has its Perks:</li>
                               <li><img src="img/tick-icon.svg" alt="">
                               <p>Crunchy Cow Country Club access (Coming 2022)</p></li>
                               <li><img src="img/tick-icon.svg" alt=""><p>Owners eligible to receive air-dropped custom cows</p></li>
                               <li><img src="img/tick-icon.svg" alt="">
                                 <p>First dibs on Crazy Crunchy Cows Generator and Crunchy Cow Friends in the future</p></li>
                               <li><img src="img/tick-icon.svg" alt=""><p>Crunchy Cow Merch access</p></li>
                               <li><img src="img/tick-icon.svg" alt="">
                                 <p>Feature your cow in an animated series</p></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- perks area end -->

       <!-- rare area start -->
       <div id="cow-facts-wrapper" class="rare-wrapper" style="background-image: url(./img/rare-bg.png);">
           <div class="container">
               <div class="rare-box">
                   <div class="row">
                       <div class="col-12 text-center">
                           <h2 class="collect-head rare-head" id="rare-box">COW FACTS</h2>
                       </div>
                       <div class="col-lg-6 col-md-6">
                           <div class="text-center">
                               <div class="toltip-box">
                                   <img class="tolitp-shape position-absolute" src="img/tolitp-shape.png" alt="">
                                   <p>Um...Moo</p>
                               </div>
                               <img class="rare-cow-img" src="img/rare-cow-img.png" alt="">
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-6">
                           <div class="table-make">
                               <table>

                                   <tr class="border-bottom-table">
                                       <td>
                                           <p class="table-first-text mb_10">TOTAL COWS</p>
                                       </td>
                                       <td class="text-left">
                                           <h5 class="table-second-text mb_10">9,999</h5>
                                       </td>
                                   </tr>
                                   <tr class="border-bottom-table">
                                       <td>
                                           <p class="table-first-text mt_20 mb_10">Food Items</p>
                                       </td>
                                       <td class="text-left">
                                           <h5 class="table-second-text mt_20 mb_10">39</h5>
                                       </td>
                                   </tr>
                                   <tr class="border-bottom-table">
                                       <td>
                                           <p class="table-first-text mt_20 mb_10">Rarest Items</p>
                                       </td>
                                       <td class="text-left">
                                           <h5 class="table-second-text mt_20 mb_10">Fish and Sushi</h5>
                                       </td>
                                   </tr>
   								 <tr class="border-bottom-table">
                                       <td>
                                           <p class="table-first-text mt_20 mb_10">Sweetest Shades (Opinion)</p>
                                       </td>
                                       <td class="text-left">
                                           <h5 class="table-second-text mt_20 mb_10"><img src="img/eyewear-street-pink-orange.png" width="200" height="109" alt=""/></h5>
                                       </td>
                                   </tr>
   								 <tr class="border-bottom-table">
                                       <td>
                                           <p class="table-first-text mt_20 mb_10">Cowbell? Yes, cowbell</p>
                                       </td>
                                       <td class="text-left">
                                           <h5 class="table-second-text mt_20 mb_10"><img src="img/neckwear-cowbell.png" width="250" height="164" alt=""/></h5>
                                       </td>
                                   </tr>

                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- rare area end -->

       <!-- road map area start -->
       <div class="road-map-wrapper position-relative">
           <div class="container">
               <div class="row">
                   <div class="col-12 position-relative text-center">
                       <h2 class="collect-head text-white road-map-head">Road Map</h2>
                       <img class="road-map-img" src="img/road-map-img.png" alt="">
                       <div class="road-map-ab">
                           <h3 class="road-percent">10%</h3>
                           <p class="road-map-para road-map-ab-1">10 Airdrops <br> For Every 1000 <br> Cows Minted</p>
                       </div>
                       <div class="road-map-ab">
                           <h3 class="road-percent">20%</h3>
                           <p class="road-map-para road-map-ab-2">$5k Donation Made +<br> Donation Partners<br> Announced </p>
                       </div>
                       <div class="road-map-ab">
                           <h3 class="road-percent">30%</h3>
                           <p class="road-map-para road-map-ab-3">10 Fresh <br>Air-Drops to<br>Random Cow<br>Owners</p>
                       </div>
                       <div class="road-map-ab">
                           <h3 class="road-percent">50%</h3>
                           <div class="road-map-ab-4">
                               <p class="road-map-para mt_20">Crunchy Cow<br>Country Club Opens</p>
                           </div>
                       </div>
                       <div class="road-map-ab">
                           <h3 class="road-percent">75%</h3>
                           <div class="road-map-ab-5">
                               <p class="road-map-para">50 Fresh Airdrops<br>on Cow Owner's Heads<br></p>
                               <p class="road-map-para mt_20">Crunchy Cow<br>Merch and Cartoon<br>Announcements</p>
                           </div>
                       </div>
                       <div class="road-map-ab">
                           <h3 class="road-percent">100%</h3>
                           <p class="road-map-para road-map-ab-6">Moo-ning Soon!</p>
                       </div>
                   </div>
                   <div class="col-12">
                       <p class="road-map-last-para">Crazy Cow Generator, Crunchy Cow Friends,<br>
                         and so moo-ch more.</p>
                       <p class="road-map-last-para">&nbsp;</p>
                   </div>
               </div>
           </div>
       </div>
       <!-- road map area end -->

       <!-- who make area start -->
       <div class="who-make-wrapper" style="background-image: url(./img/who-make-bg.png);">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-12 text-center">
                       <h2 class="collect-head who-make-head">WHO Makes These Cows?</h2>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                       <div class="who-make-box mt_30 text-center">
                           <img class="w-100" src="img/who-make-01.png" alt="">
                           <h2 class="mt_25">Cow Creator</h2>
                           <p>Ryan Maloney has been creating for a looong time including toys, animated music videos, and picture books. Crunchy Cows is his team's 2nd official NFT line. Say hello:&nbsp;&nbsp; </p>
                           <a class="mt_15" href="https://www.tiktok.com/@ryryart?"><img src="img/tiktok-icon.svg" alt=""> @ryryart</a>
                       </div>

                   </div>
   <div class="col-12 text-center">
           <h2 class="collect-head meet-bros-text text-white">Meet The Moo’s </h2>
                   </div>
               </div>
           </div>
       </div>
       <!-- who make area end -->

       <!-- meet gallery area start -->
       <div class="meet-gallery-wrapper">
           <div class="container-fluid">
               <div class="popup-gallery row no-gutters custom_grid">
                   <div class="col">
                       <a href="img/gallery-one-01.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-01.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-02.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-02.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-03.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-03.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-04.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-04.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-05.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-05.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-06.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-06.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-07.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-07.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-08.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-08.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-09.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-09.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-10.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-10.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-11.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-11.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-12.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-12.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-13.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-13.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-14.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-14.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-15.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-15.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-16.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-16.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-17.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-17.png" alt="">
                       </a>
                   </div>
                   <div class="col">
                       <a href="img/gallery-one-18.png" class="gallery-img position-relative">
                           <img class="w-100" src="img/gallery-one-18.png" alt="">
                       </a>
                   </div>
               </div>
           </div>
       </div>
       <!-- meet gallery area end -->

       <!-- faq area start -->
       <div class="faw-wrapper position-relative" style="background-image: url(./img/faq-bg.png);">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center" id="text-center">
                       <a class="view-btn" href="https://opensea.io/collection/crunchycows">View On Opensea</a>
                       <h2 class="collect-head faq-head">Faq</h2>
                   </div>
                   <div class="col-12">
                       <div class="accordion" id="accordionExample">
                           <div class="card mt_30">
                               <div class="card-header" id="headingOne">
                                   <h2 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Where can I buy Crunchy Cows?&nbsp; &nbsp; &nbsp;</h2>
                               </div>
                               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                   <div class="card-body">
                                   Pre-sale: CrunchyCows.com. Public sale: Opensea.io. &nbsp; &nbsp; </div>
                               </div>
                           </div>
                           <div class="card mt_40">
                               <div class="card-header" id="headingtwo">
                                   <h2 class="mb-0" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">How do I get Pre-Sale access?</h2>
                               </div>
                               <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                                   <div class="card-body">
                                       Sign up for the email list above or join the Discord.
                                   </div>
                               </div>
                           </div>

                           <div class="card mt_40">
                               <div class="card-header" id="headingfour">
                                   <h2 class="mb-0" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">What will the mint price be?&nbsp;</h2>
                               </div>
                               <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                   <div class="card-body">
                                       TBD. Join the discord to chat about it.
                                   </div>
                               </div>
                           </div>
                           <div class="card mt_40">
                               <div class="card-header" id="headingfive">
                                   <h2 class="mb-0" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">i've never bought an nFT, how do I do it?</h2>
                               </div>
                               <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                   <div class="card-body">
                                       Download Metamask.io. You'll need to transfer Ethereum into Metamask from another wallet (Coinbase for example). Then go on Opensea, connect your Metamask wallet and buy away!
                                   </div>
                               </div>
                           </div>
                           <div class="card mt_40">
                               <div class="card-header" id="headingsix">
                                   <h2 class="mb-0" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">can you send me a free crunchy cow?</h2>
                               </div>
                               <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                   <div class="card-body">
                                       Sorry, but that's not possible. If you would like a chance to get airdropped a cow, buy 1 and sign up for the mailing list or discord to be notified when we've hit a milestone.
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- faq area end -->

       <!-- footer area start -->
       <footer class="position-relative">
           <img class="footer-shape position-absolute" src="img/footer-shape.png" alt="">
           <div class="container">
               <div class="row align-items-end">
                   <div class="col-xl-6 col-lg-7 col-md-6 footer-logo-custom">
                       <div>
                           <a class="footer-logo" href="#"><img src="img/footer-logo.png" alt=""></a>
                           <div class="footer-content d-flex align-items-center">
                               <p>All Rights Reserved © 2021 </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-5 col-md-6 footer-logo-custom">
                       <div class="footer-social text-right">
                           <a href="https://twitter.com/crunchycows"><i class="fab fa-twitter"></i></a>

                       </div>
                   </div>
               </div>
           </div>
       </footer>
       <!-- footer area end -->


    <!-- collect currency area start -->
   <div class="modal first-modal fade" id="mintModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header-shape">
               <img class="w-100" src="img/modal-header.png" alt=""/>
               <h2>COLLECT CRUNCHY COWS</h2>
               <span id='mint-modal-close-btn' class="close" data-dismiss="modal"></span>
            </div>
            <div></div>
            <div class="modal-body">
               <h2>
                  Per Cow cost= <span id="cost"></span>ETH
               </h2>
               <h4 class="hour-text"></h4>
                  <div class="d-flex p-2 align-items-center mt_30 wd50 center" style="justify-content: center">
                     <h2 class="mr_10">COWS</h2>
                     <div><input type="text" id="cow-count" class="input-info" disabled="" placeholder="0" value="0"/></div>
                  </div>
               <div class="text-center mt_30"><button class="connect-btn">Wallet</button><span class="connect-border"></span><button class="connect-btn mint-popup-button">MINT</button></div>
               <p id="start-mint-text"><p>
            </div>
         </div>
      </div>
   </div>

      <div class="modal first-modal fade" id="mintIsDoneModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header-shape">
                  <img class="w-100" src="img/modal-header.png" alt=""/>
                  <h2>SUCCESS!</h2>
                  <span id='mint-modal-close-btn' class="close" data-dismiss="modal"></span>
               </div>
               <div></div>
               <div class="modal-body">
                  <h2> You Minted: </h2>
                 <h2 id="total-minted-count"></h2>
               </div>
            </div>
         </div>
      </div>

    <!-- collect currency area end -->



    <!-- woops modal area start -->
    <!-- <div class="modal second-modal fade" id="mintModaltwo" tabindex="-1" role="dialog" aria-labelledby="mintModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">    
          <div class="modal-body">
               <img data-dismiss="modal" class="oppos-close" src="img/oppos-close.png" alt="">
               <img class="w-100" src="img/opps-bg.png" alt="">
               <div class="opps-text text-center">
                   <h2>WOOPS. <br> DIDN’T WORK.</h2>
                   <a class="try-btn" href="#">Try Again</a>
               </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- woops modal area end -->

    <!--====== BACK TO TOP START ======-->
    <a href="#" class="back-to-top"><i class="fal fa-angle-up"></i></a>
    <!--====== BACK TO TOP ENDS ======-->
    
    <!-- all js here -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <?php
     
    
      if(isset($_SESSION['status']) && $_SESSION['status'] != '')
      {?>
        <script>
            
           swal({
                    title: "<?php echo $_SESSION['status']; ?>!",
                    // text: "You clicked the button!",
                    icon: "<?php echo $_SESSION['status_code']; ?>",
                    button: "Aww yiss!",
             });
        </script>
        <?php
          unset($_SESSION['status']);
      }
    ?>
  
</body>
</html>