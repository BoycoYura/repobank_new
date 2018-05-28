<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repobank</title>
    <link rel="SHORTCUT ICON" href="images/repobank_tab_avatarka.png" type="image/jpg">
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/normalize.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
+          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/slick.css') }}"/>
    <link rel="stylesheet" href="{{asset('assets/front/css/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css') }}"/>
    
</head>
<body>
<style>
    .viewer .transparent-pattern{
    background-image:transparent;}</style>
<header class="header-wrapper">
    <div class="container-fluid header-body">
        <span class="mobile-btn">
            <i class="fas fa-bars">s</i>
        </span>

        <nav class="menu-part">
            <ul class="menu-list hider">
                <li class="menu-item"><a class="link" href="#overdraft">Overdrafts</a></li>
                <li class="menu-item"><a class="link" href="#vision">About Us</a></li>
                <li class="menu-item"><a class="link" href="#model">Model</a></li>
                <li class="menu-item"><a class="link" href="#credit-card">Card</a></li>
                <li class="menu-item"><a class="link" href="#road-map">System</a></li>
                <li class="menu-item"><a class="link" href="#white-paper">Whitepapper</a></li>
                <li class="menu-item"><a class="link" href="#real-road">Roadmap</a></li>
                <li class="menu-item"><a class="link" href="#team">Team</a></li>
            </ul>
        </nav>


                        @auth
                        <li><a href="{{route('home')}}">{{Auth::user()->name}}</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>SIGN OUT</span>
                        </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                          </form>
                        </li>
                        @else
                        <div class="buttons-block">
                        	<a href="{{route('register')}}" class="btn-join">Join Now</a>
                        	<a href="{{route('login')}}" class="btn-login">Login</a>
                    	</div>
                        @endauth

<!--             <a href="#" class="btn-join">Join Now</a>
            <a href="#" class="btn-login">Login</a> -->
    </div>
</header>

<section class="Repobank-wrapper">
    <div class="container-fluid">
        <div class="row title-row">
            <div class="text-h1-p">
                <h1 class="text-h1"> Welcome to <br> RepoBank</h1>
                <p class="text-p">The Most Perspective Crypto OverdraftsIn The World. </p>
            </div>

            <div class="image">
                <iframe  class="jevik" src="https://sketchfab.com/models/a4ed764a0b194ee4ab8b43ddef9bec83/embed?autostart=1&amp;"
                        width="700" height="500" allowtransparency="true" allowfullscreen="" mozallowfullscreen="true"
                        webkitallowfullscreen="true" onmousewheel="" style="background:none!important;">
                </iframe>
             </div>

        </div>

            <div class="changer-language">
                <a href=""><img src="{{asset('assets/front/images/langage-item.png') }}" class="lang-first" alt=""></a>
                <div class="language-list">
                    <a href=""><img src="{{asset('assets/front/images/lang-item-two.png') }}" alt=""></a>
                    <a href=""><img src="{{asset('assets/front/images/lang-item-three.png') }}" alt=""></a>
                    <a href=""><img src="{{asset('assets/front/images/lang-item-four.png') }}" alt=""></a>
                    <a href=""><img src="{{asset('assets/front/images/lang-item-five.png') }}" alt=""></a>
                    <a href=""><img src="{{asset('assets/front/images/lang-item-six.png') }}" alt=""></a>
                    <a href=""><img src="{{asset('assets/front/images/lang-item-seven.png') }}" alt=""></a>
                    <a href=""><img src="{{asset('assets/front/images/lang-item-eight.png') }}" alt=""></a>
                </div>

                <img class="arrow-lang arrow angle-right" src="{{asset('assets/front/images/angle-right.svg') }}" alt="">
                <img src="{{asset('assets/front/images/times.svg') }}" class="arrow-lang cross hider" alt="">
            </div>

        <video autoplay controls class="video-container hider">
             <source src="{{asset('assets/front/images/video-bg.mp4') }}" type="video/mp4">
        </video>
        <div class="launch-video">
            <p class="Launch-p"> Launch Video</p> <span class="pulse"> <a href="#" data-toggle="modal" data-target="#video-modal"> <img src="{{asset('assets/front/images/video.png') }}" alt="video is not find "></a></span>
        </div>
    </div>

    <div id="rC_A" class="redCountdownDemo"> 
    </div>
</section>



<section id="overdraft" class="Instant_Crypto_Overdrafts">
    <div class="container">
        <div class="row">
            <div class="h2-text col-md-12">
                <h2>Respensive Crypto Overdraft</h2>
            </div>
        </div>
        <div class="description-p">
            <p>
                Stop Selling your prypto. Leave your money for rising.<br>
                Get perspective Crypto Overdraft from RepoBank in 3 steps.
            </p>
        </div>

        <div class="Instant_Crypto_Overdrafts_full_img">
            <img class="Macbook" src="{{asset('assets/front/images/MacBook2.png') }}" alt="">
        </div>

        <div class="subscribe">


            <div class="subscribe_items">

                <div class="row">

                    <div class="icon_items col-md-3 col-lg-3 col-xl-3 col-xs-12">
                        <img class="process" src="{{asset('assets/front/images/3-100.png') }}" alt="">
                        <p>
                            Immediate Financing
Only 3 Steps To Do
                        </p>
                    </div>

                    <div class="icon_items col-md-3 col-lg-3 col-xl-3 col-xs-12">
                        <img src="{{asset('assets/front/images/1-100.png') }}" alt="">
                        <p>
                            No Refusal
No Credit Checkups
                        </p>
                    </div>

                    <div class="icon_items col-md-3 col-lg-3 col-xl-3 col-xs-12">
                        <img src="{{asset('assets/front/images/4-100.png') }}" alt="">
                        <p>
                            Easy Way To Get Profits
100% No Risk
                        </p>
                    </div>

                    <div class="icon_items col-md-3 col-lg-3 col-xl-3 col-xs-12">
                        <img src="{{asset('assets/front/images/2-100.png') }}" alt="">
                        <p>
                            Transparent Fees
