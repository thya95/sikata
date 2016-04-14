<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<h2>Profil [nama]</h2>
<table id="tableProfil">
	<tr>
		<td> Nama Depan </td>
		<td> <?php ?></td>
	</tr>
							
	<tr>
		<td>Nama Belakang</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>Role</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>Email</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>ID</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>Password</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>Gender</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>Alamat</td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>Telephone Rumah</td>
		<td><?php ?></td>
	</tr>
</table>
							
<h2>Pilihan Prodi</h2>
<table id="tableProfil2">
	<tr>
		<th>Pilihan ke-</th>
		<th>Prodi</th>
		<th>Universitas</th>
	</tr>
							
	<tr>
		<td>1</td>
		<td><?php ?> </td>
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>2</td>
		<td><?php ?></td>					
		<td><?php ?></td>
	</tr>
							
	<tr>
		<td>3</td>
		<td><?php ?></td>
		<td><?php ?></td>
							
	</tr>
</table>
</div>
</div>
				
</div>
</div>
        <!-- /#page-content-wrapper -->

</div>
    <!-- /#wrapper -->
	
  <script src="../../web/bs/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../web/bs/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>