		<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light navbar-theme-secondary headroom">
            <div class="container position-relative">
                <a class="navbar-brand mr-lg-5" href="<?php echo base_url();?>">
                    <img class="navbar-brand-dark" src="<?php echo base_url();?>assets/img/brand/light.svg" alt="Logo light">
                    <img class="navbar-brand-light" src="<?php echo base_url();?>assets/img/brand/dark.svg" alt="Logo dark">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="<?php echo base_url();?>">
                                    <img src="<?php echo base_url();?>assets/img/brand/secondary.svg" alt="Logo mobile">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="<?php echo base_url();?>" role="button" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                <i class="fas fa-angle-down nav-link-arrow"></i>
                                <span class="nav-link-inner-text">Informasi Lomba</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url();?>guidelinebook">Guideline Book</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>faq">FAQ</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                <i class="fas fa-angle-down nav-link-arrow"></i>
                                <span class="nav-link-inner-text">Support</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg">
                                <div class="col-auto px-0" data-dropdown-content>
                                    <div class="list-group list-group-flush">
                                        <a href="./<?php echo base_url();?>assets/docs/introduction.html" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm icon-secondary"><i class="fas fa-file-alt"></i></span>
                                            <div class="ml-4">
                                                <span class="text-dark d-block">Documentation<span class="badge badge-sm badge-secondary ml-2">v1.0</span></span>
                                                <span class="small">Examples and guides</span>
                                            </div>
                                        </a>
                                        <a href="https://themesberg.com/contact" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm icon-primary"><i class="fas fa-microphone-alt"></i></span>
                                            <div class="ml-4">
                                                <span class="text-dark d-block">Support</span>
                                                <span class="small">Looking for answers? Ask us!</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
				
                <div class="d-flex align-items-center">
					<ul class="flex-row list-style-none mr-4 d-none d-sm-flex">
                        <li class="nav-item mr-3">
                            <a href="https://twitter.com/themesberg" target="_blank" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Follow us on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="https://www.facebook.com/themesberg/" target="_blank" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Like us on Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="https://github.com/themesberg" target="_blank" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Star us on Github">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.youtube.com/channel/UCEl11YeRhWQ-iFS0naimRsA" target="_blank" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Watch us on YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo base_url();?>form-pendaftaran" role="button" class="btn btn-primary ml-lg-3 animate-up-2">Pendaftaran</a>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>