Adaptable Paying Off
                        </p>
                    </div>

                </div>
            </div>


            <div class="row overdraft_panel">
                <div class="col-xl-6 col-lg-8 col-md-12 col-md-offset-3">
                    <hgroup>
                        <h2>Choose Overdraft Amount:</h2>
                    </hgroup>
                    <div class="well">
                        <form action="#">
                            <div class="subscribe_input">
                                <!-- <input class="" name="cost" id="cost" type="text" placeholder="$1000" required> -->
                                <select>
                                    <option>$1000</option>
                                    <option>$900</option>
                                    <option>$800</option>
                                </select>
                                <div class="arrow_panel">
                                    <div class="top_arrow">
                                        <i class="fas fa-caret-up"></i>
                                    </div>
                                    <div class="bottom_arrow">
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </div>
                                <button class="new_crypto_overdraft" data-toggle="modal"
                                    data-target="#new_crypto_overdraft_1" type="button">Next
                                </button>
                            </div>

                            <!-- Modal_1 -->
                            <div class="modal fade modal modal_1" id="new_crypto_overdraft_1" tabindex="-1"
                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">New Crypto Overdraft</h3>
                                            <p>
                                                Don`t sell your crypto. Don`t lose the upside potential.<br>
                                                Get an instant Crypto Overdraft from Nexo.
                                            </p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="{{asset('assets/front/images/modal_close.png') }}">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal_stage">
                                                <p class="modal_stage_title">1/3</p>
                                                <p class="modal_stage_description">Choose Overdraft Amount</p>
                                            </div>
                                            <div class="input_comparison">
                                                <div class="row">
                                                    <div class="input_comparison_select">
                                                        <select>
                                                            <option>$1000</option>
                                                            <option>$900</option>
                                                            <option>$800</option>
                                                        </select>
                                                        <div class="arrow_panel">
                                                            <div class="top_arrow">
                                                                <i class="fas fa-caret-up"></i>
                                                            </div>
                                                            <div class="bottom_arrow">
                                                                <i class="fas fa-caret-down"></i>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="tooltip_select" data-toggle="tooltip" data-placement="top" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.">?</button>
                                                    </div>
                                                    <div class="span_i">
                                                        <span><i class="fas fa-chevron-right"></i></span>
                                                    </div>

                                                    <div class="input_comparison_span">
                                                        <span>REP 1.035</span>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="img_comparison">
                                                <div class="img_comparison_width">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-6 img_item">
                                                            <div class="img_item_bg">
                                                                <img src="{{asset('assets/front/images/bitcoin-100.png') }}">
                                                            </div>
                                                            <p>Bitcoin</p>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-6 img_item">
                                                            <div class="img_item_bg">
                                                                <img src="{{asset('assets/front/images/ethereum-100.png') }}">
                                                            </div>
                                                            <p>Ethereum</p>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-6 img_item">
                                                            <div class="img_item_bg">
                                                                <img src="{{asset('assets/front/images/repobank.png') }}">
                                                            </div>
                                                            <p>Repocoin</p>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-6 img_item">
                                                            <div class="img_item_bg it_is_text">
                                                                <p>
                                                                    Altcoins &<br>
                                                                    EC20 Tokens
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button data-toggle="modal" data-target="#new_crypto_overdraft_2"
                                                type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal_1 end -->

                            <!-- Modal_2 -->
                            <div class="modal fade modal modal_2" id="new_crypto_overdraft_2" tabindex="-2"
                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">New Crypto Overdraft</h3>
                                            <p>
                                                Don`t sell your crypto. Don`t lose the upside potential.<br>
                                                Get an instant Crypto Overdraft from Nexo.
                                            </p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="{{asset('assets/front/images/modal_close.png') }}">
                                            </button>
                                            <div class="modal_stage_prev">
                                                <button data-toggle="modal" data-target="#new_crypto_overdraft_1"
                                                    type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="fas fa-chevron-left"></i>
                                                </button>
                                                <span class="modal_stage_title">1/3</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal_stage">
                                                <p class="modal_stage_title">2/3</p>
                                                <p class="modal_stage_description">Overdraft Duration</p>
                                            </div>

                                            <div class="row modal_panel_2">

                                                <div class="col-xl-9 div_overdrafts_slider">
                                                    <div class="overdrafts_slider">
                                                        <div><h2>1</h2></div>
                                                        <div><h2>2</h2></div>
                                                        <div><h2>3</h2></div>
                                                        <div><h2>4</h2></div>
                                                        <div><h2>5</h2></div>
                                                        <div><h2>6</h2></div>
                                                        <div><h2>7</h2></div>
                                                        <div><h2>8</h2></div>
                                                        <div><h2>9</h2></div>
                                                        <div><h2>10</h2></div>
                                                        <div><h2>11</h2></div>
                                                        <div class="slick-slide slick-current slick-active slick-center">
                                                            <h2>12</h2></div>
                                                        <div><h2>13</h2></div>
                                                        <div><h2>14</h2></div>
                                                        <div><h2>15</h2></div>
                                                        <div><h2>16</h2></div>
                                                        <div><h2>17</h2></div>
                                                        <div><h2>18</h2></div>
                                                        <div><h2>19</h2></div>
                                                        <div><h2>20</h2></div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 div_overdrafts_total">
                                                    <p class="overdrafts_total">Total Repayments:</p>
                                                    <div class="tolal_bg">
                                                        <h2>$ 45.544</h2>
                                                        <p>12% APR</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button data-toggle="modal" data-target="#new_crypto_overdraft_3"
                                                type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal_2 end -->

                            <!-- Modal_3 -->
                            <div class="modal fade modal modal_3" id="new_crypto_overdraft_3" tabindex="-3"
                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">New Crypto Overdraft</h3>
                                            <p>
                                                Don`t sell your crypto. Don`t lose the upside potential.<br>
                                                Get an instant Crypto Overdraft from Nexo.
                                            </p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <img src="{{asset('assets/front/images/modal_close.png') }}">
                                            </button>
                                            <div class="modal_stage_prev">
                                                <button data-toggle="modal" data-target="#new_crypto_overdraft_2"
                                                    type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="fas fa-chevron-left"></i>
                                                </button>
                                                <span class="modal_stage_title">2/3</span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal_stage">
                                                <p class="modal_stage_title">3/3</p>
                                                <p class="modal_stage_description">Payout Method</p>
                                            </div>

                                            <div class="row">

                                                <div class="col-xl-6 col-lg-12 credit_card">
                                                    <div class="block_bg">
                                                        <div class="left_block">
                                                            <h3>Free RepoBank Credit Card</h3>
                                                            <p>with Flexible Overdraft Limit</p>
                                                        </div>
                                                    </div>

                                                    <div class="block_bg block_bg_img">
                                                        <div class="left_block">
                                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 div_img">
                                                                <img src="{{asset('assets/front/images/XuNHbjD.png') }}">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 card_text">
                                                                <div class="block_bg_img_text_padding">
                                                                    <p class="left_block_title">Virtual Card</p>
                                                                    <p class="text">Instantly</p>

                                                                    <p class="left_block_title_2">Physical Card</p>
                                                                    <p>3-5 days</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-xl-6 col-lg-12 bank_transfer">
                                                    <div class="block_bg block_bg_right">
                                                        <div class="right_block">
                                                            <h3>Bank Transfer</h3>
                                                            <p class="text_blue">to any personal or business bank account</p>
                                                        </div>
                                                    </div>

                                                    <div class="block_bg block_bg_right block_bg_right_img">
                                                        <div class="right_block">
                                                            <div class="row flex_center">
                                                                <div class="col-xl-4 col-lg-5 bank_items bank_items_1">
                                                                    <img src="{{asset('assets/front/images/NoPath.png') }}">
                                                                    <p>3-5 days</p>
                                                                </div>

                                                                <div class="top_line"></div>

                                                                <div class="col-xl-4 col-lg-5 bank_items bank_items_2">
                                                                    <img src="{{asset('assets/front/images/sepa.png') }}">
                                                                    <p></p>
                                                                </div>

                                                            </div>
                                                            <div class="row flex_center">

                                                                <div class="col-xl-4 col-lg-5 bank_items bank_items_3">
                                                                    <p>ACH</p>
                                                                    <p>Payments</p>
                                                                </div>

                                                                <div class="bot_line"></div>

                                                                <div class="col-xl-4 col-lg-5 bank_items bank_items_4">
                                                                    <img src="{{asset('assets/front/images/sepa.png') }}">
                                                                    <p>CRYPTOCURRENCY</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Get Credit Card
                                                    </button>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                    <button type="button" class="btn btn-primary">Make Bank Transfer
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal_3 end -->

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="graphic">
<div class="container-fluid">

    <h2 class="hard-cap"> Hard cap $45 million</h2>

    <div>
        <p class="jewrc"> Use the funds & Token distribution</p>
    </div>

    <div class="row">
        <div class="blockwe col-lg-12">
            <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>

        <div class="blockwe-2  col-lg-12">
            <div id="piechart2" style="width:900px; height: 500px;"></div>
        </div>

        <div class="social-hard-cap">

            <ul class="hrd">
                <li><a href="#"> <i class="fab fa-twitter"></i> </a>  </li>
                <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                <li><a href="#"><i class="fab fa-facebook"></i>  </a></li>
                <li><a href="#"><i class="fab fa-telegram"></i>  </a> </li>
                <li><a href="#"> <i class="fab fa-bitcoin"></i> </a>  </li>
            </ul>

        </div>

    </div>

