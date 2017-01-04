<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/27/2016
 * Time: 10:45 PM
 */

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use DB;

class MenuDangNhapController extends Controller
{
    public function Menu()
    {
        $sanpham = DB::table('SanPham')->select('TenSP', 'GiaBan', 'HinhAnh', 'MoTa', 'MaSP')->skip(0)->take(6)->get();
        return view('layout.dangnhap.productdangnhap', compact('sanpham'));
    }

    public function ChiTietSP($MaSP)
    {

        //$tam = DB::table('SanPham')->select('LuotXem') ->where('MaSP', '=', $MaSP)->skip(0)->take(6)->get();

        //DB::table('SanPham')->where('MaSP', '=', $MaSP)->update(['LuotXem' => $tam + 1]);
        $thongtin = DB::table('SanPham')->select('TenSP', 'GiaBan', 'HinhAnh', 'MaSP', 'TinhTrang', 'LuotXem', 'BaoQuan') ->where('MaSP', '=', $MaSP)->skip(0)->take(6)->get();
        return view('layout.dangnhap.chitietsanphamdangnhap', compact('thongtin'));
    }
}