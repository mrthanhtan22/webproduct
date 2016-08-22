<!--header-->
<?php $this->load->view('admin/admin/head'); ?>
<!--end header -->
<div class='wrapper'>

<div class="widget">
<?php $this->load->view('admin/message', $this->data);?>
	<div class="title">
		<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
		<h6>Danh sách Thành viên</h6>
	 	<div class="num f12">Tổng số: <b><?php echo $total?></b></div>
	</div>
	
	<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">

	<thead>
		<tr>
			<td style="width:10px;"><img src="<?php echo public_url()?>/admin/images/icons/tableArrows.png" /></td>
			<td style="width:80px;">Mã số</td>
			<td>Ho va Tên</td>
			<td>Username</td>
			<td style="width:100px;">Hành động</td>
		</tr>
	</thead>
	
		<tfoot>
		<tr>
			<td colspan="7">
			     <div class="list_action itemActions">
						<a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
							<span style='color:white;'>Xóa hết</span>
						</a>
				 </div>
					
			     <div class='pagination'>
	               			            </div>
			</td>
		</tr>
	</tfoot>
		
	<tbody>
		<!-- Filter -->
		<?php foreach ($list as $row):?>
		<tr>
			<td>
				<input type="checkbox" name="<?php echo $row->id?>" value="19" />
			</td>
			<td class="textC"><?php echo $row->id?></td>
			<td>
				<span title="<?php echo $row->name?>" class="tipS">
					<?php echo $row->name?>						
				</span>
			</td>
			<td>
				<span title="<?php echo $row->username?>" class="tipS">
					<?php echo $row->username?>						</span>
			</td>
				
			<td class="option">
				 <a href="<?php echo admin_url('admin/edit/'.$row->id) ?>" title="Chỉnh sửa" class="tipS ">
				<img src="<?php echo public_url()?>/admin/images/icons/color/edit.png" />
				</a>
				
				<a href="<?php echo admin_url('admin/delete/'.$row->id) ?>" title="Xóa" class="tipS verify_action" >
				    <img src="<?php echo public_url()?>/admin/images/icons/color/delete.png" />
				</a>
			</td>
		</tr>
		<?php endforeach; ?>				
			
		
	</tbody>
		
	</table>
	
</div>

</div>