</div>


</section>

<section id="vision" class="Our-vision">
    <div class="container-fluid">
        <div class="h2-vision">
            <h2> About Us </h2>
            <p> Don't lose the oppotunity to use a New System</p>

        </div>
        <div class="row margin-row-about-us">

            <div class="description-out-img col-md-6">
                <p>The RepoBank team introduce innovative and adaptable solutions for the financial world. It is an opportunity to make the system as efficient as possible.
                    The problem of the lack of financing in the digital economy is solved with the help of the introduction of blockchain  technology.
                    Get perspective Crypto Overdrafts from well-experienced RepoBank.<br>
                    We know how must the system works.</p>
            </div>
            <div class="first-1001 col-md-6">
                <img src="{{asset('assets/front/images/first-1001.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="our-solutions">
    <div class="container solutions-block">
        <h2 class="header-solution">Our Solutions</h2>
        <p class="text-solution">The solutions to the main problems in the system of using digital money</p>

        <div class="solutions">
            <div class="accordion" id="accordion-one">
                <p class="solution-head">Problem</p>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapseOne-first,#collapseOne-second" aria-expanded="true"
                                    aria-controls="collapseOne">
                                Slow liquidation of assets
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne-first" class="collapse" aria-labelledby="headingOne" data-parent=".accordion">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/no.png') }}" class="glo-image" alt="">
                                <p class="text">Slow liquidation of assets</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">This process from the beginning to the end takes at least a few days, and can last up to several months. Depends on asset class.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo-first,#collapseTwo-second" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                Ownership loss
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo-first" class="collapse" aria-labelledby="headingTwo" data-parent=".accordion">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/no.png') }}" class="glo-image" alt="">
                                <p class="text">Ownership loss</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Lack of convenient use of digital finance for profitable investments without the need to sell investments with excellent growth potential.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree-first,#collapseThree-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Large fees
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree-first" class="collapse" aria-labelledby="headingThree"
                         data-parent=".accordion">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/no.png') }}" class="glo-image" alt="">
                                <p class="text">Large fees</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">During transactions, we have to pay a transaction fee. That is why, a digital asset is an object for taxes. Short-term liquidation is inefficient.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour-first,#collapseFour-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Uncomfortable credit checks
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour-first" class="collapse" aria-labelledby="headingThree"
                         data-parent=".accordion">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/no.png') }}" class="glo-image" alt="">
                                <p class="text">Uncomfortable credit checks</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">To gain access to unsecured financing, long and complex credit checks need to be conducted. In the course of this, the credit score may get very low.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive-first,#collapseFive-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                No confidence and Transparency
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive-first" class="collapse" aria-labelledby="headingThree"
                         data-parent=".accordion">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/no.png') }}" class="glo-image" alt="">
                                <p class="text">No confidence and Transparency</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Transactions take place only with P2P agreements. For both sides there is no security and transparency.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseSix-first,#collapseSix-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Idle Value of Digital Assets
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix-first" class="collapse" aria-labelledby="headingThree"
                         data-parent=".accordion">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/no.png') }}" class="glo-image" alt="">
                                <p class="text">A lot of assets are remain idle</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Many investors prefer not to use their assets of cryptocurrency.
                                    Billions of dollars remain idle. Analysts say that in 2025 the value of deposits
                                    will reach $5 trillion.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="image-block">
                <img src="{{asset('assets/front/images/iphonex.png') }}" class="iphonex" alt="">
            </div>

            <div class="accordion" id="accordion-two">
                <p class="solution-head">Solution</p>

                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapseOne-first,#collapseOne-second" aria-expanded="true"
                                    aria-controls="collapseOne" >
                                24/7 accessibility to cash
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne-second" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-two">
                        <div class="card-body" data-parent=".accordion">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/yes.png') }}" class="glo-image" alt="">
                                <p class="text">24/7 accessibility to cash</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Make quick access to cash in any convenient place. Possible options: bank transfer, cryptocurrency, credit card from NepoBank. There is satisfaction of the client's needs and desire for liquidity.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo-first,#collapseTwo-second" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                Save ownership
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo-second" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-two">
                        <div class="card-body" >
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/yes.png') }}" class="glo-image" alt="">
                                <p class="text">Save ownership</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Your digital asset will be 100% yours. Now you do not need to sell assets. Get the maximum profit from saving.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree-first,#collapseThree-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Fee efficient
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree-second" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-two">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/yes.png') }}" class="glo-image" alt="">
                                <p class="text">Fee efficient</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Crypto overdrafts is exactly the effective and adaptable solution that does not be as the objects of taxes. Without any hidden fees.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour-first,#collapseFour-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Without any checks
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFour-second" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-two">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/yes.png') }}" class="glo-image" alt="">
                                <p class="text">Without any checks</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Crypto Overdraft does not need these checks, as this often leads to a significant downgrade of the credit score.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive-first,#collapseFive-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Transparent Blockchain Contracts
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFive-second" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-two">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/yes.png') }}" class="glo-image" alt="">
                                <p class="text">Transparent Blockchain Contracts</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">All the assets is provided with transparent Blockchain overdraft contracts.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseSix-first,#collapseSix-second" aria-expanded="false"
                                    aria-controls="collapseThree">
                                Idle Value of Digital Assets
                            </button>
                        </h5>
                    </div>

                    <div id="collapseSix-second" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-two">
                        <div class="card-body">
                            <div class="top-part">
                                <img src="{{asset('assets/front/images/yes.png') }}" class="glo-image" alt="">
                                <p class="text">A lot of assets are remain idle</p>
                            </div>

                            <div class="bottom-part">
                                <p class="text">Many investors prefer not to use their assets of cryptocurrency.
                                    Billions of dollars remain idle. Analysts say that in 2025 the value of deposits
                                    will reach $5 trillion.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="our_vision_slider">
    <div class="container">
        <h2>Interaction With Clients</h2>

        <p>The interaction of an increasing number of customers due to the market expanding.</p>

        <div class="our_vision_slider_panel">

            <div>
                <div class="circle_position">
                    <div class="circle">
                        <h2>$5</h2>
                        <p class="circle_signature">trillion</p>
                    </div>
                </div>

                <p class="text_head">Total Market of
