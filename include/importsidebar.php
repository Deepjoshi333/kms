  <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.php" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="assets/images/logo-full.png" alt="" class="logo logo-lg" />
                    <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="nxl-navbar">
                    <li class="nxl-item nxl-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-airplay"></i></span>
                            <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>index.php">CRM</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>analytics.php">Analytics</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-cast"></i></span>
                            <span class="nxl-mtext">Reports</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>reports-sales.php">Sales Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>reports-leads.php">Leads Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>reports-project.php">Project Report</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>reports-timesheets.php">Timesheets Report</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-send"></i></span>
                            <span class="nxl-mtext">Applications</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>apps-chat.php">Chat</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>apps-email.php">Email</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>apps-tasks.php">Tasks</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>apps-notes.php">Notes</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>apps-storage.php">Storage</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>apps-calendar.php">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-at-sign"></i></span>
                            <span class="nxl-mtext">Proposal</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>proposal.php">Proposal</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>proposal-view.php">Proposal View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>proposal-edit.php">Proposal Edit</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>proposal-create.php">Proposal Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-dollar-sign"></i></span>
                            <span class="nxl-mtext">Payment</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>payment.php">Payment</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>invoice-view.php">Invoice View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>invoice-create.php">Invoice Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-users"></i></span>
                            <span class="nxl-mtext">Customers</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>customers.php">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>customers-view.php">Customers View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>customers-create.php">Customers Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-alert-circle"></i></span>
                            <span class="nxl-mtext">Leads</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>leads.php">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>leads-view.php">Leads View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>leads-create.php">Leads Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-briefcase"></i></span>
                            <span class="nxl-mtext">Projects</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>projects.php">Projects</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>projects-view.php">Projects View</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>projects-create.php">Projects Create</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-layout"></i></span>
                            <span class="nxl-mtext">Widgets</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>widgets-lists.php">Lists</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>widgets-tables.php">Tables</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>widgets-charts.php">Charts</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>widgets-statistics.php">Statistics</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>widgets-miscellaneous.php">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-settings"></i></span>
                            <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-general.php">General</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-seo.php">SEO</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-tags.php">Tags</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-email.php">Email</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-tasks.php">Tasks</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-leads.php">Leads</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-support.php">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-finance.php">Finance</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-gateways.php">Gateways</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-customers.php">Customers</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-localization.php">Localization</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-recaptcha.php">reCAPTCHA</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>settings-miscellaneous.php">Miscellaneous</a></li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-power"></i></span>
                            <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Login</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>auth-login-cover.php">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>auth-login-minimal.php">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>auth-login-creative.php">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Register</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-register-cover.php">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-register-minimal.php">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-register-creative.php">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Error-404</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-404-cover.php">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-404-minimal.php">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-404-creative.php">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Reset Pass</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-reset-cover.php">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-reset-minimal.php">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-reset-creative.php">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Verify OTP</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-verify-cover.php">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-verify-minimal.php">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-verify-creative.php">Creative</a></li>
                                </ul>
                            </li>
                            <li class="nxl-item nxl-hasmenu">
                                <a href="javascript:void(0);" class="nxl-link">
                                    <span class="nxl-mtext">Maintenance</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                                </a>
                                <ul class="nxl-submenu">
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-maintenance-cover.php">Cover</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-maintenance-minimal.php">Minimal</a></li>
                                    <li class="nxl-item"><a class="nxl-link" href="./auth-maintenance-creative.php">Creative</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nxl-item nxl-hasmenu">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="feather-life-buoy"></i></span>
                            <span class="nxl-mtext">Help Center</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>#">Support</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>help-knowledgebase.php">KnowledgeBase</a></li>
                            <li class="nxl-item"><a class="nxl-link" href="<?php echo $base_url_website; ?>/docs/documentations">Documentations</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="card text-center">  
                    <div class="card-body">
                        <i class="feather-sunrise fs-4 text-dark"></i>
                        <h6 class="mt-4 text-dark fw-bolder">Downloading Center</h6>
                        <p class="fs-11 my-3 text-dark">Duralux is a production ready CRM to get started up and running easily.</p>
                        <a href="https://www.themewagon.com/themes/Duralux-admin" target="_blank" class="btn btn-primary text-dark w-100">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->