<?php
/* *
   * @filename sotienbangchu.class.php
   * @author DucVuPro
   * @version 1.0.0
   * @description Code php chuyển số tiền bằng số sang tiền bằng chữ
   * @facebook https://www.facebook.com/ducvupro.ndv
   * @zalo 0838494182
   * Để Tôn Trọng Tác Giả Vui Lòng Không Xoá Hoặc Chỉnh Sửa Các Dòng Này
   * */

class SoTienBangChu {
    private $vupro;
    public
    function __construct($vupro) {
        if ($vupro < 0) {
            $this->tien = abs($vupro);
            $this->xetdau = "Âm";
        } else {
            $this->tien = $vupro;
        };
    }
    public
    function vupro() {
        $tien = $this->tien;
        if ($this->xetdau) {
            $tbc["vupro"] = $this->xetdau;
        };
        $array = array(
            0 => "Không",
            1 => "Một",
            2 => "Hai",
            3 => "Ba",
            4 => "Bốn",
            5 => "Năm",
            6 => "Sáu",
            7 => "Bảy",
            8 => "Tám",
            9 => "Chín"
        );
        if ($tien != (integer) $tien)
            $error = 'Số Tiền Phải Là Số Nguyên';
        $kiemtra = strlen($tien);
        if ($kiemtra > 0) {
            $tienle = substr($tien, $kiemtra - 1, $kiemtra);
            $ntienle = substr($tienle, 0, 1);
        };
        if ($kiemtra > 1) {
            $tienchuc = substr($tien, $kiemtra - 2, $kiemtra);
            $ntienchuc = substr($tienchuc, 0, 1);
        };
        if ($kiemtra > 2) {
            $tientram = substr($tien, $kiemtra - 3, $kiemtra);
            $ntientram = substr($tientram, 0, 1);
        };
        if ($kiemtra > 3) {
            $tiennghin = substr($tien, $kiemtra - 4, $kiemtra);
            $ntiennghin = substr($tiennghin, 0, 1);
        };
        if ($kiemtra > 4) {
            $tienchucnghin = substr($tien, $kiemtra - 5, $kiemtra);
            $ntienchucnghin = substr($tienchucnghin, 0, 1);
        };
        if ($kiemtra > 5) {
            $tientramnghin = substr($tien, $kiemtra - 6, $kiemtra);
            $ntientramnghin = substr($tientramnghin, 0, 1);
        };
        if ($kiemtra > 6) {
            $tientrieu = substr($tien, $kiemtra - 7, $kiemtra);
            $ntientrieu = substr($tientrieu, 0, 1);
        };
        if ($kiemtra > 7) {
            $tienchuctrieu = substr($tien, $kiemtra - 8, $kiemtra);
            $ntienchuctrieu = substr($tienchuctrieu, 0, 1);
        };
        if ($kiemtra > 8) {
            $tientramtrieu = substr($tien, $kiemtra - 9, $kiemtra);
            $ntientramtrieu = substr($tientramtrieu, 0, 1);
        };
        if ($kiemtra > 9) {
            $tienty = substr($tien, $kiemtra - 10, $kiemtra);
            $ntienty = substr($tienty, 0, 1);
        };
        if ($kiemtra > 10) {
            $tienchucty = substr($tien, $kiemtra - 11, $kiemtra);
            $ntienchucty = substr($tienchucty, 0, 1);
        };
        if ($kiemtra > 11) {
            $tientramty = substr($tien, $kiemtra - 12, $kiemtra);
            $ntientramty = substr($tientramty, 0, 1);
        };
        if ($kiemtra > 12) {
            $tiennghinty = substr($tien, $kiemtra - 13, $kiemtra);
            $ntiennghinty = substr($tiennghinty, 0, 1);
        };
        if ($kiemtra > 13) {
            $tienchucnghinty = substr($tien, $kiemtra - 14, $kiemtra);
            $ntienchucnghinty = substr($tienchucnghinty, 0, 1);
        };
        if ($kiemtra > 14) {
            $tientramnghinty = substr($tien, $kiemtra - 15, $kiemtra);
            $ntientramnghinty = substr($tientramnghinty, 0, 1);
        };
        if ($kiemtra > 15) {
            $tientrieuty = substr($tien, $kiemtra - 16, $kiemtra);
            $ntientrieuty = substr($tientrieuty, 0, 1);
        };
        if ($kiemtra > 16) {
            $tienchuctrieuty = substr($tien, $kiemtra - 17, $kiemtra);
            $ntienchuctrieuty = substr($tienchuctrieuty, 0, 1);
        };
        if ($kiemtra > 17) {
            $tientramtrieuty = substr($tien, $kiemtra - 18, $kiemtra);
            $ntientramtrieuty = substr($tientramtrieuty, 0, 1);
        };
        if ($kiemtra > 18) {
            $tientyty = substr($tien, $kiemtra - 19, $kiemtra);
            $ntientyty = substr($tientyty, 0, 1);
        };
        if ($kiemtra > 19) {
            $tienchuctyty = substr($tien, $kiemtra - 20, $kiemtra);
            $ntienchuctyty = substr($tienchuctyty, 0, 1);
        };
        if ($kiemtra > 20) {
            $tientramtyty = substr($tien, $kiemtra - 21, $kiemtra);
            $ntientramtyty = substr($tientramtyty, 0, 1);
        };
        if ($kiemtra > 21) {
            $tiennghintyty = substr($tien, $kiemtra - 22, $kiemtra);
            $ntiennghintyty = substr($tiennghintyty, 0, 1);
        };
        if ($kiemtra > 22) {
            $tienchucnghintyty = substr($tien, $kiemtra - 23, $kiemtra);
            $ntienchucnghintyty = substr($tienchucnghintyty, 0, 1);
        };
        if ($kiemtra > 23) {
            $tientramnghintyty = substr($tien, $kiemtra - 24, $kiemtra);
            $ntientramnghintyty = substr($tientramnghintyty, 0, 1);
        };
        if ($kiemtra > 24) {
            $tientrieutyty = substr($tien, $kiemtra - 25, $kiemtra);
            $ntientrieutyty = substr($tientrieutyty, 0, 1);
        };
        if ($kiemtra > 25) {
            $tienchuctrieutyty = substr($tien, $kiemtra - 26, $kiemtra);
            $ntienchuctrieutyty = substr($tienchuctrieutyty, 0, 1);
        };
        if ($kiemtra > 26) {
            $tientramtrieutyty = substr($tien, $kiemtra - 27, $kiemtra);
            $ntientramtrieutyty = substr($tientramtrieutyty, 0, 1);
        };
        if ($kiemtra > 27) {
            $tientytyty = substr($tien, $kiemtra - 28, $kiemtra);
            $ntientytyty = substr($tientytyty, 0, 1);
        };
        if ($kiemtra > 28) {
            $error = "Số Tiền Quá Lớn Không Thể Chuyển Đổi";
        };

        if ($ntientytyty > 0) {
            $tbc[000] = $array[$ntientytyty].
            ' Tỷ Tỷ Tỷ';
        };
        if ($ntientramtrieutyty > 0 && $ntientramtrieutyty < 10 && $ntienchuctrieutyty > 0) {
            $tbc[111] = $array[$ntientramtrieutyty].
            ' Trăm';
        } else if ($ntientramtrieutyty == "0" && $ntientytyty > 0 && ($ntientrieutyty > 0 || $ntienchuctrieutyty)) {
            $tbc[111] = 'Không Trăm';
        } else if ($ntientramtrieutyty > 0 && $ntientramtrieutyty < 10 && $ntienchuctrieutyty == "0" && $ntientrieutyty == "0") {
            $tbc[111] = $array[$ntientramtrieutyty].
            ' Trăm Triệu Tỷ Tỷ';
        } else if ($ntientramtrieutyty > 0 && $ntientramtrieutyty < 10 && $ntientrieutyty > 0) {
            $tbc[111] = $array[$ntientramtrieutyty].
            ' Trăm';
        };

        if ($tienchuctrieutyty > 0 && $ntienchuctrieutyty < 10 && $ntienchuctrieutyty > 1 && $ntientrieutyty > 0) {
            $tbc[222] = $array[$ntienchuctrieutyty].
            ' Mươi';
        } else if ($ntienchuctrieutyty == "0" && $ntientrieutyty > 0) {
            $tbc[222] = 'Lẻ';
        } else if ($tienchuctrieutyty > 0 && $ntienchuctrieutyty < 10 && $ntientrieutyty == "0" && $ntienchuctrieutyty > 1) {
            $tbc[222] = $array[$ntienchuctrieutyty].
            ' Mươi Triệu Tỷ Tỷ';
        } else if ($tienchuctrieutyty > 0 && $ntienchuctrieutyty < 10 && $ntienchuctrieutyty == 1 && $ntientrieutyty == "0") {
            $tbc[222] = 'Mười Triệu Tỷ Tỷ';
        } else if ($tienchuctrieutyty > 0 && $ntienchuctrieutyty < 10 && $ntienchuctrieutyty == 1 && $ntientrieutyty > 0) {
            $tbc[222] = 'Mười';
        };

        if ($ntientrieutyty > 0 && $ntientrieutyty < 10) {
            if ($ntientrieutyty == 1 && $ntienchuctrieutyty > 1) {
                $tbc[333] = 'Mốt Triệu Tỷ Tỷ';
            } else if ($ntientrieutyty == 2 && $ntienchuctrieutyty > 2) {
                $tbc[333] = 'Tư Triệu Tỷ Tỷ';
            } else if ($ntientrieutyty == 5 && $ntienchuctrieutyty > 0) {
                $tbc[333] = 'Lăm Triệu Tỷ Tỷ';
            } else {
                $tbc[333] = $array[$ntientrieutyty].
                ' Triệu Tỷ Tỷ';
            };
        };

        if ($ntientramnghintyty > 0 && $ntientramnghintyty < 10 && $ntienchucnghintyty > 0) {
            $tbc[444] = $array[$ntientramnghintyty].
            ' Trăm';
        } else if ($ntientramnghintyty == "0" && $ntientrieutyty > 0 && ($ntiennghintyty > 0 || $ntienchucnghintyty > 0)) {
            $tbc[444] = 'Không Trăm';
        } else if ($ntientramnghintyty > 0 && $ntientramnghintyty < 10 && $ntienchucnghintyty == "0" && $ntiennghintyty == "0") {
            $tbc[444] = $array[$ntientramnghintyty].
            ' Trăm Nghìn Tỷ Tỷ';
        } else if ($ntientramnghintyty > 0 && $ntientramnghintyty < 10 && $ntiennghintyty > 0) {
            $tbc[444] = $array[$ntientramnghintyty].
            ' Trăm';
        };

        if ($tienchucnghintyty > 0 && $ntienchucnghintyty < 10 && $ntienchucnghintyty > 1 && $ntiennghintyty > 0) {
            $tbc[555] = $array[$ntienchucnghintyty].
            ' Mươi';
        } else if ($ntienchucnghintyty == "0" && $ntiennghintyty > 0) {
            $tbc[555] = 'Lẻ';
        } else if ($tienchucnghintyty > 0 && $ntienchucnghintyty < 10 && $ntiennghintyty == "0" && $ntienchucnghintyty > 1) {
            $tbc[555] = $array[$ntienchucnghintyty].
            ' Mươi Nghìn Tỷ Tỷ';
        } else if ($tienchucnghintyty > 0 && $ntienchucnghintyty < 10 && $ntienchucnghintyty == 1 && $ntiennghintyty == "0") {
            $tbc[555] = 'Mười Nghìn Tỷ Tỷ';
        } else if ($tienchucnghintyty > 0 && $ntienchucnghintyty < 10 && $ntienchucnghintyty == 1 && $ntiennghintyty > 0) {
            $tbc[555] = 'Mười';
        };

        if ($ntiennghintyty > 0 && $ntiennghintyty < 10) {
            if ($ntiennghintyty == 1 && $ntienchucnghintyty > 1) {
                $tbc[666] = 'Mốt Nghìn Tỷ Tỷ';
            } else if ($ntiennghintyty == 2 && $ntienchucnghintyty > 2) {
                $tbc[666] = 'Tư Nghìn Tỷ Tỷ';
            } else if ($ntiennghintyty == 5 && $ntienchucnghintyty > 0) {
                $tbc[666] = 'Lăm Nghìn Tỷ Tỷ';
            } else {
                $tbc[666] = $array[$ntiennghintyty].
                ' Nghìn Tỷ Tỷ';
            };
        };

        if ($ntientramtyty > 0 && $ntientramtyty < 10 && $ntienchuctyty > 0) {
            $tbc[777] = $array[$ntientramtyty].
            ' Trăm';
        } else if ($ntientramtyty == "0" && $ntiennghintyty > 0 && ($ntientyty > 0 || $ntienchuctyty > 0)) {
            $tbc[777] = 'Không Trăm';
        } else if ($ntientramtyty > 0 && $ntientramtyty < 10 && $ntienchuctyty == "0" && $ntientyty == "0") {
            $tbc[777] = $array[$ntientramtyty].
            ' Trăm Tỷ Tỷ';
        } else if ($ntientramtyty > 0 && $ntientramtyty < 10 && $ntientyty > 0) {
            $tbc[777] = $array[$ntientramtyty].
            ' Trăm';
        };

        if ($tienchuctyty > 0 && $ntienchuctyty < 10 && $ntienchuctyty > 1 && $ntientyty > 0) {
            $tbc[888] = $array[$ntienchuctyty].
            ' Mươi';
        } else if ($ntienchuctyty == "0" && $ntientyty > 0) {
            $tbc[888] = 'Lẻ';
        } else if ($tienchuctyty > 0 && $ntienchuctyty < 10 && $ntientyty == "0" && $ntienchuctyty > 1) {
            $tbc[888] = $array[$ntienchuctyty].
            ' Mươi Tỷ Tỷ';
        } else if ($tienchuctyty > 0 && $tienchuctyty < 10 && $ntienchuctyty == 1 && $ntientyty == "0") {
            $tbc[888] = 'Mười Tỷ Tỷ';
        } else if ($tienchuctyty > 0 && $ntienchuctyty < 10 && $ntienchuctyty == 1 && $ntientyty > 0) {
            $tbc[888] = 'Mười';
        };

        if ($ntientyty > 0 && $ntientyty < 10) {
            if ($ntientyty == 1 && $ntienchuctyty > 1) {
                $tbc[999] = 'Mốt Tỷ Tỷ';
            } else if ($ntientyty == 2 && $ntienchuctyty > 2) {
                $tbc[999] = 'Tư Tỷ Tỷ';
            } else if ($ntientyty == 5 && $ntienchuctyty > 0) {
                $tbc[999] = 'Lăm Tỷ Tỷ';
            } else {
                $tbc[999] = $array[$ntientyty].
                ' Tỷ Tỷ';
            };
        };

        if ($tientramtrieuty >= 100000000000000000 && $tientramtrieuty < 1000000000000000000 && $ntienchuctrieuty > 0) {
            $tbc[11] = $array[$ntientramtrieuty].
            ' Trăm';
        } else if ($ntientramtrieuty == "0" && $ntientyty > 0 && ($ntientrieuty > 0 || $ntientramchucty > 0)) {
            $tbc[11] = 'Không Trăm';
        } else if ($tientramtrieuty >= 100000000000000000 && $tientramtrieuty < 1000000000000000000 && $ntienchuctrieuty == "0" && $ntientrieuty == "0") {
            $tbc[11] = $array[$ntientramtrieuty].
            ' Trăm Triệu Tỷ';
        } else if ($tientramtrieuty >= 100000000000000000 && $tientramtrieuty < 1000000000000000000 && $ntientrieuty > 0) {
            $tbc[11] = $array[$ntientramtrieuty].
            ' Trăm';
        };

        if ($tienchuctrieuty >= 10000000000000000 && $tienchuctrieuty < 100000000000000000 && $ntienchuctrieuty > 1 && $ntientrieuty > 0) {
            $tbc[22] = $array[$ntienchuctrieuty].
            ' Mươi';
        } else if ($ntienchuctrieuty == "0" && $ntientrieuty > 0) {
            $tbc[22] = 'Lẻ';
        } else if ($tienchuctrieuty >= 10000000000000000 && $tienchuctrieuty < 100000000000000000 && $ntientrieuty == "0" && $ntienchuctrieuty > 1) {
            $tbc[22] = $array[$ntienchuctrieuty].
            ' Mươi Triệu Tỷ';
        } else if ($tienchuctrieuty >= 10000000000000000 && $tienchuctrieuty < 100000000000000000 && $ntienchuctrieuty == 1 && $ntientrieuty == "0") {
            $tbc[22] = 'Mười Triệu Tỷ';
        } else if ($tienchuctrieuty >= 10000000000000000 && $tienchuctrieuty < 100000000000000000 && $ntienchuctrieuty == 1 && $ntientrieuty > 0) {
            $tbc[22] = 'Mười';
        };

        if ($tientrieuty >= 1000000000000000 && $tientrieuty < 10000000000000000) {
            if ($ntientrieuty == 1 && $ntienchuctrieuty > 1) {
                $tbc[33] = 'Mốt Triệu Tỷ';
            } else if ($ntientrieuty == 2 && $ntienchuctrieuty > 2) {
                $tbc[33] = 'Tư Triệu Tỷ';
            } else if ($ntientrieuty == 5 && $ntienchuctrieuty > 0) {
                $tbc[33] = 'Lăm Triệu Tỷ';
            } else {
                $tbc[33] = $array[$ntientrieuty].
                ' Triệu Tỷ';
            };
        };

        if ($tientramnghinty >= 100000000000000 && $tientramnghinty < 1000000000000000 && $ntienchucnghinty > 0) {
            $tbc[44] = $array[$ntientramnghinty].
            ' Trăm';
        } else if ($ntientramnghinty == "0" && $ntientrieu > 0 && ($ntiennghinty > 0 || $ntienchucnghinty > 0)) {
            $tbc[44] = 'Không Trăm';
        } else if ($tientramnghinty >= 100000000000000 && $tientramnghinty < 1000000000000000 && $ntienchucnghinty == "0" && $ntiennghinty == "0") {
            $tbc[44] = $array[$ntientramnghinty].
            ' Trăm Nghìn Tỷ';
        } else if ($tientramnghinty >= 100000000000000 && $tientramnghinty < 1000000000000000 && $ntiennghinty > 0) {
            $tbc[44] = $array[$ntientramnghinty].
            ' Trăm';
        };

        if ($tienchucnghinty >= 10000000000000 && $tienchucnghinty < 100000000000000 && $ntienchucnghinty > 1 && $ntiennghinty > 0) {
            $tbc[55] = $array[$ntienchucnghinty].
            ' Mươi';
        } else if ($ntienchucnghinty == "0" && $ntiennghinty > 0) {
            $tbc[55] = 'Lẻ';
        } else if ($tienchucnghinty >= 10000000000000 && $tienchucnghinty < 100000000000000 && $ntiennghinty == "0" && $ntienchucnghinty > 1) {
            $tbc[55] = $array[$ntienchucnghinty].
            ' Mươi Nghìn Tỷ';
        } else if ($tienchucnghinty >= 10000000000000 && $tienchucnghinty < 100000000000000 && $ntienchucnghinty == 1 && $ntiennghinty == "0") {
            $tbc[55] = 'Mười Nghìn Tỷ';
        } else if ($tienchucnghinty >= 10000000000000 && $tienchucnghinty < 100000000000000 && $ntienchucnghinty == 1 && $ntiennghinty > 0) {
            $tbc[55] = 'Mười';
        };

        if ($tiennghinty >= 1000000000000 && $tiennghinty < 10000000000000) {
            if ($ntiennghinty == 1 && $ntienchucnghinty > 1) {
                $tbc[66] = 'Mốt Nghìn Tỷ';
            } else if ($ntiennghinty == 2 && $ntienchucnghinty > 2) {
                $tbc[66] = 'Tư Nghìn Tỷ';
            } else if ($ntiennghinty == 5 && $ntienchucnghinty > 0) {
                $tbc[66] = 'Lăm Nghìn Tỷ';
            } else {
                $tbc[66] = $array[$ntiennghinty].
                ' Nghìn Tỷ';
            };
        };

        if ($tientramty >= 100000000000 && $tientramty < 1000000000000 && $ntienchucty > 0) {
            $tbc[77] = $array[$ntientramty].
            ' Trăm';
        } else if ($ntientramty == "0" && $ntiennghinty > 0 && ($ntienty > 0 || $ntienchucty > 0)) {
            $tbc[77] = 'Không Trăm';
        } else if ($tientramty >= 100000000000 && $tientramty < 1000000000000 && $ntienchucty == "0" && $ntienty == "0") {
            $tbc[77] = $array[$ntientramty].
            ' Trăm Tỷ';
        } else if ($tientramty >= 100000000000 && $tientramty < 1000000000000 && $ntienty > 0) {
            $tbc[77] = $array[$ntientramty].
            ' Trăm';
        };

        if ($tienchucty >= 10000000000 && $tienchucty < 100000000000 && $ntienchucty > 1 && $ntienty > 0) {
            $tbc[88] = $array[$ntienchucty].
            ' Mươi';
        } else if ($ntienchucty == "0" && $ntienty > 0) {
            $tbc[88] = 'Lẻ';
        } else if ($tienchucty >= 10000000000 && $tienchucty < 100000000000 && $ntienty == "0" && $ntienchucty > 1) {
            $tbc[88] = $array[$ntienchucty].
            ' Mươi Tỷ';
        } else if ($tienchucty >= 10000000000 && $tienchucty < 100000000000 && $ntienchucty == 1 && $ntienty == "0") {
            $tbc[88] = 'Mười Tỷ';
        } else if ($tienchucty >= 10000000000 && $tienchucty < 100000000000 && $ntienchucty == 1 && $ntienty > 0) {
            $tbc[88] = 'Mười';
        };

        if ($tienty >= 1000000000 && $tienty < 10000000000) {
            if ($ntienty == 1 && $ntienchucty > 1) {
                $tbc[99] = 'Mốt Tỷ';
            } else if ($ntienty == 2 && $ntienchucty > 2) {
                $tbc[99] = 'Tư Tỷ';
            } else if ($ntienty == 5 && $ntienchucty > 0) {
                $tbc[99] = 'Lăm Tỷ';
            } else {
                $tbc[99] = $array[$ntienty].
                ' Tỷ';
            };
        };

        if ($tientramtrieu >= 100000000 && $tientramtrieu < 1000000000 && $ntienchuctrieu > 0) {
            $tbc[1] = $array[$ntientramtrieu].
            ' Trăm';
        } else if ($ntientramtrieu == "0" && $ntienty > 0 && ($ntientrieu > 0 || $ntienchuctrieu > 0)) {
            $tbc[1] = 'Không Trăm';
        } else if ($tientramtrieu >= 100000000 && $tientramtrieu < 1000000000 && $ntienchuctrieu == "0" && $ntientrieu == "0") {
            $tbc[1] = $array[$ntientramtrieu].
            ' Trăm Triệu';
        } else if ($tientramtrieu >= 100000000 && $tientramtrieu < 1000000000 && $ntientrieu > 0) {
            $tbc[1] = $array[$ntientramtrieu].
            ' Trăm';
        };

        if ($tienchuctrieu >= 10000000 && $tienchuctrieu < 100000000 && $ntienchuctrieu > 1 && $ntientrieu > 0) {
            $tbc[2] = $array[$ntienchuctrieu].
            ' Mươi';
        } else if ($ntienchuctrieu == "0" && $ntientrieu > 0) {
            $tbc[2] = 'Lẻ';
        } else if ($tienchuctrieu >= 10000000 && $tienchuctrieu < 100000000 && $ntientrieu == "0" && $ntienchuctrieu > 1) {
            $tbc[2] = $array[$ntienchuctrieu].
            ' Mươi Triệu';
        } else if ($tienchuctrieu >= 10000000 && $tienchuctrieu < 100000000 && $ntienchuctrieu == 1 && $ntientrieu == "0") {
            $tbc[2] = 'Mười Triệu';
        } else if ($tienchuctrieu >= 10000000 && $tienchuctrieu < 100000000 && $ntienchuctrieu == 1 && $ntientrieu > 0) {
            $tbc[2] = 'Mười';
        };

        if ($tientrieu >= 1000000 && $tientrieu < 10000000) {
            if ($ntientrieu == 1 && $ntienchuctrieu > 1) {
                $tbc[3] = 'Mốt Triệu';
            } else if ($ntientrieu == 2 && $ntienchuctrieu > 2) {
                $tbc[3] = 'Tư Triệu';
            } else if ($ntientrieu == 5 && $ntienchuctrieu > 0) {
                $tbc[3] = 'Lăm Triệu';
            } else {
                $tbc[3] = $array[$ntientrieu].
                ' Triệu';
            };
        };

        if ($tientramnghin >= 100000 && $tientramnghin < 1000000 && $ntienchucnghin > 0) {
            $tbc[4] = $array[$ntientramnghin].
            ' Trăm';
        } else if ($ntientramnghin == "0" && $ntientrieu > 0 && ($ntiennghin > 0 || $ntienchucnghin > 0)) {
            $tbc[4] = 'Không Trăm';
        } else if ($tientramnghin >= 100000 && $tientramnghin < 1000000 && $ntienchucnghin == "0" && $ntiennghin == "0") {
            $tbc[4] = $array[$ntientramnghin].
            ' Trăm Nghìn';
        } else if ($tientramnghin >= 100000 && $tientramnghin < 1000000 && $ntiennghin > 0) {
            $tbc[4] = $array[$ntientramnghin].
            ' Trăm';
        };

        if ($tienchucnghin >= 10000 && $tienchucnghin < 100000 && $ntienchucnghin > 1 && $ntiennghin > 0) {
            $tbc[5] = $array[$ntienchucnghin].
            ' Mươi';
        } else if ($ntienchucnghin == "0" && $ntiennghin > 0) {
            $tbc[5] = 'Lẻ';
        } else if ($tienchucnghin >= 10000 && $tienchucnghin < 100000 && $ntiennghin == "0" && $ntienchucnghin > 1) {
            $tbc[5] = $array[$ntienchucnghin].
            ' Mươi Nghìn';
        } else if ($tienchucnghin >= 10000 && $tienchucnghin < 100000 && $ntienchucnghin == 1 && $ntiennghin == "0") {
            $tbc[5] = 'Mười Nghìn';
        } else if ($tienchucnghin >= 10000 && $tienchucnghin < 100000 && $ntienchucnghin == 1 && $ntiennghin > 0) {
            $tbc[5] = 'Mười';
        };

        if ($tiennghin >= 1000 && $tiennghin < 10000) {
            if ($ntiennghin == 1 && $ntienchucnghin > 1) {
                $tbc[6] = 'Mốt Nghìn';
            } else if ($ntiennghin == 2 && $ntienchucnghin > 2) {
                $tbc[6] = 'Tư Nghìn';
            } else if ($ntiennghin == 5 && $ntienchucnghin > 0) {
                $tbc[6] = 'Lăm Nghìn';
            } else {
                $tbc[6] = $array[$ntiennghin].
                ' Nghìn';
            };
        };

        if ($tientram >= 100 && $tientram < 1000 && $ntienchuc > 0) {
            $tbc[7] = $array[$ntientram].
            ' Trăm';
        } else if ($ntientram == "0" && $ntiennghin > 0 && ($ntienle > 0 || $ntienchuc)) {
            $tbc[7] = 'Không Trăm';
        } else if ($tientram >= 100 && $tientram < 1000 && $ntienchuc == "0" && $ntienle == "0") {
            $tbc[7] = $array[$ntientram].
            ' Trăm';
        } else if ($tientram >= 100 && $tientram < 1000 && $ntienle > 0) {
            $tbc[7] = $array[$ntientram].
            ' Trăm';
        };

        if ($tienchuc >= 10 && $tienchuc < 100 && $ntienchuc > 1 && $ntienle > 0) {
            $tbc[8] = $array[$ntienchuc].
            ' Mươi';
        } else if ($ntienchuc == "0" && $ntienle > 0) {
            $tbc[8] = 'Lẻ';
        } else if ($tienchuc >= 10 && $tienchuc < 100 && $ntienle == "0" && $ntienchuc > 1) {
            $tbc[8] = $array[$ntienchuc].
            ' Mươi';
        } else if ($tienchuc >= 10 && $tienchuc < 100 && $ntienchuc == 1 && $ntienle == "0") {
            $tbc[8] = 'Mười';
        } else if ($tienchuc >= 10 && $tienchuc < 100 && $ntienchuc == 1 && $ntienle > 0) {
            $tbc[8] = 'Mười';
        };

        if ($tienle > 0 && $tienle < 10) {
            if ($ntienle == 1 && $ntienchuc > 1) {
                $tbc[9] = 'Mốt';
            } else if ($ntienle == 2 && $ntienchuc > 2) {
                $tbc[9] = 'Tư';
            } else if ($ntienle == 5 && $ntienchuc > 0) {
                $tbc[9] = 'Lăm';
            } else {
                $tbc[9] = $array[$ntienle].
                '';
            };
        };
        if ($tien == "0") {
            $tbc = "Không";
        };
        $tienbangchu = implode(" ", $tbc).
        ' Đồng';
        if ($error) {
            return $error;
        } else {
            return $tienbangchu;
        };
    }
}