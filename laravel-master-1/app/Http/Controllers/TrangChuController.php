<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/27/2016
 * Time: 10:45 PM
 */

namespace App\Http\Controllers;
//use App\Http\Requests\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TrangChuController extends Controller
{
    public function home()
    {
        $loaisanpham = DB::table('LoaiSP')->select('TenLoai', 'MaLoai')->skip(0)->take(3)->get();
        return view('layout.indexdt', compact('loaisanpham'));
    }

    public function LoaiSP($MaLoai)
    {
        $sanpham = DB::table('SanPham')->select('TenSP', 'GiaBan', 'HinhAnh', 'MoTa', 'MaSP')-> where('MaLoai', '=', $MaLoai)->skip(0)->take(6)->get();
        return view('layout.productdt', compact('sanpham'));
    }

    public function timkiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $sanpham = DB::table('SanPham')->select('TenSP', 'GiaBan', 'HinhAnh', 'MoTa', 'MaSP')-> where('TenSP', 'like', "%$tukhoa%") -> orwhere('GiaBan', '=', (int)$tukhoa)->skip(0)->take(6)->get();
        return view('layout.ketquatimkiem', compact('sanpham'));
    }


}