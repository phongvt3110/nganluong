<?php
   //Database giả lập
	include("database.php");
	if (intval($_GET['id'])<0) die('Bạn cần chọn sản phẩm để xem');
	//Lấy id của sản phẩm 
	$id= $_REQUEST['id'];
?>	

<div align="center" style="height: 40px; line-height:40px; font-size:14px; font-weight:bold; color: red">
	DEMO MỘT WEBSITE BÁN HÀNG ĐƠN GIẢN CHƯA TÍCH HỢP NGÂNLƯỢNG.VN
</div>
<div align="center" style="height: 40px; line-height:40px; font-size:16px;">Trang thông tin chi tiết sản phẩm</div>
<table border="1" cellpadding="3" cellspacing="0" style="border-collapse:collapse" width="600px" align="center">
	<tr>
		<td colspan="2"><b>Tiêu đề sản phẩm: <?php echo $data[$id]['name']; ?></b></td>
	    <td align="center"><strong>Bỏ vào giỏ</strong></td>
	    <td align="center"><strong>Mua ngay </strong></td>
	</tr>
	<tr>
		<td align="center" width="221"><img src="images/<?php echo $data[$id]['image']; ?>" border="0"></td>
		<td align="center" width="129"><strong>Giá:</strong> <?php echo (float)$data[$id]['price']; ?></td>
		<td width="96" align="center"><p><a href="cart.php?id=<?php echo $id; ?>"><img src="images/order.jpg" border="0" /></a></p>          </td>
		<td align="center" width="120">
            <form method="post" action="https://www.nganluong.vn/advance_payment.php">
                <input type=hidden name=receiver value="vtphong651043@gmail.com" />
                <input type=hidden name=product value="Lập trình mã đơn hàng của bạn vào đây" />
                <input type=hidden name=price value="<?php echo (float)$data[$id]['price']; ?>" />
                <input type=hidden name=return_url value="http://complete.com/thank.php" />
                <input type=hidden name=comments value="Hãy lập trình ghi chú đơn hàng của bạn vào đây" />
                <input type=image src="https://www.nganluong.vn/data/images/merchant/button/btn-buynow-121.png" />
            </form>
		</td>
	</tr>
	<tr>
		<td colspan="4"><strong>Nội dung sản phẩm:</strong><br />
  		  <?php echo $data[$id]['description']; ?></td>
	</tr>
</table>