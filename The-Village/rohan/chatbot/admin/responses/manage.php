<style>
	.q-item {
	    border-radius: 50px;
	}


</style>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
	$qry = $conn->query("SELECT q.id, r.response_message, q.question FROM `questions` q inner join `responses` r on q.response_id = r.id where q.id = {$_GET['id']}");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>

<div class="be-left-sidebar">
            <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Data Tables</a>
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li><a href="index-2.html"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>UI Elements</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="ui-alerts.html">Alerts</a>
                                        </li>
                                        <li><a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="ui-cards.html"><span class="badge badge-primary float-right">New</span>Cards</a>
                                        </li>
                                        <li><a href="ui-panels.html">Panels</a>
                                        </li>
                                        <li><a href="ui-general.html">General</a>
                                        </li>
                                        <li><a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li><a href="ui-notifications.html">Notifications</a>
                                        </li>
                                        <li><a href="ui-icons.html">Icons</a>
                                        </li>
                                        <li><a href="ui-grid.html">Grid</a>
                                        </li>
                                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                        </li>
                                        <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                                        </li>
                                        <li><a href="ui-typography.html">Typography</a>
                                        </li>
                                        <li><a href="ui-dragdrop.html"><span class="badge badge-primary float-right">New</span>Drag &amp; Drop</a>
                                        </li>
                                        <li><a href="ui-sweetalert2.html"><span class="badge badge-primary float-right">New</span>Sweetalert 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="charts-flot.html">Flot</a>
                                        </li>
                                        <li><a href="charts-sparkline.html">Sparklines</a>
                                        </li>
                                        <li><a href="charts-chartjs.html">Chart.js</a>
                                        </li>
                                        <li><a href="charts-morris.html">Morris.js</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="form-elements.html">Elements</a>
                                        </li>
                                        <li><a href="form-validation.html">Validation</a>
                                        </li>
                                        <li><a href="form-multiselect.html">Multiselect</a>
                                        </li>
                                        <li><a href="form-wizard.html">Wizard</a>
                                        </li>
                                        <li><a href="form-masks.html">Input Masks</a>
                                        </li>
                                        <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                        </li>
                                        <li><a href="form-upload.html">Multi Upload</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="tables-general.html">General</a>
                                        </li>
                                        <li class="active"><a href="tables-datatables.html">Data Tables</a>
                                        </li>
                                        <li><a href="tables-filters.html"><span class="badge badge-primary float-right">New</span>Table Filters</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="pages-blank.html">Blank Page</a>
                                        </li>
                                        <li><a href="pages-blank-header.html">Blank Page Header</a>
                                        </li>
                                        <li><a href="pages-login.html">Login</a>
                                        </li>
                                        <li><a href="pages-login2.html">Login v2</a>
                                        </li>
                                        <li><a href="pages-404.html">404 Page</a>
                                        </li>
                                        <li><a href="pages-sign-up.html">Sign Up</a>
                                        </li>
                                        <li><a href="pages-forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li><a href="pages-profile.html">Profile</a>
                                        </li>
                                        <li><a href="pages-pricing-tables.html">Pricing Tables</a>
                                        </li>
                                        <li><a href="pages-pricing-tables2.html">Pricing Tables v2</a>
                                        </li>
                                        <li><a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li><a href="pages-timeline2.html">Timeline v2</a>
                                        </li>
                                        <li><a href="pages-invoice.html"><span class="badge badge-primary float-right">New</span>Invoice</a>
                                        </li>
                                        <li><a href="pages-calendar.html">Calendar</a>
                                        </li>
                                        <li><a href="pages-gallery.html">Gallery</a>
                                        </li>
                                        <li><a href="pages-code-editor.html"><span class="badge badge-primary float-right">New    </span>Code Editor</a>
                                        </li>
                                        <li><a href="pages-booking.html"><span class="badge badge-primary float-right">New</span>Booking</a>
                                        </li>
                                        <li><a href="pages-loaders.html"><span class="badge badge-primary float-right">New</span>Loaders</a>
                                        </li>
                                        <li><a href="pages-ajax-loader.html"><span class="badge badge-primary float-right">New</span>AJAX Loader</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider">Features</li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Email</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="email-inbox.html">Inbox</a>
                                        </li>
                                        <li><a href="email-read.html">Email Detail</a>
                                        </li>
                                        <li><a href="email-compose.html">Email Compose</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="layouts-primary-header.html">Primary Header</a>
                                        </li>
                                        <li><a href="layouts-success-header.html">Success Header</a>
                                        </li>
                                        <li><a href="layouts-warning-header.html">Warning Header</a>
                                        </li>
                                        <li><a href="layouts-danger-header.html">Danger Header</a>
                                        </li>
                                        <li><a href="layouts-search-input.html">Search Input</a>
                                        </li>
                                        <li><a href="layouts-offcanvas-menu.html">Off Canvas Menu</a>
                                        </li>
                                        <li><a href="layouts-top-menu.html"><span class="badge badge-primary float-right">New</span>Top Menu</a>
                                        </li>
                                        <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                                        </li>
                                        <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                                        </li>
                                        <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                                        </li>
                                        <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                                        </li>
                                        <li><a href="layouts-boxed-layout.html"><span class="badge badge-primary float-right">New</span>Boxed Layout</a>
                                        </li>
                                        <li><a href="pages-blank-aside.html">Page Aside</a>
                                        </li>
                                        <li><a href="layouts-collapsible-sidebar.html">Collapsible Sidebar</a>
                                        </li>
                                        <li><a href="layouts-sub-navigation.html"><span class="badge badge-primary float-right">New</span>Sub Navigation</a>
                                        </li>
                                        <li><a href="layouts-mega-menu.html"><span class="badge badge-primary float-right">New</span>Mega Menu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li><a href="maps-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-folder"></i><span>Menu Levels</span></a>
                                    <ul class="sub-menu">
                                        <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                </li>
                                                <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 1</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                </li>
                                                <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 2</span></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="icon mdi mdi-undefined"></i><span>Level 3</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="documentation.html"><i class="icon mdi mdi-book"></i><span>Documentation</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="progress-widget">
                    <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