Digital Assets</p>
                <p class="text_signature">
                    Analysts say that the result of the introduction of blockchain technology will be an increase in the value of digital currency. In 2025, the value of deposits will reach $5 trillion.
                </p>
            </div>


            <div>
                <div class="circle_position">
                    <div class="circle">
                        <h2>$1</h2>
                        <p class="circle_signature">trillion</p>
                    </div>
                </div>

                <p class="text_head">Cryptocurrencies</p>
                <p class="text_signature">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>



            <div>
                <div class="circle_position">
                    <div class="circle">
                        <h2>$1</h2>
                        <p class="circle_signature">trillion</p>
                    </div>
                </div>

                <p class="text_head">Total Market of
Digital Assets</p>
                <p class="text_signature">
                    Analysts say that the result of the introduction of blockchain technology will be an increase in the value of digital currency. In 2025, the value of deposits will reach $5 trillion.
                </p>
            </div>


            <div>
                <div class="circle_position">
                    <div class="circle">
                        <h2>$4</h2>
                        <p class="circle_signature">trillion</p>
                    </div>
                </div>

                <p class="text_head">Tokenized Assets</p>
                <p class="text_signature">
                    It is also will continue to get tokenized hard assets. It includes Real estate, Commodities, all types of Securities and Virtual Assets, Gaming and Virtual Reality Assets, Loyalty Reward Points.
                </p>
            </div>
        </div>

        <div class="button_position">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h3> Connect to our social</h3>
                </div>
                <div class="col-lg-6 col-md-12">
                    <button>Join in Telegram <i class="fab fa-telegram"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="model" class="Business-model">
    <div class="container-fluid">

        <h2> Business Model</h2>
        <p class="dont">Stop selling your crypto. Leave your money for rising</p>
        <p class="dont"> Get perspective Crypto Overdrafts from RepoBank in 3 steps.</p>

        <div class="bg-model-second">
            <img src="{{asset('assets/front/images/second-1001.png') }}" alt="">
        </div>
        <div class="row padding-rows">

            <div class="text-left  ">
                <p class="GET-BM"> Get detailed Business Model</p>

            </div>
            <div class=" btn-div">
                <a class="shirne-a load btn-download" href="#"> <i class="fas fa-download"></i> Download </a> </span>
            </div>
        </div>
    </div>
</section>

