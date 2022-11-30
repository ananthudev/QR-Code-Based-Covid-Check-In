<header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

                            <div class="col-md-4">
                                <span>Welcome Back!</span>
                            </div>
                            
                            
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                    <button id="trigger-overlay" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <!-- open/close -->
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                    <form action="#" method="post" class="d-flex">
                                        <input class="form-control" type="search" placeholder="Search here..." required="">
                                        <button type="submit" class="btn btn-primary submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="#">
                                    <i class="fa fa-medkit"></i> <?php echo $title ?></a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars"></i>
                            </span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home
                                       
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="loc.php">Covid Cases Near by</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="ac.php">Possible Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="print.php">Print Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="hdata.php">Health Department</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="amb.php">Ambulance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../logout.php">Logout</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>