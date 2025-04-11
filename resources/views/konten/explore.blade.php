<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from madebydesignesia.com/themes/gigaland/03_grey-explore.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Apr 2025 14:15:02 GMT -->
<head>
    <title>Gigaland - NFT Marketplace Website Template</title>
    <link rel="icon" href="{{asset('gigaland')}}/images/icon-red.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Gigaland - NFT Marketplace Website Template" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{asset('gigaland')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <link href="{{asset('gigaland')}}/css/plugins.css" rel="stylesheet" type="text/css" >    
    <link href="{{asset('gigaland')}}/css/style.css" rel="stylesheet" type="text/css" >
    <link href="{{asset('gigaland')}}/css/de-grey.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->   
    <link id="colors" href="{{asset('gigaland')}}/css/colors/scheme-04.css" rel="stylesheet" type="text/css" >
    <link href="{{asset('gigaland')}}/css/coloring.css" rel="stylesheet" type="text/css" >
</head>

<body class="dark-scheme de-grey">
    <div id="wrapper">

            <!-- header begin -->
            <header class="transparent">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{asset('gigaland')}}/03_grey-index.html">
                                            <img alt="" src="{{asset('gigaland')}}/images/logo-3.png" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" >
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                      <!-- mainmenu begin -->
                                      <ul id="mainmenu">
                                    <li>
                                        <a href="homepage1">Home<span></span></a>
                                    </li>
                                    <li>
                                        <a href="explore">Explore<span></span></a>
                                        <ul>
                                            <li><a href="explore">Explore</a></li>
                                            <li><a href="LiveStream">Live Auction</a></li>
                                            <li><a href="DetailsItem">Item Details</a></li>
                                            <li><a href="helpCenter">Help Center</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{asset('gigaland')}}/03_grey-author.html">Author<span></span></a>
                                        <ul>
                                            <li><a href="{{asset('gigaland')}}/03_grey-author.html">Author</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-profile.html">Profile</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-wallet.html">Wallet</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-create-options.html">Create</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-login.html">Login</a></li>
                                        </ul>
                                    </li>                                    
                                    <li>
                                        <a href="{{asset('gigaland')}}/#">Stats<span></span></a>
                                        <ul>
                                            <li><a href="{{asset('gigaland')}}/03_grey-activity.html">Activity</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-rankings.html">Rankings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- mainmenu close -->
                                <div class="menu_side_area">
                                    <a href="{{asset('gigaland')}}/03_grey-wallet.html" class="btn-main btn-wallet"><i class="icon_wallet_alt"></i><span>Connect Wallet</span></a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
									<h1>Explore</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
			<section aria-label="section">
                <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-lg-12">

                            <div class="items_filter">
                                <form action="https://madebydesignesia.com/themes/gigaland/blank.php" class="row form-dark" id="form_quick_search" method="post" name="form_quick_search">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1" placeholder="search item here..." type="text" > <a href="{{asset('gigaland')}}/#" id="btn-submit"><i class="fa fa-search bg-color-secondary"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>

                                <div id="item_category" class="dropdown">
                                    <a href="{{asset('gigaland')}}/#" class="btn-selector">All categories</a>
                                    <ul>
                                        <li class="active"><span>All categories</span></li>
                                        <li><span>Art</span></li>
                                        <li><span>Music</span></li>
                                        <li><span>Domain Names</span></li>
                                        <li><span>Virtual World</span></li>
                                        <li><span>Trading Cards</span></li>
                                        <li><span>Collectibles</span></li>
                                        <li><span>Sports</span></li>
                                        <li><span>Utility</span></li>
                                    </ul>
                                </div>

                                <div id="buy_category" class="dropdown">
                                    <a href="{{asset('gigaland')}}/#" class="btn-selector">Buy Now</a>
                                    <ul>
                                        <li class="active"><span>Buy Now</span></li>
                                        <li><span>On Auction</span></li>
                                        <li><span>Has Offers</span></li>
                                    </ul>
                                </div>

                                <div id="items_type" class="dropdown">
                                    <a href="{{asset('gigaland')}}/#" class="btn-selector">All Items</a>
                                    <ul>
                                        <li class="active"><span>All Items</span></li>
                                        <li><span>Single Items</span></li>
                                        <li><span>Bundles</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>                     
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Monica Lucas">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-1.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Pinky Ocean</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.08 ETH<span>1/20</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>50</span>
                                    </div>                            
                                </div> 
                            </div>
                        </div>                 
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Stacy Long">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-10.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-2.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Deep Sea Phantasy</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.06 ETH<span>1/22</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>80</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="de_countdown" data-year="2025" data-month="5" data-day="14" data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Ida Chapman">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-11.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-3.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Rainbow Style</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.05 ETH<span>1/11</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>97</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Fred Ryan">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-12.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-4.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Two Tigers</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.02 ETH<span>1/15</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>73</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Franklin Greer">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-9.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-4.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>The Truth</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.06 ETH<span>1/20</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>26</span>
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="de_countdown" data-year="2025" data-month="5" data-day="6" data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Mamie Barnett">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-2.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-2.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Running Puppets</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.03 ETH<span>1/24</span>
                                    </div>    
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>45</span>
                                    </div>                                  
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Nicholas Daniels">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-3.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-1.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>USA Wordmation</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.09 ETH<span>1/25</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>76</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="de_countdown" data-year="2025" data-month="5" data-day="8" data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Lori Hart">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-4.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-5.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Loop Donut</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.09 ETH<span>1/14</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>94</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Jimmy Wright">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-5.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-3.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Lady Copter</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.08 ETH<span>1/21</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>75</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Gayle Hicks">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-7.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-5.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Purple Planet</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.02 ETH<span>1/18</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>93</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="de_countdown" data-year="2025" data-month="5" data-day="16" data-hour="8"></div>
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Karla Sharp">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-6.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-6.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Oh Yeah!</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.025 ETH<span>1/12</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>6</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Claude Banks">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-8.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-7.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>This is Our Story</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.035 ETH<span>1/8</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>21</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Franklin Greer">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-9.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-6.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Pixel World</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.015 ETH<span>1/25</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>46</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Fred Ryan">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-12.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/anim-8.webp" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>I Believe I Can Fly</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.055 ETH<span>1/4</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>54</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Lori Hart">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-4.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-7.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Cute Astronout</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.005 ETH<span>1/30</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>32</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>
                        <!-- nft item begin -->
                        <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="nft__item style-2">
                                <div class="author_list_pp">
                                    <a href="{{asset('gigaland')}}/03_grey-author.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator: Monica Lucas">                                    
                                        <img class="lazy" src="{{asset('gigaland')}}/images/author/author-1.jpg" alt="">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="nft__item_wrap">
                                    <div class="nft__item_extra">
                                        <div class="nft__item_buttons">
                                            <button onclick="location.href='03_grey-item-details.html'">Buy Now</button>
                                            <div class="nft__item_share">
                                                <h4>Share</h4>
                                                <a href="{{asset('gigaland')}}/https://www.facebook.com/sharer/sharer.php?u=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/https://twitter.com/intent/tweet?url=https://madebydesignesia.com/themes" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                                <a href="{{asset('gigaland')}}/mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://madebydesignesia.com/themes"><i class="fa fa-envelope fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <div class="d-placeholder"></div>
                                        <img src="{{asset('gigaland')}}/images/items/static-8.jpg" class="lazy nft__item_preview" alt="">
                                    </a>
                                </div>
                                <div class="nft__item_info">
                                    <a href="{{asset('gigaland')}}/03_grey-item-details.html">
                                        <h4>Teal Ocean</h4>
                                    </a>
                                    <div class="nft__item_click">
                                        <span></span>
                                    </div>
                                    <div class="nft__item_price">
                                        0.025 ETH<span>1/12</span>
                                    </div>
                                    <div class="nft__item_action">
                                        <a href="{{asset('gigaland')}}/#">Place a bid</a>
                                    </div>
                                    <div class="nft__item_like">
                                        <i class="fa fa-heart"></i><span>24</span>
                                    </div>                                 
                                </div> 
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <a href="{{asset('gigaland')}}/#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                        </div>                                              
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <a href="{{asset('gigaland')}}/#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Marketplace</h5>
                            <ul>
                                <li><a href="{{asset('gigaland')}}/#">All NFTs</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Art</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Music</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Domain Names</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Virtual World</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="{{asset('gigaland')}}/#">Help Center</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Partners</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Suggestions</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Discord</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Docs</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Community</h5>
                            <ul>
                                <li><a href="{{asset('gigaland')}}/#">Community</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Documentation</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Brand Assets</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Blog</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Forum</a></li>
                                <li><a href="{{asset('gigaland')}}/#">Mailing List</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="https://madebydesignesia.com/themes/gigaland/blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" > <a href="{{asset('gigaland')}}/#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="{{asset('gigaland')}}/03_grey-index.html">
                                        <span class="copy">&copy; Copyright 2025 - Gigaland by Designesia</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="{{asset('gigaland')}}/#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="{{asset('gigaland')}}/#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="{{asset('gigaland')}}/#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="{{asset('gigaland')}}/#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="{{asset('gigaland')}}/#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>

    <div id="selector">
        <div id="demo-rtl" class="sc-opt">
            <div class="sc-icon">RTL</div><span class="sc-val">Click to Enable</span>
        </div>
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('gigaland')}}/js/plugins.js"></script>
    <script src="{{asset('gigaland')}}/js/designesia.js"></script>


</body>


<!-- Mirrored from madebydesignesia.com/themes/gigaland/03_grey-explore.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Apr 2025 14:15:05 GMT -->
</html>