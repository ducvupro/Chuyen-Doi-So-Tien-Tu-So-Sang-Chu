
# Code chuyển đổi số tiền từ số sang chữ.
Code giúp chuyển đổi số tiền từ số sang chữ.

Giúp đọc các số tiền lớn 1 cách dễ dàng.

Giúp biết khi nào đọc mươi, mốt, bốn, tư, năm, lăm.

Chuyển đổi được số tiền lên đến tỷ tỷ tỷ.

Giới hạn chuyển đổi -9999999999999999999999999999 -> 9999999999999999999999999999

Code đơn giản dễ dùng.

Cách sử dụng :

Up file **sotienbangchu.class.php** lên host.

```
<?php
include './sotienbangchu.class.php';
$sotienbangchu = new SoTienBangChu(99999);
echo $sotienbangchu->vupro();
?>
```

Ở đây mình có một Abstract Class là `SoTienBangChu`, Sau khi new một instance mới (new SoTien....). Mình sẽ gọi hàm `vupro()` để thực hiện chuyển đổi.

Trong đó `99999` là số tiền bạn muốn chuyển đổi.
