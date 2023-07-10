<?php
	$status_wise_courses = $this->crud_model->get_status_wise_courses();
 ?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">
	<div class="leftbar-user">
		<a href="javascript: void(0);">
			<img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="user-image" height="42" class="rounded-circle shadow-sm">
			<?php
			$admin_details = $this->user_model->get_all_user($this->session->userdata('user_id'))->row_array();
			?>
			<span class="leftbar-user-name"><?php echo $admin_details['first_name'].' '.$admin_details['last_name']; ?></span>
		</a>
	</div>

	<!--- Sidemenu -->
	<ul class="metismenu side-nav side-nav-light">

		<li class="side-nav-title side-nav-item"><?php echo get_phrase('navigation'); ?></li>

		<li class="side-nav-item <?php if ($page_name == 'dashboard')echo 'active';?>">
			<a href="<?php echo site_url('admin/dashboard'); ?>" class="side-nav-link">
				<i class="dripicons-view-apps"></i>
				<span><?php echo get_phrase('dashboard'); ?></span>
			</a>
		</li>

		<li class="side-nav-item <?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit' ): ?> active <?php endif; ?>">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'categories' || $page_name == 'category_add' || $page_name == 'category_edit' ): ?> active <?php endif; ?>">
				<i class="dripicons-network-1"></i>
				<span> <?php echo get_phrase('categories'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "<?php if($page_name == 'categories' || $page_name == 'category_edit') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/categories'); ?>"><?php echo get_phrase('categories'); ?></a>
				</li>

				<li class = "<?php if($page_name == 'category_add') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/category_form/add_category'); ?>"><?php echo get_phrase('add_new_category'); ?></a>
				</li>
			</ul>
		</li>

		<!--<li class="side-nav-item">
			<a href="<?php echo site_url('blog'); ?>" class="side-nav-link <?php if ($page_name == 'blog' || $page_name == 'blog_add' || $page_name == 'blog_edit')echo 'active';?>">
				<i class="dripicons-archive"></i>
				<span>Blog</span>
			</a>
		</li>-->

		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/courses'); ?>" class="side-nav-link <?php if ($page_name == 'courses' || $page_name == 'course_add' || $page_name == 'course_edit')echo 'active';?>">
				<i class="dripicons-archive"></i>
				<span><?php echo get_phrase('courses'); ?></span>
			</a>
		</li>

		<!--<li class="side-nav-item">
			<a href="<?php echo site_url('admin/instructors'); ?>" class="side-nav-link <?php if ($page_name == 'instructors' || $page_name == 'instructor_add' || $page_name == 'instructor_edit')echo 'active';?>">
				<i class="mdi mdi-incognito"></i>
				<span><?php echo get_phrase('instructors'); ?></span>
			</a>
		</li>-->

		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/users'); ?>" class="side-nav-link <?php if ($page_name == 'users' || $page_name == 'user_add' || $page_name == 'user_edit')echo 'active';?>">
				<i class="dripicons-user-group"></i>
				<span><?php echo get_phrase('Alumnos / Coaches'); ?></span>
			</a>
		</li>

		<li class="side-nav-item <?php if ($page_name == 'enrol_history' || $page_name == 'enrol_student'): ?> active <?php endif; ?>">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'enrol_history' || $page_name == 'enrol_student'): ?> active <?php endif; ?>">
				<i class="dripicons-network-3"></i>
				<span> <?php echo get_phrase('enrolment'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "<?php if($page_name == 'enrol_history') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/enrol_history'); ?>"><?php echo get_phrase('enrol_history'); ?></a>
				</li>

				<li class = "<?php if($page_name == 'enrol_student') echo 'active'; ?>">
					<a href="<?php echo site_url('admin/enrol_student'); ?>"><?php echo get_phrase('enrol_a_student'); ?></a>
				</li>
			</ul>
		</li>

		<!--<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'admin_revenue' || $page_name == 'instructor_revenue' || $page_name == 'invoice'): ?> active <?php endif; ?>">
				<i class="dripicons-box"></i>
				<span> <?php echo get_phrase('report'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "<?php if($page_name == 'admin_revenue') echo 'active'; ?>" > <a href="<?php echo site_url('admin/admin_revenue'); ?>"><?php echo get_phrase('admin_revenue'); ?></a> </li>
				<?php if (get_settings('allow_instructor') == 1): ?>
						<li class = "<?php if($page_name == 'instructor_revenue') echo 'active'; ?>" >
								<a href="<?php echo site_url('admin/instructor_revenue'); ?>">
										<?php echo get_phrase('instructor_revenue');?> <span class = "badge badge-danger-lighten badge-pill"><?php echo $this->db->get_where('payment', array('instructor_payment_status' => 0))->num_rows() ?></span>
								</a>
						</li>
				<?php endif; ?>
			</ul>
		</li>-->

		<?php if (addon_status('offline_payment')): ?>
			<li class="side-nav-item">
				<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'offline_payment_pending' || $page_name == 'offline_payment_approve' || $page_name == 'offline_payment_suspended'): ?> active <?php endif; ?>">
					<i class="dripicons-box"></i>
					<span> <?php echo get_phrase('offline_payment'); ?></span>
					<span class="menu-arrow"></span>
				</a>
				<ul class="side-nav-second-level" aria-expanded="false">
					<li class = "<?php if($page_name == 'offline_payment_pending') echo 'active'; ?>" >
						<a href="<?php echo site_url('addons/offline_payment/pending'); ?>">
							<?php echo get_phrase('pending_request'); ?>
							<span class="badge badge-danger-lighten badge-pill float-right"><?php echo get_pending_offline_payment(); ?></span></span>
						</a>
					</li>
					<li class = "<?php if($page_name == 'offline_payment_approve') echo 'active'; ?>" >
						<a href="<?php echo site_url('addons/offline_payment/approve'); ?>"><?php echo get_phrase('accepted_request'); ?></a>
					</li>
					<li class = "<?php if($page_name == 'offline_payment_suspended') echo 'active'; ?>" >
						<a href="<?php echo site_url('addons/offline_payment/suspended'); ?>"><?php echo get_phrase('suspended_request'); ?></a>
					</li>
				</ul>
			</li>
		<?php endif; ?>

		<li class="side-nav-item">
			<a href="<?php echo site_url('admin/message'); ?>" class="side-nav-link <?php if ($page_name == 'message' || $page_name == 'message_new' || $page_name == 'message_read')echo 'active';?>">
				<i class="dripicons-message"></i>
				<span><?php echo get_phrase('message'); ?></span>
			</a>
		</li>

		<!--<li class="side-nav-item">
			<a href="javascript: void(0);" class="side-nav-link <?php if ($page_name == 'addons' || $page_name == 'addon_add' || $page_name == 'available_addons'): ?> active <?php endif; ?>">
				<i class="dripicons-graph-pie"></i>
				<span> <?php echo get_phrase('addons'); ?> </span>
				<span class="menu-arrow"></span>
			</a>
			<ul class="side-nav-second-level" aria-expanded="false">
				<li class = "<?php if($page_name == 'addons') echo 'active'; ?>" >
					<a href="<?php echo site_url('admin/addon'); ?>"><?php echo get_phrase('addon_manager'); ?></a>
				</li>
				<li class = "<?php if($page_name == 'available_addons') echo 'active'; ?>" >
					<a href="<?php echo site_url('admin/available_addons'); ?>"><?php echo get_phrase('available_addons'); ?></a>
				</li>
			</ul>
		</li>-->
    </ul>
</div>