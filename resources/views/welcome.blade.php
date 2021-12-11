@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="jumbotron row">
            <div class="col-md-12 text-center">
                <h4><i class="fa fa-filter"></i> เลือกประเภท / เดือนที่ต้องการสืบค้นข้อมูล</h4>
            </div>
            <div class="col-md-5">
                <select name="category" class="custom-select" required>
                    <option value="">เลือกประเภท</option>
                    <option value="">ใบรับรองเงินเดือน</option>
                    <option value="">ใบรับรองการจ่ายค่าล่วงเวลา</option>
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
</div>
@endsection
@section('script')
<script>
    
</script>
@endsection