<section id="credit-card" class="Credit-card">

    <div class="container-fluid">
        <div class="text-card">
            <h2>About Credit Card</h2>
            <p> The credit limit depends on the market value of assets in the Overdraft Wallet. <BR>
                An additional credit is automatically given to the card after the valuating of <BR> asset.
            </p>
        </div>


        <div class="row">

            <div class="bg-cards-epic   col-lg-4 col-md-12" >
                <img src="{{asset('assets/front/images/bg-card.png') }}" alt="img-is-not-find">
            </div>

            <div class="flipper items-icons  col-lg-8 col-md-12">
                <div class="  align-items-left-features-new ">

                    <div class="card-item">
                    <div class="features block-1-few">
                        <div class="blue-bg front">
                            <i class="fas fa-star spic-cof"></i>
                        </div>

                        <div>
                            <p class="features-p "> Peculiarities</p>
                        </div>
                    </div>

                    <div class="features-2 margin-feaure">

                        <div class="items-feature-1">
                            <p class="description-fither">Credit Card for Free With  </p>
                            <p class="description-fither"> Adaptable Overdraft Limit </p>
                            <p class="description-fither"> Own Way for Repayment</p>
                            <p class="description-fither"> Additional Virtual Credit Card </p>
                            <p class="description-fither">Pay in Local Currencies </p>
                            <p class="description-fither"> Hidden Fee-Free </p>
                        </div>

                    </div>
                </div>

                    <div class="card-item">
                        <div class="features block-1-few">
                            <div class="blue-bg front">
                                <i class="fas fa-coins spic-cof"></i>
                            </div>

                            <div>
                                <p class="features-p ">Provided by Digital Assets</p>
                            </div>
                        </div>

                        <div class="features-2 margin-feaure">

                            <div class="items-feature-1">
                                <p class="description-fither">Cryptocurrencies</p>
                                <p class="description-fither">Repocoin</p>
                                <p class="description-fither">Tokenized Assets</p>
                                <p class="description-fither"> Utility Tokens</p>
                                <p class="description-fither">VR/Gaming Tokens</p>
                            </div>

                        </div>
                    </div>

                    <div class="card-item">
                        <div class="features block-1-few">
                            <div class="blue-bg front">
                                <i class="fas fa-user-shield spic-cof"></i>
                            </div>

                            <div>
                                <p class="features-p ">24/7 Security</p>
                            </div>
                        </div>

                        <div class="features-2 margin-feaure">

                            <div class="items-feature-1">
                                <p class="description-fither">Innovative Technology</p>
                                <p class="description-fither">Card and Wallet Protection</p>
                                <p class="description-fither">Live Support</p>
                                <p class="description-fither">Fraud Tracking</p>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="align-items-features-right">
                    <div class="card-item">
                        <div class="features block-1-few">
                            <div class="blue-bg front">
                                <i class="fas fa-credit-card spic-cof"></i>
                            </div>

                            <div>
                                <p class="features-p ">Editions</p>
                            </div>
                        </div>

                        <div class="features-2 margin-feaure">

                            <div class="items-feature-1">
                                <p class="description-fither">Worldwide  Money Transaction</p>
                                <p class="description-fither">Spending Analytics</p>
                                <p class="description-fither">Budgeting Tools</p>
                                <p class="description-fither">Enable/Disable Card Online</p>
                            </div>

                        </div>
                    </div>

                    <div class="card-item">
                        <div class="features block-1-few">
                            <div class="blue-bg front">
                                <i class="fas fa-money-check-alt spic-cof"></i>
                            </div>

                            <div>
                                <p class="features-p ">Payment System</p>
                            </div>
                        </div>

                        <div class="features-2 margin-feaure">

                            <div class="items-feature-1">
                                <p class="description-fither">Visa</p>
                                <p class="description-fither">MasterCard</p>
                                <p class="description-fither">Apple Pay</p>
                                <p class="description-fither">Android Pay</p>
                                <p class="description-fither">Samsung Pay</p>
                                <p class="description-fither">Alipay</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="road-map">
    <div class="container-fluid roadmap-block">
        <h2 class="header-roadmap">RepoBank System</h2>
        <p class="roadmap-solution">This is a Repobank system of interactions with customers.Here you can see the main
            functionality of the System</p>
        <div class="roadmap">
            <div class="accordion-road" id="road-accordion-one">
                <div class="card">
                    <div class="road-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#System-link-one" aria-expanded="true"
                                    aria-controls="collapseOne">
                                <a href="">Information Analytics</a>
                            </button>
                        </h5>
                    </div>

                    <div id="System-link-one" class="collapse" aria-labelledby="headingOne"
                         data-parent=".accordion-road">
                        <div class="card-body">
                            <div class="bottom-part">
                                <div class="bottom-part">
                                    <ul>
                                        <li class="rollet-link">- Data collection and analysis</li>
                                        <li class="rollet-link">- Self-regulating algorithms</li>
                                        <li class="rollet-link">- Data processing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="road-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#System-link-two" aria-expanded="true"
                                    aria-controls="collapseOne">
                                <a href="">Notifications</a>
                            </button>
                        </h5>
                    </div>

                    <div id="System-link-two" class="collapse" aria-labelledby="headingOne"
                         data-parent=".accordion-road">
                        <div class="card-body">
                            <div class="bottom-part">
                                <ul>
                                    <li class="rollet-link">- Payment notifications</li>
                                    <li class="rollet-link">- Reminders about the minimum Wallet balance</li>
                                    <li class="rollet-link">- Liquidation notifications</li>
                                    <li class="rollet-link">- Administrative warnings</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="road-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#System-link-three" aria-expanded="true"
                                    aria-controls="collapseOne">
                                <a href="">Repayment Info</a>
                            </button>
                        </h5>
                    </div>

                    <div id="System-link-three" class="collapse" aria-labelledby="headingOne"
                         data-parent=".accordion-road">
                        <div class="card-body">
                            <div class="bottom-part">
                                <ul>
                                    <li class="rollet-link">- Interest repayment</li>
                                    <li class="rollet-link">- Overdraft repayment</li>
                                    <li class="rollet-link">- Withholding of payment and defaults</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="compas">
                <img src="{{asset('assets/front/images/arrows.png') }}" class="strela arrow_c" alt="">

                <img src="{{asset('assets/front/images/logo-100.png') }}" class="credit-logo" alt="">
            </div>

            <div class="accordion-road" id="road-accordion-two">
                <div class="card">
                    <div class="road-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#System-link-four" aria-expanded="true"
                                    aria-controls="collapseOne">
                                <a href="">Allocation of funds</a>
                            </button>
                        </h5>
                    </div>
                    <div>
                    </div>
                    <div id="System-link-four" class="collapse" aria-labelledby="headingOne"
                         data-parent="#road-accordion-two">
                        <div class="card-body">

                            <div class="bottom-part">
                                <ul>
                                    <li class="rollet-link">- Overdraft setup</li>
                                    <li class="rollet-link">- Wallet withdrawals</li>
                                    <li class="rollet-link">- Profit distributions to token holders</li>
                                    <li class="rollet-link">- Asset Control in real time</li>
                                    <li class="rollet-link">- Multiple (6+) exchanges</li>
                                    <li class="rollet-link">- Digital Asset </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="road-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#System-link-five" aria-expanded="true"
                                    aria-controls="collapseOne">
                                <a href="">Wallet Servicing </a>
                            </button>
                        </h5>
                    </div>

                    <div id="System-link-five" class="collapse" aria-labelledby="headingOne"
                         data-parent="#road-accordion-two">
                        <div class="card-body">

                            <div class="bottom-part">
                                <ul>
                                    <li class="rollet-link">- Placement</li>
                                    <li class="rollet-link">- Hedging positions</li>
                                    <li class="rollet-link">- Release</li>
                                    <li class="rollet-link">- Servicing of overdraft safety levels</li>
                                    <li class="rollet-link">- Increase of limits</li>
                                    <li class="rollet-link">- Liquidation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="road-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#System-link-six" aria-expanded="true"
                                    aria-controls="collapseOne">
                                <a href="">Repayment Analytics</a>
                            </button>
                        </h5>
                    </div>

                    <div id="System-link-six" class="collapse" aria-labelledby="headingOne"
                         data-parent="#road-accordion-two">
                        <div class="card-body">

                            <div class="bottom-part">
                                <ul>
                                    <li class="rollet-link">- Placement</li>
                                    <li class="rollet-link">- Hedging positions</li>
                                    <li class="rollet-link">- Release</li>
                                    <li class="rollet-link">- Servicing of overdraft safety levels</li>
                                    <li class="rollet-link">- Increase of limits</li>
                                    <li class="rollet-link">- Liquidation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="white-paper" class="whitepaper">
    <div class="container">
        <div class="wrapper-block-whitepaper">
            <div class="wrapper-headings">
                <h2>RepoBank Whitepaper</h2>
                <h5>Our whitepaper is an additional guarantee of the quality of our services. In this document you will
                    find
                    all
                    the information that interests you, which will be useful in solving your problems.
                </h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="wrapper-image">
                                    <img src="{{asset('assets/front/images/iphonex.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="whitepaper-info">
                                    <p class="whitepaper-info-text">
                                        Want to know more about
                                        <span class="bold">RepoBank</span>? Download the free
                                        docoment here...
                                    </p>

                                    <div class="wrapper-block-transform">
                                        <p>RepoBank</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wrapper-download-block">
                                    <p class="wrapper-download-text">Download Whitepaper in One click</p>

                                    <div class=" btn-div">
                                        <a class="shirne-a load btn-download" href="#"> <i class="fas fa-download"></i> Download </a> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div id="particles-js"></div>

