<?php
// file kết nối php luôn để trên đầu
	require_once 'template/lib.php';?>
<?php
	require_once 'template/head.php';?>
<?php
	require_once 'template/header.php';?>

		<div id="content">
			
			<div class="main-content">
				<p> Phần quản lý nội dung bài viết </p>
				<table border="1">
					<tr>
						<td> ID </td>
						<td> Tiêu đề </td>
						<td> Nội dung </td>
						<td> Tạo bởi </td>
						<td> Chức năng</td>
					</tr>
					<tr> 
						<td> 1 </td>
						<td> Tiêu đề 01 </td>
						<td> Đây là tiêu đề 01 </td>
						<td> user1 </td>
						<td>
							<input type="submit" name="submitadd" value="Thêm">
							<input type="submit" name="submitedit" value="Sửa">
							<input type="submit" name="submitdel" value="Xóa"> 
						</td>
					</tr>
					
					<tr> 
						<td> 2 </td>
						<td> Tiêu đề 02 </td>
						<td> Đây là tiêu đề 02 </td>
						<td> user2 </td>
						<td>
							<input type="submit" name="submitadd" value="Thêm">
							<input type="submit" name="submitedit" value="Sửa">
							<input type="submit" name="submitdel" value="Xóa"> 
						</td>
					</tr>

					<tr> 
						<td> 2 </td>
						<td> Tiêu đề 02 </td>
						<td> Đây là tiêu đề 02 </td>
						<td> user2 </td>
						<td>
							<input type="submit" name="submitadd" value="Thêm">
							<input type="submit" name="submitedit" value="Sửa">
							<input type="submit" name="submitdel" value="Xóa"> 
						</td>
					</tr>

				</table>
			</div> <!-- .main-content -->

		</div>

<?php require_once 'template/footer.php';?>	
