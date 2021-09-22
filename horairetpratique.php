<?php
    require_once 'config.php';
	$query = "SELECT *from horaires WHERE type ='paratique'";
	
	include_once 'layout/header.php';
	?>
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <!-- Main Slider -->
		<div class="container " style="margin-bottom: 200px; margin-top: 100px;">
            
		    <table class="table table-striped table-dark" id="simple_table">
				<thead >
					<tr >
						<td></td>
						<th style="color: aliceblue ;" scope="col">LUNDI</th>
						<th style="color: aliceblue ;" scope="col">MARDI</th>
						<th style="color: aliceblue ;" scope="col">MERCREDI</th>
						<th style="color: aliceblue ;"scope="col">JEUDI</th>
						<th style="color: aliceblue ;" scope="col">VENDREDI</th>
					</tr>
				</thead>
				<Tbody>
					<tr>
					<th class="" scope="col"></th>
					<?php
					    $resultat = $mysql_db->query($query);
					    if ($resultat->num_rows > 0) {
							while($row = $resultat->fetch_assoc()) 
							{
								echo "<td>".$row['formations']."</td>";
							}	
						}
					?>
					</tr>
					<tr>
						<th class="" scope="col">HEURE</th>
						<?php
						$resultat = $mysql_db->query($query);
						if ($resultat->num_rows > 0) {
							while($row = $resultat->fetch_assoc()) 
							{
								echo "<td>".$row['heure']."</td>";
							}	
						}
						?>
					</tr>
					
				</Tbody>
			</table>
			<input type="button" class="btn btn-success" onclick="generate()" value="Telecharger" />  
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<?php
	  include_once 'layout/footer.php';
	?>