<section id="real-road" class="roadmap">
    <div class="container-fluid">

        <h2>roadmap</h2>

        <p class="roadmap_view_p">
            Prior events that the company embodies to <br>improve the operation of the system and the lead in the crypto currency market.
        </p>

        <div class="roadmap_slider">

            <div class="roadmap_slider_item first">
                <h2>May 2018</h2>
                <p class="roadmap_title">Credissimo Founded</p>
                <div class="roadmap_scroll" id="roadmap_scroll">
                    <p class="roadmap_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="roadmap_number"></div>
            </div>

            <div class="roadmap_slider_item">
                <h2>June 2018</h2>
                <p class="roadmap_title">Credissimo Founded</p>
                <div class="roadmap_scroll" id="roadmap_scroll">
                    <p class="roadmap_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="roadmap_number"></div>
            </div>

            <div class="roadmap_slider_item">
                <h2>July 2018</h2>
                <p class="roadmap_title">Credissimo Founded</p>
                <div class="roadmap_scroll" id="roadmap_scroll">
                    <p class="roadmap_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="roadmap_number"></div>
            </div>

            <div class="roadmap_slider_item right">
                <h2>August 2018</h2>
                <p class="roadmap_title">Credissimo Founded</p>
                <div class="roadmap_scroll" id="roadmap_scroll">
                    <p class="roadmap_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="roadmap_number"></div>
            </div>

            <div class="roadmap_slider_item right last">
                <h2>September 2018</h2>
                <p class="roadmap_title">Credissimo Founded</p>
                <div class="roadmap_scroll" id="roadmap_scroll">
                    <p class="roadmap_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="roadmap_number"></div>
            </div>

        </div>
    </div>