<div class="be-content">
           
		   <div class="main-content container-fluid">
<div class="card card-outline card-info">
	<div class="card-header">
		<h3 class="card-title"><?php echo isset($_GET['id']) ? "Update ": "Create New " ?>Question Response</h3>
	</div>
	<div class="card-body">
		<form action="" id="response-form">
			<input type="hidden" name ="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
			<?php if(!isset($id)): ?>
			<div class="form-group">
				<label for="question_field" class="control-label">Question</label>
				<div class="input-group col-lg-6">
                    <input type="text" id="question" class="form-control form-control-sm" data-original-title="" title="">

                    <div class="input-group-append">
                      <a href="javascript:void(0)" class="input-group-text  bg-primary" id="add_question"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
               &nbsp; &nbsp; <i>(Click the "<b> +  Add</b>" to add the question)</i>
			</div>
			<?php else: ?>
				<div class="form-group">
					<label for="question_field" class="control-label">Question</label>
                    <input type="text" id="question_field" name="question[]" value="<?php echo isset($question) ? $question : '' ?>" class="form-control form-control-sm" required>
				</div>
			<?php endif; ?>
			<div class="form-group">
			<div class="continer-fluid" id="question-holder">
				<?php 

				if(isset($_GET['q']) && !empty($_GET['q'])){
				?>	
					<span class="badge badge-primary q-item m-2 pl-2">
						<span style='font-size:12px'><?php echo $_GET['q'] ?><input type='hidden' name='question[]' value='<?php echo $_GET['q'] ?>'></span>
						<span class='p-2'><a href='javascript:void(0)' onclick="$(this).closest('.q-item').remove();" class='text-white'><i class='fa fa-times'></i></a></span></span>
					</span>
				<script>
					$(document).ready(function(){
						$('#response_message').focus();
					})
				</script>
				<?php 
				}

				?>

			</div>
			</div>
			<div class="form-group">
				<label for="response_message" class="control-label">Response Message</label>
				<textarea name="response_message" id="response_message" cols="30" rows="3" class="form-control" style="resize: none" required><?php echo isset($response_message) ? $response_message : ''; ?></textarea>
			</div>
		</form>
	</div>
	<div class="card-footer">
		<button class="btn btn-flat btn-primary" form="response-form">Save</button>
		<a class="btn btn-flat btn-default" href="?page=responses">Cancel</a>
	</div>
</div>
<script>
	$(document).ready(function(){
		function add_question(){
			var question = $('#question').val()
			if(question == '' || question == null)
				return false;
			var span = $('<span class="badge badge-primary q-item m-2 pl-2"></span>')
			span.append("<span style='font-size:12px'>"+question+"<input type='hidden' name='question[]' value='"+question+"'></span>")
			span.append("<span class='p-2'><a href='javascript:void(0)' onclick=\"$(this).closest('.q-item').remove();\" class='text-white'><i class='fa fa-times'></i></a></span></span>")
			span.appendTo('#question-holder');
			 $('#question').val('')
			 $('#question').removeClass("border-danger")
			 $('.err-msg').remove();
			 $('#question').focus();
		}
		$('#add_question').click(function(){
			add_question()
		})
		$('#question').keypress(function(e){
			if(e.which === 13){
			add_question()
			return false;
			}
		})
		$('#response-form').submit(function(e){
			e.preventDefault();
			 $('.err-msg').remove();
			if($('input[name="question[]"]').length <= 0){
				$('#question').addClass("border-danger")
				$('#question-holder').after("<span class='alert alert-danger err-msg'><i class='fa fa-exclamation-triangle'></i>  You must add atleast one (1) possible question for the response.</span>")
				$('#question').focus();
				return false;
			}
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_response",
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(resp == 1){
						location.href = "./?page=responses";
					}else{
						alert_toast("An error occured",'error');
						end_loader();
					}
				}
			})
		})
	})
</script>