<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from madebydesignesia.com/themes/gigaland/03_grey-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Apr 2025 14:15:15 GMT -->
<head>
    <title>Gigaland - NFT Marketplace Website Template</title>
    <link rel="icon" href="{{asset('gigaland')}}/images/icon-red.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Gigaland - NFT Marketplace Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{asset('gigaland')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('gigaland')}}/css/plugins.css" rel="stylesheet" type="text/css">    
    <link href="{{asset('gigaland')}}/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('gigaland')}}/css/de-grey.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{asset('gigaland')}}/css/colors/scheme-04.css" rel="stylesheet" type="text/css">
    <link href="{{asset('gigaland')}}/css/coloring.css" rel="stylesheet" type="text/css">
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
                                            <img alt="" src="{{asset('gigaland')}}/images/logo-3.png">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text">
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="{{asset('gigaland')}}/03_grey-index.html">Home<span></span></a>
                                        <ul>
                                            <li><a href="{{asset('gigaland')}}/03_grey-index.html">Homepage 1</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-index-2.html">Homepage 2</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-index-3.html">Homepage 3</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-index-4.html">Homepage 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{asset('gigaland')}}/03_grey-explore.html">Explore<span></span></a>
                                        <ul>
                                            <li><a href="{{asset('gigaland')}}/03_grey-explore.html">Explore</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-explore-2.html">Explore 2</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-explore-music-nft.html">New: Music NFT</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-collection.html">Collections</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-live-auction.html">Live Auction</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-item-details.html">Item Details</a></li>
                                            <li><a href="{{asset('gigaland')}}/03_grey-help-center.html">Help Center</a></li>
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
			
			<section style="min-height: 730px; background: url({{asset('gigaland')}}/url/background/6.jpg)`" class="full-height relative no-top no-bottom vertical-center" data-stellar-background-ratio=".5">
                <div class="overlay-gradient t50">
					<div class="center-y relative">
						<div class="container">
							<div class="row align-items-center">
								
								<div class="col-lg-4 offset-lg-4 wow fadeIn bg-color" data-wow-delay=".5s">
									<div class="box-rounded padding40">
										<h3 class="mb10">Sign In</h3>
										<p>Login using an existing account or create a new account <a href="{{asset('gigaland')}}/register.html">here<span></span></a>.</p>
										<form name="contactForm" id='contact_form' class="form-border" method="post" action='https://madebydesignesia.com/themes/gigaland/blank.php'>

                                            <div class="field-set">
                                                <input type='text' name='email' id='email' class="form-control" placeholder="username">
                                            </div>
											
											 <div class="field-set">
                                                <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                            </div>
											
											<div class="field-set">
												<input type='submit' id='send_message' value='Submit' class="btn btn-main btn-fullwidth color-2">
											</div>
											
											<div class="clearfix"></div>
											
											<div class="spacer-single"></div>

                                        <!-- social icons -->
                                        <ul class="list s3">
                                            <li>Login with:</li>
                                            <li><a href="{{asset('gigaland')}}/#">Facebook</a></li>
                                            <li><a href="{{asset('gigaland')}}/#">Google</a></li>
                                        </ul>
                                        <!-- social icons close -->
                                </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>		
            
            </div>
            <!-- content close -->

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
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text"> <a href="{{asset('gigaland')}}/#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
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


<!-- Mirrored from madebydesignesia.com/themes/gigaland/03_grey-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Apr 2025 14:15:16 GMT -->
</html>