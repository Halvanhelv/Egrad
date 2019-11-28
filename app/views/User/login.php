
    <div class="animate-dropdown">
        <!-- ========================================= BREADCRUMB ========================================= -->
        <div id="top-mega-nav">
            <div class="container">
                <nav>
                    <ul class="inline">
                        <li class="dropdown le-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i> shop by department
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Computer Cases & Accessories</a></li>
                                <li><a href="#">CPUs, Processors</a></li>
                                <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                <li><a href="#">Graphics, Video Cards</a></li>
                                <li><a href="#">Interface, Add-On Cards</a></li>
                                <li><a href="#">Laptop Replacement Parts</a></li>
                                <li><a href="#">Memory (RAM)</a></li>
                                <li><a href="#">Motherboards</a></li>
                                <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                <li><a href="#">Motherboard Components</a></li>
                            </ul>
                        </li>

                        <li class="breadcrumb-nav-holder">
                            <ul>
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item current gray">
                                    <a href="about.html">Authentication</a>
                                </li>
                            </ul>
                        </li><!-- /.breadcrumb-nav-holder -->
                    </ul>
                </nav>
            </div><!-- /.container -->
        </div><!-- /#top-mega-nav -->
        <!-- ========================================= BREADCRUMB : END ========================================= -->
    </div>


    <main id="authentication" class="inner-bottom-md">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <section class="section sign-in inner-right-xs ">
                        <h2 class="bordered">Войти</h2>
                        <?php if(isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($_SESSION['success'])): ?>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                            </div>
                        <?php endif; ?>
                        <p>Hello, Welcome to your account</p>

                        <div class="social-auth-buttons">
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn-block btn-lg btn btn-facebook"><i class="fa fa-facebook"></i> Sign In with Facebook</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn-block btn-lg btn btn-twitter"><i class="fa fa-twitter"></i> Sign In with Twitter</button>
                                </div>
                            </div>
                        </div>


                            <form method="post" action="user/login" id="login" role="form" data-toggle="validator" class="login-form cf-style-1">
                            <div class="field-row has-feedback">
                                <label for="login">Login</label>
                                <input type="text" name="login" class="le-input" id="login" placeholder="Login" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div><!-- /.field-row -->

                            <div class="field-row has-feedback">
                                <label for="pasword">Password</label>
                                <input type="password" name="password" class="le-input" id="pasword" placeholder="Password" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div><!-- /.field-row -->

                            <div class="field-row clearfix">
                                        <span class="pull-left">
                                            <label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Remember me</span></label>
                                        </span>
                                <span class="pull-right">
                                            <a href="#" id="forgot-link" class="content-color bold">Забыли пароль ?</a>
                                        </span>
                            </div>

                            <div class="buttons-holder">

                                <button type="submit" class="le-button huge">Вход</button>
                            </div><!-- /.buttons-holder -->
                        </form><!-- /.cf-style-1 -->

                        <form method="post" action="user/forgot" id="forgot" role="form" data-toggle="validator" class="login-form cf-style-1">


                            <div class="field-row has-feedback form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="le-input" id="email" placeholder="Email" value="" data-error="Введите коректный Email" required>
                                <div class="help-block with-errors"></div>
                                <input type="hidden" value="Выслать пароль" name="fpass">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                            </div>

                            <div class="field-row clearfix">

                                <span class="pull-right">
                                            <a href="#" id="auth-link" class="content-color bold">Войти</a>
                                        </span>
                                <div class="buttons-holder">

                                    <button type="submit" class="le-button huge">Вход</button>
                                </div><!-- /.buttons-holder -->
                            </div>


                        </form><!-- /.cf-style-1 -->

                    </section><!-- /.sign-in -->
                </div><!-- /.col -->



            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
