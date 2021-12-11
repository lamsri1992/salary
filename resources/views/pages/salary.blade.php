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
                            <option value="salary"{{ ($_REQUEST['category'] == 'salary') ? 'SELECTED' : '' }}>ใบรับรองเงินเดือน</option>
                            <option value="ot"{{ ($_REQUEST['category'] == 'ot') ? 'SELECTED' : '' }}>ใบรับรองการจ่ายค่าล่วงเวลา</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select name="years" class="custom-select" required>
                            <option value="">เลือกปี พ.ศ.</option>
                            <option value="2563"{{ ($_REQUEST['years'] == '2563') ? 'SELECTED' : '' }}>2563</option>
                            <option value="2564"{{ ($_REQUEST['years'] == '2564') ? 'SELECTED' : '' }}>2564</option>
                            <option value="2565"{{ ($_REQUEST['years'] == '2565') ? 'SELECTED' : '' }}>2565</option>
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
            @foreach ($sal as $sals)
            @php 
                $income = $sals->salary + $sals->pos_incom + $sals->son + $sals->school + $sals->ot 
                        + $sals->health + $sals->store + $sals->life + $sals->other_income;
                $outcome = $sals->tax + $sals->co_ordinate + $sals->dead + $sals->car + $sals->house 
                        + $sals->trat_store + $sals->save_life + $sals->water_elect + $sals->other_pay
                        + $sals->p5 + $sals->p7;
                $total = $income - $outcome;
            @endphp
            <div class="col-md-3" style="margin-bottom: 1rem;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">
                            <i class="fa fa-coins text-warning"></i>
                            เดือน{{ MonthThai(date($sals->year."-".$sals->month)) }}
                        </h5>
                        <table class="table table-borderless table-sm">
                            <tr>
                                <td style="font-weight: bold;">รวมรายรับ</td>
                                <td style="font-weight: bold;" class="text-right text-primary">{{ number_format($income,2) }} ฿</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">รวมรายจ่าย</td>
                                <td style="font-weight: bold;" class="text-right text-danger">{{ number_format($outcome,2) }} ฿</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">คงเหลือ</td>
                                <td style="font-weight: bold;" class="text-right text-success">{{ number_format($total,2) }} ฿</td>
                            </tr>
                        </table>
                        <a href="#" class="btn btn-sm btn-light btn-block"><i class="fa fa-print"></i> พิมพ์สลิปเงินเดือน</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    Swal.fire({
       position: 'top-center',
       icon: 'success',
       title: 'ประมวลผลเสร็จสิ้น',
       showConfirmButton: false,
       timer: 2000
       })
</script>
@endsection