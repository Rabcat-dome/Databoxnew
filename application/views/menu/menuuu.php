
		<div class="tables">
				<input type="text" id="search">	</input>
			</p>
			<div id="show" name="show" style="display:none;  position: absolute;  background-color: #ffffff;  border-style: groove;" >
			
			<table width="100%" id="tblData" class="target" bgcolor="#ACAAFC">
				<tbody>
				<?php	
				 foreach ($search as $r) {
			echo "<tr style='display: table-row;'><td class='even'><a hef='#'>".$r['subject']."</a></td></tr>";
				}
				?>
				</tbody>
			</table>
			</div>

		</div>
	
	
<?php $this->load->view('java/javascript_index.php'); ?>