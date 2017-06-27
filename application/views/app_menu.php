
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url(); ?>assets/back/images/avatar-1.png" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p><?php echo $name; ?></p>
                    <p class="designation"><?php echo $rolename; ?> <i class="icofont icofont-caret-down m-l-5"></i></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                    <a class="waves-effect waves-dark" href="profile.html">
                        <i class="icon-user"></i>
                        <span class="menu-text">View Profile</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-settings"></i>
                        <span class="menu-text">Settings</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>mpa/logout">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
				<?php 
				/*
				1 as Administrator
				2 as Customer
				3 as Agent
				4 as Editor
				*/
					if($role == '1') {
				?>
                <li class="nav-level">ADMINISTRATOR</li>
                <li><a href="<?php echo base_url(); ?>mpa/agents/detail"><i class="icon-grid"></i><span> Inbox</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
				<li><a href="<?php echo base_url(); ?>mpa/agents/detail"><i class="icon-grid"></i><span> File Management</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
				<li><a href="<?php echo base_url(); ?>mpa/agents/detail"><i class="icon-grid"></i><span> User Management</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
				<?php 
					}
					elseif($role == '2') {
				?>
                <li class="nav-level">CUSTOMER</li>
                <li><a href="<?php echo base_url(); ?>mpa/agents/detail/<?php echo $name; ?>"><i class="icon-grid"></i><span> โปรไฟล์</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
                <li><a href="<?php echo base_url(); ?>mpa/agents/detail/<?php echo $name; ?>"><i class="icon-book-open"></i><span> รายงานประจำเดือน</span></a> </li>
				<?php 
					}
					elseif($role == '3') {
				?>
                <li class="nav-level">AGENTS</li>
				
                <li><a href="<?php echo base_url(); ?>mpa/dashboard/<?php echo $name; ?>"><i class="icon-speedometer"></i><span> Dashboard</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
				<li><a href="<?php echo base_url(); ?>mpa/agents/detail/<?php echo $name; ?>"><i class="icon-grid"></i><span> โปรไฟล์</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
				<li class="treeview">
                    <a class="waves-effect waves-dark" href="#">
						<i class="icon-user-follow"></i><span> ลูกค้า</span><i class="icon-arrow-down"></i>
					</a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="index-2.html"><i class="icon-arrow-right"></i><span>เปิดบัญชีสำเร็จ</span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard2.html"><i class="icon-arrow-right"></i><span>ระหว่างเปิดบัญชี </span></a></li>
                    </ul>
                </li>
				
                <li><a href="<?php echo base_url(); ?>mpa/agents/detail/<?php echo $name; ?>"><i class="icon-book-open"></i><span> รายงานประจำเดือน</span></a> </li>
                <li><a href="<?php echo base_url(); ?>mpa/agents/detail/<?php echo $name; ?>"><i class="icon-chart"></i><span> ค่าคอมตัวแทน</span></a> </li>
				<li class="treeview">
                    <a class="waves-effect waves-dark" href="#">
						<i class="icon-cloud-download"></i><span> Download เอกสาร</span><i class="icon-arrow-down"></i>
					</a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="index-2.html"><i class="icon-arrow-right"></i><span>คลาสรูม</span></a></li>
                        <li><a class="waves-effect waves-dark" href="dashboard2.html"><i class="icon-arrow-right"></i><span>จองเวลา</span></a></li>
                    </ul>
                </li>
				<?php 
					}
					else{
				?>
                <li class="nav-level">EDITOR</li>
                <li><a href="<?php echo base_url(); ?>mpa/agents/detail"><i class="icon-grid"></i><span> Content Management</span><!--span class="label label-warning menu-caption">100+</span--></a> </li>
				<?php 
					}
				?>
				<!--ul class="treeview-menu">
					<li><a class="waves-effect waves-dark" href="menu-static.html"><i class="icon-arrow-right"></i> Static Layout</a></li>
					<li><a class="waves-effect waves-dark" href="menu-fixed.html"><i class="icon-arrow-right"></i> Header and Sidebar Fixed</a></li>
					<li><a class="waves-effect waves-dark" href="menu-sidebar-sticky.html"><i class="icon-arrow-right"></i> Sidebar Sticky</a></li>
					<li><a class="waves-effect waves-dark" href="menu-header-fixed.html"><i class="icon-arrow-right"></i> Header Fixed</a></li>
					<li><a class="waves-effect waves-dark" href="http://ableproadmin.com/light/horizontal/menu-horizontal.html" target="_blank"><i class="icon-arrow-right"></i> Menu Horizontal</a></li>
					<li><a class="waves-effect waves-dark" href="http://ableproadmin.com/light/horizontal/menu-horizontal-icon.html" target="_blank"><i class="icon-arrow-right"></i> Menu Horizontal Icon</a></li>
					<li><a class="waves-effect waves-dark" href="http://ableproadmin.com/light/horizontal/menu-horizontal-fixed.html" target="_blank"><i class="icon-arrow-right"></i> Header Horizontal Fixed</a></li>
					<li><a class="waves-effect waves-dark" href="http://ableproadmin.com/light/horizontal/menu-horizontal-icon-fixed.html" target="_blank"><i class="icon-arrow-right"></i> Header Horizontal Icon Fixed</a></li>
					<li><a class="waves-effect waves-dark" href="menu-footer-fixed.html"><i class="icon-arrow-right"></i> Footer Fixed</a></li>
					<li><a class="waves-effect waves-dark" href="http://ableproadmin.com/light/horizontal/menu-bottom.html" target="_blank"><i class="icon-arrow-right"></i> Bottom Menu Fixed</a></li>
					<li><a class="waves-effect waves-dark" href="http://ableproadmin.com/light/horizontal/mega-menu.html" target="_blank"><i class="icon-arrow-right"></i> Mega Menu</a></li>
					<li><a class="waves-effect waves-dark" href="box-layout.html"><i class="icon-arrow-right"></i> Box-Layout</a></li>

				</ul>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Accordion</a></li>
                        <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Button</a></li>
                        <li><a class="waves-effect waves-dark" href="button-fab.html"><i class="icon-arrow-right"></i> Button FAB</a></li>
                        <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Label Badge</a></li>
                        <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Grid system</a></li>
                        <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> Box Shadow</a></li>
                        <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a></li>
                        <li><a class="waves-effect waves-dark" href="draggable.html"><i class="icon-arrow-right"></i> Draggable</a></li>
                        <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light Box</a></li>
                        <li><a class="waves-effect waves-dark" href="list.html"><i class="icon-arrow-right"></i> List</a></li>
                        <li><a class="waves-effect waves-dark" href="nestable.html"><i class="icon-arrow-right"></i> Nestable</a></li>
                        <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i> Notification</a></li>
                        <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i> Panels-Wells</a></li>
                        <li><a class="waves-effect waves-dark" href="preloader.html"><i class="icon-arrow-right"></i> Preloader</a></li>
                        <li><a class="waves-effect waves-dark" href="range-slider.html"><i class="icon-arrow-right"></i> Range-Slider</a></li>
                        <li><a class="waves-effect waves-dark" href="rating.html"><i class="icon-arrow-right"></i> Rating</a></li>
                        <li><a class="waves-effect waves-dark" href="slider.html"><i class="icon-arrow-right"></i> Slider</a></li>
                        <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a></li>
                        <li><a class="waves-effect waves-dark" href="treeview.html"><i class="icon-arrow-right"></i> Tree View</a></li>
                        <li><a class="waves-effect waves-dark" href="tour.html"><i class="icon-arrow-right"></i> Tour</a></li>
                        <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i> Tooltips</a></li>
                        <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i> Typography</a></li>
                        <li><a class="waves-effect waves-dark" href="card.html"><i class="icon-arrow-right"></i> Card</a></li>
                        <li><a class="waves-effect waves-dark" href="footer.html"><i class="icon-arrow-right"></i> Footer</a></li>
                        <li><a class="waves-effect waves-dark" href="footer-center.html"><i class="icon-arrow-right"></i> Footer Center</a></li>
                        <li><a class="waves-effect waves-dark" href="footer-right.html"><i class="icon-arrow-right"></i> Footer Right</a></li>
                        <li><a class="waves-effect waves-dark" href="other.html"><i class="icon-arrow-right"></i> Other</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-picture"></i><span> Theme UI</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="contact-card.html"><i class="icon-arrow-right"></i> Contact Card</a></li>
                        <li><a class="waves-effect waves-dark" href="contact-details.html"><i class="icon-arrow-right"></i> Contact Details</a></li>
                        <li><a class="waves-effect waves-dark" href="animation.html"><i class="icon-arrow-right"></i> Animation</a></li>
                        <li><a class="waves-effect waves-dark" href="dynamic-grid.html"><i class="icon-arrow-right"></i> Dynamic Grid</a></li>
                        <li><a class="waves-effect waves-dark" href="generic-class.html"><i class="icon-arrow-right"></i> Generic Class</a></li>
                        <li><a class="waves-effect waves-dark" href="gridstack.html"><i class="icon-arrow-right"></i> Grid Stack</a></li>
                        <li><a class="waves-effect waves-dark" href="modal.html"><i class="icon-arrow-right"></i> Modal</a></li>
                        <li><a class="waves-effect waves-dark" href="portlets.html"><i class="icon-arrow-right"></i> Portlets</a></li>
                        <li><a class="waves-effect waves-dark" href="sticky.html"><i class="icon-arrow-right"></i> Sticky</a></li>

                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Icon</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="font-awesome.html"><i class="icon-arrow-right"></i> Font-Awesome Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="material-design-icons.html"><i class="icon-arrow-right"></i> Material Design Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="simple-line-icons.html"><i class="icon-arrow-right"></i> Simple Line Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="ion-icon.html"><i class="icon-arrow-right"></i> Ion Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="icofonts.html"><i class="icon-arrow-right"></i> Ico Fonts Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="weather-icons.html"><i class="icon-arrow-right"></i> Weather Icons</a></li>
                                <li><a class="waves-effect waves-dark" href="typicons-icons.html"><i class="icon-arrow-right"></i> TypIcons</a></li>
                                <li><a class="waves-effect waves-dark" href="flags.html"><i class="icon-arrow-right"></i> Flags</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="echart.html"><i class="icon-arrow-right"></i> E-Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="chartjs.html"><i class="icon-arrow-right"></i> Chart Js</a></li>
                        <li><a class="waves-effect waves-dark" href="list-charts.html"><i class="icon-arrow-right"></i> List Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="knob-chart.html"><i class="icon-arrow-right"></i> Knob Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="nvd3-chart.html"><i class="icon-arrow-right"></i> nvd3 Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="peity-chart.html"><i class="icon-arrow-right"></i> Peity Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="radial-chart.html"><i class="icon-arrow-right"></i> Radial Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="rickshaw-chart.html"><i class="icon-arrow-right"></i> Rickshaw Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="sparkline-chart.html"><i class="icon-arrow-right"></i> Sparkline Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="c3chart-chart.html"><i class="icon-arrow-right"></i> c3Chart Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="map-google.html"><i class="icon-arrow-right"></i> Map Google</a></li>
                        <li><a class="waves-effect waves-dark" href="map-vector.html"><i class="icon-arrow-right"></i> Map Vector</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-materialize.html"><i class="icon-arrow-right"></i> Form Elements Material</a></li>
                        <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
                        <li><a class="waves-effect waves-dark" href="forms-wizard.html"><i class="icon-arrow-right"></i> Form Wizard</a></li>
                        <li><a class="waves-effect waves-dark" href="form-mask.html"><i class="icon-arrow-right"></i> Form Masking</a></li>
                        <li><a class="waves-effect waves-dark" href="forms-validation.html"><i class="icon-arrow-right"></i> Form Validation</a></li>
                        <li><a class="waves-effect waves-dark" href="x-editable.html"><i class="icon-arrow-right"></i> X-Editable</a></li>
                        <li><a class="waves-effect waves-dark" href="file-upload.html"><i class="icon-arrow-right"></i> File Upload</a></li>
                        <li><a class="waves-effect waves-dark" href="image-cropper.html"><i class="icon-arrow-right"></i> Image Cropper</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-list"></i><span> Tables</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="basic-table.html"><i class="icon-arrow-right"></i> Basic Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="data-table.html"><i class="icon-arrow-right"></i> Data Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="responsive-table.html"><i class="icon-arrow-right"></i> Responsive Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="editable-table.html"><i class="icon-arrow-right"></i> Editable Tables</a></li>
                        <li><a class="waves-effect waves-dark" href="foo-tables.html"><i class="icon-arrow-right"></i> Foo Tables</a></li>
                    </ul>
                </li>

                <li class="nav-level">More</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                                <li><a class="waves-effect waves-dark" href="register2.html" target="_blank"><i class="icon-arrow-right"></i><span> Register 2</span></a></li>
                                <li><a class="waves-effect waves-dark" href="signin-up-modal.html"><i class="icon-arrow-right"></i><span> Sign In/Up with Modal </span></a></li>
                                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="login2.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 2</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="landing-page.html" target="_blank"><i class="icon-arrow-right"></i> Landing page</a></li>
                        <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
                        <li><a class="waves-effect waves-dark" href="400.html" target="_blank"><i class="icon-arrow-right"></i> Error 400</a></li>
                        <li><a class="waves-effect waves-dark" href="403.html" target="_blank"><i class="icon-arrow-right"></i> Error 403</a></li>
                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="500.html" target="_blank"><i class="icon-arrow-right"></i> Error 500</a></li>
                        <li><a class="waves-effect waves-dark" href="503.html" target="_blank"><i class="icon-arrow-right"></i> Error 503</a></li>
                        <li><a class="waves-effect waves-dark" href="gallery.html"><i class="icon-arrow-right"></i> Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                        <li><a class="waves-effect waves-dark" href="invoice.html"><i class="icon-arrow-right"></i> Invoice</a></li>
                        <li><a class="waves-effect waves-dark" href="blog.html"><i class="icon-arrow-right"></i> Blog</a></li>
                        <li><a class="waves-effect waves-dark" href="blog-detail.html"><i class="icon-arrow-right"></i> Blog Detail</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result 1</a></li>
                        <li><a class="waves-effect waves-dark" href="search-result2.html"><i class="icon-arrow-right"></i> Search Result 2</a></li>
                    </ul>
                </li-->

            </ul>
        </section>
    </aside>