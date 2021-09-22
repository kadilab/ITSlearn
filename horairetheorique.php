<?php
  
  include_once 'layout/header.php';
?>
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <!-- Main Slider -->
		<div class="container"  style="margin-bottom: 200px; margin-top: 100px;"">
            <table class="table table-striped table-dark " id="simple_table">
				<thead>
					<tr>
						<th style="color: aliceblue ;"scope="col">HEURE</th>
						<th style="color: aliceblue ;" scope="col">LUNDI</th>
						<th style="color: aliceblue ;" scope="col">MARDI</th>
						<th style="color: aliceblue ;"scope="col">MERCREDI</th>
						<th style="color: aliceblue ;"scope="col">JEUDI</th>
						<th style="color: aliceblue ;"scope="col">VENDREDI</th>
					</tr>
				</thead>
				<Tbody>
					<tr>
						<td>14H00</td>
						<td>CAO</td>
						<td>CAO</td>
						<td>CAO</td>
						<td>CAO</td>
						<td>CAO	</td>
					</tr>
					<tr>
						<td></td>
						<td>JONATHAN</td>
						<td>JONATHNA</td>
						<td>JONATHAN</td>
						<td>JONATHAN</td>
						<td>JONATHAN</td>
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