</section>
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Team</h2>

                <p class="team-subheading">
                    You can get acquainted with a team of specialists <br>
                    that works to improve the system.
                </p>

                <div class="wrapper-team-slider">
                    <div class="col-md-4">
                        <div class="team-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="team-item-image">
                                        <a href="#" data-toggle="modal" class="team-link" data-target="#exampleModal">
                                            <img src="{{asset('assets/front/images/team-image.png') }}" alt="">
                                        </a>
                                    </div>


                                        <div class="team-item-info">
                                            <p class="team-item-name">NAME SURNAME</p>
                                            <p class="team-item-position">Web developer</p>

                                    </div>


                                    <div class="team-item-social">
                                        <div class=" team-item-social-block team-item-social-facebook"></div>
                                        <div class="team-item-social-block team-item-social-linked"></div>
                                        <div class="team-item-social-block team-item-social-twitter"></div>
                                        <div class="team-item-social-block team-item-social-skype"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="team-item-image">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <img src="{{asset('assets/front/images/team-image.png') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="team-item-info">
                                        <p class="team-item-name">NAME SURNAME</p>
                                        <p class="team-item-position">Web developer</p>
                                    </div>

                                    <div class="team-item-social">
                                        <div class="team-item-social-block team-item-social-facebook"></div>
                                        <div class="team-item-social-block team-item-social-linked"></div>
                                        <div class="team-item-social-block team-item-social-twitter"></div>
                                        <div class="team-item-social-block team-item-social-skype"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="team-item-image">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <img src="{{asset('assets/front/images/team-image.png') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="team-item-info">
                                        <p class="team-item-name">NAME SURNAME</p>
                                        <p class="team-item-position">Web developer</p>
                                    </div>

                                    <div class="team-item-social">
                                        <div class="team-item-social-block team-item-social-facebook"></div>
                                        <div class="team-item-social-block team-item-social-linked"></div>
                                        <div class="team-item-social-block team-item-social-twitter"></div>
                                        <div class="team-item-social-block team-item-social-skype"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="team-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="team-item-image">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <img src="{{asset('assets/front/images/team-image.png') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="team-item-info">
                                        <p class="team-item-name">NAME SURNAME</p>
                                        <p class="team-item-position">Web developer</p>
                                    </div>

                                    <div class="team-item-social">
                                        <div class="team-item-social-block team-item-social-facebook"></div>
                                        <div class="team-item-social-block team-item-social-linked"></div>
                                        <div class="team-item-social-block team-item-social-twitter"></div>
                                        <div class="team-item-social-block team-item-social-skype"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="team-item-image">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <img src="{{asset('assets/front/images/team-image.png') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="team-item-info">
                                        <p class="team-item-name">NAME SURNAME</p>
                                        <p class="team-item-position">Web developer</p>
                                    </div>

                                    <div class="team-item-social">
                                        <div class="team-item-social-block team-item-social-facebook"></div>
                                        <div class="team-item-social-block team-item-social-linked"></div>
                                        <div class="team-item-social-block team-item-social-twitter"></div>
                                        <div class="team-item-social-block team-item-social-skype"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="team-item-image">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <img src="{{asset('assets/front/images/team-image.png') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="team-item-info">
                                        <p class="team-item-name">NAME SURNAME</p>
                                        <p class="team-item-position">Web developer</p>
                                    </div>

                                    <div class="team-item-social">
                                        <div class="team-item-social-block team-item-social-facebook"></div>
                                        <div class="team-item-social-block team-item-social-linked"></div>
                                        <div class="team-item-social-block team-item-social-twitter"></div>
                                        <div class="team-item-social-block team-item-social-skype"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container-fluid">
        <div class="footer-wrapper">

            <div class="footer-logo">
                <div class="footer-logo-block">
                    <img src="{{asset('assets/front/images/repobank.png') }}" alt="">
                    <p class="footer-logo-text">Repobank</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="footer-flex">
                        <p class="footer-about-company">
                            Our company is glad to every new
                            client. Contact us in any convenient
                            way for more detailed information on
                            your particular question. Feel free to
                            ask us.
                        </p>
                        <p class="copyright">
                            Copyright 2018. All rights reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="footer-flex">

                        <div class="row">


                            <div class="col-md-3 col-sm-3 hidden-sm-down connect-que">
                                <div class="footer-connect-text">
                                    <p>Connect to our social</p>
                                </div>
                            </div>
                            <div class="all-items-fors">
                                <div class="col-md-9 col-sm-9">
                                    <div class="footer-container-social">
                                        <div class="footer-wrapper-social">
                                            <a class="footer-social-item" href="#">
                                                <img src="{{asset('assets/front/images/face-ico.png') }}" alt="">
                                                <div class="footer-social-item-link">
                                                    <p>@repobank</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="footer-wrapper-social">
                                            <div class="footer-social-item">
                                                <a class="footer-social-item" href="#">
                                                    <img src="{{asset('assets/front/images/insta-ico.png') }}" alt="">
                                                    <div class="footer-social-item-link">
                                                        <p>#repo_bank</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer-wrapper-social">
                                            <div class="footer-social-item">
                                                <a class="footer-social-item" href="#">
                                                    <img src="{{asset('assets/front/images/twit-ico.png') }}" alt="">
                                                    <div class="footer-social-item-link">
                                                        <p>#repobank</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="footer-wrapper-social">
                                            <div class="footer-social-item">
                                                <a class="footer-social-item" href="#">
                                                    <img src="{{asset('assets/front/images/google-ico.png') }}" alt="">
                                                    <div class="footer-social-item-link">
                                                        <p>@repo_bank</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <p class="design">
                            <a class="design-link" href="http://redbox.in.ua"> Designed by RedBox</a>
                        </p>
                        <p class="copyright copyright-hiden">
                            Copyright 2017. All rights reserved.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="footer-phone">
                        <img src="{{asset('assets/front/images/tel2.png') }}" alt="">

                        <div class="footer-phone-button">
                            <a class="phone-button" href=""><span>Join in Telegram </span><i
                                    class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <video autoplay controls class="video-container">
                    <source src="images/video-bg.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-team" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="close-button">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="close-modal-button" aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="team-item-image">
                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                            <img class="resize-img" src="{{asset('assets/front/images/team-image.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="modal-wrapper-team-item-info">
                        <div class="modal-team-item-info">
                            <p class="team-item-name">NAME SURNAME</p>
                            <p class="team-item-position">Web developer</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="modal-line"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="modal-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio fuga laudantium modi
                            obcaecati odio, officia qui quo ratione repellendus. Accusantium fuga, fugiat mollitia
                            possimus praesentium repellat sapiente sint tempore voluptatem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="modal-line"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="team-item-social">
                        <a href="#">
                            <div class="team-item-social-block team-item-social-facebook"></div>
                        </a>
                        <a href="#">
                            <div class="team-item-social-block team-item-social-linked"></div>
                        </a>
                        <a href="#">
                            <div class="team-item-social-block team-item-social-twitter"></div>
                        </a>
                        <a href="#">
                            <div class="team-item-social-block team-item-social-skype"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/front/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/front/js/fontawesome-all.min.js') }}"></script>
<script src="{{asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{asset('assets/front/js/mainer.js') }}"></script>
<script src="{{asset('assets/front/js/slick.min.js') }}"></script>
<script src="{{asset('assets/front/js/particles.min.js') }}"></script>
<script src="{{asset('assets/front/js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.overdrafts_slider').slick({

            centerMode: true,
            centerPadding: '0px',
            initialSlide: 12,
            dots: true,
            focusOnSelect: true,
            slidesToShow: 9,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '20px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.wrapper-team-slider').slick({
            centerMode: false,
            centerPadding: '0px',
            dots: true,
            focusOnSelect: false,
            prevArrow: "<img class='slick-prev' src='{{asset('assets/front/images/team-left.png') }}'>",
            nextArrow: "<img class='slick-next' src='{{asset('assets/front/images/team-right.png') }}'>",
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        dots: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },

                {
                    breakpoint: 567,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1
                    }
                }
            ]
        });


        $('.our_vision_slider_panel').slick({
            centerMode: true,
            centerPadding: '0px',
            dots: true,
            arrows: true,
            prevArrow: "<img class='slick-prev' src='{{asset('assets/front/images/arrow_left.png') }}'>",
            nextArrow: "<img class='slick-next' src='{{asset('assets/front/images/arrow_right.png') }}'>",
            focusOnSelect: true,
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        arrows: false,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '200px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '100px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '80px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '10px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.roadmap_slider').slick({
            centerMode: true,
            centerPadding: '400px',
            dots: true,
            focusOnSelect: true,
            infinite: true,
            rows: 1,
            slidesToShow: 3,
            initialSlide: 2,
            responsive: [
                {
                    breakpoint: 1920,
                    settings: {
                        centerPadding: '100px',
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        centerPadding: '250px',
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '150px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '80px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: '15px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });


    var element = Number("0");
    $('.roadmap_slider_item').each(function () {
        element = Number(element) + Number("1");
        $(this).find('.roadmap_number').text(element);
    });

    $('.modal_2').on('shown.bs.modal', function (e) {
        $('.overdrafts_slider').resize();
    });

</script>

<!--[if IE]><script type="text/javascript" src="3rdparty/excanvas.js"></script><![endif]-->
<script src="{{asset('assets/front/3rdparty/jquery.knob.min.js') }}"></script>
<script src="{{asset('assets/front/3rdparty/jquery.ba-throttle-debounce.min.js') }}"></script>

<script src="{{asset('assets/front/js/jquery.redcountdown.js') }}"></script>
</body>
</html>

<script>
    $(document).ready(function () {
        $.fn.rotateImg = function (options) {
            var defaults = {deg: 0};
            var settings = $.extend({}, defaults, options);
            return this.each(function () {
                var img = $(this);
                var imgpos = img.position();
                var x0, y0;
                $(window).load(function () {
                    x0 = imgpos.left + img.width() / 2;
                    y0 = imgpos.top + img.height() / 2;
                });
                var x, y, x1, y1, r;
                $("html").mousemove(function (e) {
                    x1 = e.pageX;
                    y1 = e.pageY;
                    x = x1 - x0;
                    y = y1 -y0;
                    r = 175 + settings.deg - 175 / Math.PI * Math.atan2(y, x);
                    img.css("transform", "rotate(-" + r + "deg)");
                    img.css("-moz-transform", "rotate(-" + r + "deg)");
                    img.css("-webkit-transform", "rotate(-" + r + "deg)");
                    img.css("-o-transform", "rotate(-" + r + "deg)")
                })
            })
        }

        function rand(a) {
            return 50 + Math.floor(Math.random() * (a - 200))
        }

        var w = $(window).width(), h = $(window).height();
        $.each(Array(1), function (indx, element) {
            $('.arrow_c').appendTo('#compas')
        });
        $('.arrow_c').rotateImg({deg: 0});
    });
</script>

<script type="text/javascript">

    $('#rC_A').redCountdown({
        end: '1388468325',
        now: '1378441323',
        labels: true,
        style: {
            element: "",
            textResponsive: .5,
            daysElement: {
                gauge: {
                    thickness: .03,
                    bgColor: "rgba(0,0,0,0.05)",
                    fgColor: "white"
                },
                textCSS: 'font-family:\'OpenSans-Regular\'; font-size:25px; font-weight:300; color:#34495e;'
            },
            hoursElement: {
                gauge: {
                    thickness: .03,
                    bgColor: "rgba(0,0,0,0.05)",
                    fgColor: "white"
                },
                textCSS: 'font-family:\'OpenSans-Regular\'; font-size:25px; font-weight:300; color:#34495e;'
            },
            minutesElement: {
                gauge: {
                    thickness: .03,
                    bgColor: "rgba(0,0,0,0.05)",
                    fgColor: "white"
                },
                textCSS: 'font-family:\'OpenSans-Regular\'; font-size:25px; font-weight:300; color:#34495e;'
            },
            secondsElement: {
                gauge: {
                    thickness: .03,
                    bgColor: "rgba(0,0,0,0.05)",
                    fgColor: "white"
                },
                textCSS: 'font-family:\'OpenSans-Regular\'; font-size:25px; font-weight:300; color:#34495e;'
            }

        },
        onEndCallback: function() { console.log("Time out!"); }
    });


</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart= new google.visualization.PieChart( document.getElementById('piechart2'));

        chart.draw(data, options);
    }

</script>
<script>
    $(function() {
        $("#sampleRedCountdownContainer").redCountdown({ preset: "flat-colors", end: 1414821973  });
    });
</script>

