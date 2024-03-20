<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['category'])){
		$catid = $_GET['category'];
		$zero = 0;
		$restricted = 'OR restricted =' .$zero;
		$where = 'WHERE category_id = '.$catid.' AND restricted = 0'; 
		// or restricted = '. $restricted . '
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	
	 
	  <div class="content-wrapper">
	    <div class="container">
		 

			<div  id="app"class="flex-center position-ref full-height">
                <div style="text-align: center;" class="content-index">
					<div class="row-image-content">
						<!-- <div class="sepacolumn side-column"></div>	

						<div class="sepacolumn mid-column">
							<img class="img-fluid" src="images/logo/acblogo_orig.png" width="350" height="100">
							<img class="img-fluid" src="images/logo/ASEAN.png" width="100" height="100">
						</div>

						<div class="sepacolumn side-column"></div>	 -->
						</br>
						</br>
						<div class="row">
							<div class="column side">
							</div>
						
							<div class="column middle">
								<img class="img-fluid" src="images/logo/acblogo_orig.png" width="350" height="100">
								<img class="img-fluid" src="images/logo/ASEAN.png" width="100" height="100">
							</div>
						
							<div class="column side">
							</div>
						</div>
					</div>
					</br>
                    <div class="title m-b-md">
						<h1><strong>KNOWLEDGE MANAGEMENT PLATFORM</strong></h1>
                    </div>
					</br>
					</br>
                	<h4><p style="text-align: justify;">The <strong> Knowledge Management Platform </strong>will help ensure that the information generated through
					biodiversity information-sharing between the AMS and ACB is translated into policy and action.
					It aspires that the Knowledge Management Plan will provide guidance in terms of recognising
					the processes involved, addressing prevailing knowledge management gaps and challenges,
					and finding solutions to improve processes and synergies.</p></h4>
					</br>
					</br>
 
					<a href="ams/index.php"><button class="btn btn-lg btn-primary w-100 fs-6">Login</button></a>
                </div>
  
            </div>


			<div class="title m-b-md">
				<h3><strong>Browse by Thematic and Geographic Concern</strong></h3>
				</br>	

            </div>
				<div class="bkeyword">
					<div class="slide-container swiper">
						<div class="slide-content">
						<div class="card-wrapper swiper-wrapper"> 
							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/ABS.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Access and Benefit Sharing</h2>

								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/BIM.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Biodiversity Information Management</h2>

								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/CCB.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Climate Change and Biodiversity</h2>
	
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/SCWL.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">Species Conservation and <br/> Wildlife Law Enforcement</h2>
				
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/EEB.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">The Economics of Ecosystems <br/>and  Biodiversity</h2>
			
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/AB.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Agricultural Biodiversity</h2>
				
								</div>
								
							</div>.

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/AHP.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">ASEAN Heritage Parks and <br/> Protected Area Management</h2>
				
								</div>
								
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/CMB.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Coastal and Marine Biodiversity</h2>
						
								</div>
								
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/TPA.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Transboundary Protected Areas</h2>
								
								</div>
								
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/UB.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Urban Biodiversity</h2>
							
								</div>
								
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay"></span>
									
									<div class="card-image">
										<img src="images/ThematicConcern/WP.png" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name"><br/>Wetlands and Peatlands<br/></h2>
							
								</div>
								
							</div>
						</div>
					</div>

					
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					</br>	</br>	
					<div class="swiper-pagination"></div>
				</div>
				</br>	
				</br>	
				</br>	
				<div class="title m-b-md">
					<h3><strong>Browse by Category</strong></h3>
				</br>	

				</div>
				<div class="bcategory">
					<div class="slide-container swiper">
						<div class="slide-content2">
						<div class="card-wrapper swiper-wrapper"> 
							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/apo.jpeg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">Policy Brief</h2>
		 
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/gPu8WRVw.jpeg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">Project Completion</h2>
									<!-- <p class="description">asdgadga dgas dga sdg asdg asdg asdgas dgasdasd
										a slide-containersda <s>da 
											slide-containers <datagrid>asd</datagrid>
										</s>
									</p> -->
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/i4M6-IUw.jpeg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">Publication</h2>
 
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/-MME6Jij.jpg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">ASEAN Biodiversity Outlook</h2>
			 
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/NASFV07w.jpeg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">2016 BKDM Workshop Files</h2>
 
								</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/NVbWRvPw.jpeg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">KM Plan and Product Development</h2>
		 
								</div>

							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="card-overlay2"></span>
									
									<div class="card-image">
										<img src="images/bg/SSNw3itU.jpg" alt="" class="card-img">
									</div>
								</div>

								<div class="card-content">
									<h2 class="name">KBA Course Prep Documents</h2>
									<!-- <p class="description">asdgadga dgas dga sdg asdg asdg asdgas dgasdasd
										a slide-containersda <s>da 
											slide-containers <datagrid>asd</datagrid>
										</s>
									</p> -->
								</div>

							</div>
						</div>
					</div>

<!-- 					
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div> -->
				</div>
       	</div>

	</div>

			
	      <!-- Main content -->
	      <section class="content-index">
	        <div class="row">
	        	<div class="col-sm-12 col-sm-offset-0">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
					 <span id='jump_to_this_location'></span>
	        		<div class="box">
	        			<div class="box-header with-border">
	        				<div class="input-group">
				                <input type="text" class="form-control input-lg" id="searchBox" placeholder="Search for Title, Category and Thematic Concern">
				                <span class="input-group-btn">
				                    <button type="button" class="btn btn-primary btn-flat btn-lg"><i class="fa fa-search"></i> </button>
				                </span>
				            </div>
	        			</div>
	        			<div class="box-body">
	        				<div class="input-group col-sm-5">
				                <span class="input-group-addon">Category:</span>
				                <select class="form-control" id="catlist">
				                	<option value=0>ALL</option>
				                	<?php
				                		$sql = "SELECT * FROM category";
				                		$query = $conn->query($sql);
				                		while($catrow = $query->fetch_assoc()){
				                			$selected = ($catid == $catrow['id']) ? " selected" : "";
				                			echo "
				                				<option value='".$catrow['id']."' ".$selected.">".$catrow['name']."</option>
				                			";
				                		}
				                	?>
				                </select>
				             </div>
							
	        				<table class="table table-bordered table-striped" id="booklist">
			        			<thead>
			        				<th>Code</th>
			        				<th>Filename</th>
			        				<th>Description</th>
			        				<th>Status</th>
			        			</thead>
			        			<tbody>
			        			<?php
 
			        				// $sql = "SELECT * FROM books WHERE category_id = $catid and restricted = 0 ";

			        				$sql = "SELECT * FROM books $where";
			        				$query = $conn->query($sql);
									
			        				while($row = $query->fetch_assoc()){
			        					$status = ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>';
			        					
										echo "
			        						<tr>
			        							
			        							<td>".$row['isbn']."</td>
			        							<td>".$row['filename']."</td>
			        							<td>".$row['description']."</td>
			        							<td>".$status."</td>
			        						</tr>
			        					";
			        				}
								 
			        			?>
			        			</tbody>
			        		</table>
	        			</div>
	        		</div>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>


setTimeout(function () {

console.log(1);

setTimeout(function () {
	console.log(2);
	document.getElementById("jump_to_this_location").scrollIntoView({behavior: 'smooth'});
},1000);


console.log(3);

},0);

$(function(){
	$('#catlist').on('change', function(){
		console.log("hello");
		if($(this).val() == 0){
			window.location = 'index.php';			
			
		}
		else{
			window.location = 'index.php?category='+$(this).val();
						
		}
		
	});
});
console.log(4);
</script>
</body>
</html>