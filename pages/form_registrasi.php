<?php
include_once "../moduls/db_connect.php";

echo "<form action='check_register.php' name='form_registrasi' method='post' onSubmit='return cekregistrasi()'>";
			echo "</select></td>
				</tr>
	<tr>
		<td>DATA PENGAKSES</td>
	</tr>
	</br>

            	<tr>
					<td><label class='formlabel'>Nama Lengkap</label></td><td>:</td>
					<td><input type='text' name='nama' size='60' maxlength='60' required></td>
					</br>
				<tr>
			<td><label class='formlabel'>Password</label></td><td></td>:<td></td>
			<td><input type='password' name='password' size='30' maxlength='29' required>
			
			</td>
			
		</tr>
            	
			<tr>
			<td></td><td></td><td><input type='submit' name='daftarHakAkses' value='Daftarkan' class='button_reg'></td>
			</table>
			</form>";
			
?>
