<?php
session_start();
include("connect.php");
if(isset($_POST['login_submit'])){
    $user_email    = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $login         = mysqli_query($connect, "select * from `user_reg` where `user_email`= '$user_email' and `user_password` = '$user_password' and `user_status` = 'active' ");
    $res           = mysqli_fetch_object($login);

    $usertype = $res->user_type;
   // echo $usertype;

    if (mysqli_num_rows($login) == 1) 
    {
        $_SESSION['profile'] = $res;
         //echo "login sucessfull";
        if($usertype == "client")
        {
        $_SESSION['profile']=$res;
        header("Location:client_profile.php");
        }
        else
        {
        $_SESSION['profile']=$res;
        header("Location:model_profile.php");
        }

    } 
    else
      {
        $msg = "Invalid email & Password";
        header("refresh:1;reg.php?msg");
      }
}
?>
			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">

				<div class="container-fluid">

					<div class="row">

						<div class="col-sm-3 text-center text-sm-left darklinks">

							<a href="#">

								<em><span class="__cf_email__" data-cfemail="553432303b362c15262025253a27217b363a38">[email&#160;protected]</span></em>

							</a>

						</div>

						<div class="col-sm-6 text-center">

							<ol class="breadcrumb">

								<li>

									<a href="index.php">

										Home

									</a>

								</li>

								<li>

									<a href="#">Models</a>

								</li>



								<li class="active">

									<span>Models 2</span>

								</li>

							</ol>

						</div>

						<div class="col-sm-3 text-center text-sm-right">

							<ul class="inline-dropdown inline-block">



								<li class="dropdown cart-dropdown">

									<div class="total-quantity text-center">0 items -

										<span class="total-amount">$0.00</span>

									</div>

									<a class="topline-button" id="cart" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">

										<span id="cartItems"><?php echo $items;?></span>

										<i class="rt-icon2-basket"></i>



									</a>

									<div class="dropdown-menu ds" aria-labelledby="cart">

										<span class="grey">Recently added item(s)</span>

										<div class="widget widget_shopping_cart">

											<div class="widget_shopping_cart_content">

												<ul class="cart_list product_list_widget media-list darklinks">

													<li class="media">

														<div class="media-left media-middle">

															<a href="product-right.html">

																<img src="images/models_square/01.jpg" alt="">

															</a>

														</div>

														<div class="media-body media-middle">

															<h4>

																<a href="product-right.html">Stet clitad gubergren</a>

															</h4>

															<span class="quantity">1 ×

																<span class="amount">$90</span>

															</span>

														</div>

														<div class="media-body media-middle">

															<a href="#" class="remove" title="Remove this item">

																<i class="rt-icon2-trash highlight"></i>

---															</a>

														</div>

													</li>

													<li class="media">

														<div class="media-left media-middle">

															<a href="product-right.html">

																<img src="images/models_square/02.jpg" alt="">

															</a>

														</div>



														<div class="media-body media-middle">

															<h4>

																<a href="product-right.html">Takimata san bctus</a>

															</h4>

															<span class="quantity">1 ×

																<span class="amount">$90</span>

															</span>

														</div>

														<div class="media-body media-middle">

															<a href="#" class="remove" title="Remove this item">

																<i class="rt-icon2-trash highlight"></i>

															</a>

														</div>

													</li>

												</ul>

												<!-- end product list -->



												<p class="total">

													<span class="grey">Cart Subtotal:

														<span class="amount">$180</span>

													</span>

												</p>



												<p class="buttons">

													<a href="cart-right.html" class="theme_button color1">View All</a>

													<a href="checkout-right.html" class="theme_button inverse">Checkout</a>

												</p>



											</div>

										</div>

									</div>

								</li>

								<li class="dropdown login-dropdown">

									<a class="topline-button" id="login" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">

										<i class="rt-icon2-user"></i>

									</a>

									<div class="dropdown-menu ds" aria-labelledby="login">

									<form role="form" action="" method="post">
                                            <div class="form-group">
                                                <label for="login_email" class="sr-only">Email address</label>
                                                <input type="email" class="form-control" id="login_email" placeholder="Email address" required name="user_email">
                                            </div>
                                            <div class="form-group">
                                                <label for="login_password" class="sr-only">Password</label>
                                                <input type="password" class="form-control" id="login_password" placeholder="Password" required name="user_password">
                                            </div>
                                            <button type="submit" name="login_submit" class="theme_button color1 bottommargin_0">
                                                Log in
                                            </button>
                                            <div class="checkbox-inline">
                                                <input type="checkbox" id="remember">
                                                <label for="remember" class="bottommargin_0"> Remember Me</label>
                                            </div>
                                        </form>

											

									<div class="topmargin_25">



										<a href="register.html" class="text-uppercase">Forgot Your Password?</a><br>OR



										</div>



										<a href="reg.php" class="theme_button color1">



												Create Account



										</a>

									</div>

								</li>

								<li class="dropdown">

									<a href="#" class="search_modal_button topline-button">

										<i class="rt-icon2-search2"></i>

									</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</section>

