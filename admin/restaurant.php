<?php include "inc/header.php" ?>

	<div class="page-wrapper">
		<div class="page-content">

			<?php  
				$do = isset( $_GET['do'] ) ? $_GET['do'] : "Manage";

				if ( $do == "Manage" ) { ?>
					<!-- Start Breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Restaurant Management</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="dashboard.php"><i class="bx bx-home-alt"></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Restaurant Manage</li>
								</ol>
							</nav>
						</div>
					</div>
					<!-- End Breadcrumb-->

					<h6 class="mb-0 text-uppercase">MANAGE ALL RESTAURANT</h6>
					<hr>

					<div class="row row-cols-12 row-cols-lg-12 row-cols-xl-12">
						<div class="col">
							<div class="card radius-15">
								<div class="card-body text-center">
									<div class="p-4 border radius-15">

										<!-- ### START: MAIN BODY CONTENT  ### -->
										<!-- ### END: MAIN BODY CONTENT  ### -->
										
									</div>
								</div>
							</div>
						</div>				
					</div>
				<?php }

				else if ( $do == "Add" ) {
					echo "Ok";
				}

				else if ( $do == "Store" ) {
					echo "Ok";
				}

				else if ( $do == "Edit" ) {
					echo "Ok";
				}

				else if ( $do == "Update" ) {
					echo "Ok";
				}  

				else if ( $do == "Trash" ) {
					echo "Ok";
				}

				else if ( $do == "ManageTrash" ) {
					echo "Ok0";
				} 

				else if ( $do == "Delete" ) {
					echo "Ok";
				}
			?>		


			
		</div>
	</div>

<?php include "inc/footer.php" ?>