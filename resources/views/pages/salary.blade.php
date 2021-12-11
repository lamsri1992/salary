@extends('layouts.app')
@section('content')

<div class="container">
    <div class="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">ระบบใบรับรองการจ่ายเงินเดือน</a></li>
                <li class="breadcrumb-item active" aria-current="page">นายวัดจันทร์ กัลยา</li>
            </ol>
        </nav>
        <form action="">
            <div class="col-md-12">
                <div class="jumbotron row">
                    <div class="col-md-12 text-center">
                        <h4><i class="fa fa-filter"></i> เลือกประเภท / เดือนที่ต้องการสืบค้นข้อมูล</h4>
                    </div>
                    <div class="col-md-5">
                        <select name="category" class="custom-select" required>
                            <option value="">เลือกประเภท</option>
                            <option value="1">ใบรับรองเงินเดือน</option>
                            <option value="2">ใบรับรองการจ่ายค่าล่วงเวลา</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select name="years" class="custom-select" required>
                            <option value="">เลือกปี พ.ศ.</option>
                            <option value="2563">2563</option>
                            <option value="2564">2564</option>
                            <option value="2565">2565</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-search"></i> ประมวลผล</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="alert alert-danger text-center" role="alert">
            <small><i class="fa fa-exclamation-circle"></i> ข้อมูลทางการเงิน เป็นข้อมูลสำคัญ กรุณาเก็บรักษาไว้เป็นความลับ</small>
        </div>
        <div class="row">
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนมกราคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                        <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนกุมภาพันธ์
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนมีนาคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนเมษายน
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนพฤษภาคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนมิถุนายน
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนกรกฏาคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนสิงหาคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนกันยายน
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนตุลาคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนพฤศจิกายน
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <i class="fa fa-coins text-warning"></i>
                            เดือนธันวาคม
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td>เงินเดือน</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                            <tr>
                                <td>รายจ่าย</td>
                                <td class="text-right">5xx.xx</td>
                            </tr>
                            <tr>
                                <td>คงเหลือ</td>
                                <td class="text-right">1x,xxx.xx</td>
                            </tr>
                        </table>
                         <button class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    
</script>
@endsection