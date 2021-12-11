@extends('layouts.app')
@section('content')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">สวัสดี !</h1>
        <p class="lead">นี่คือระบบใบรับรองการจ่ายเงินเดือน (สำหรับ พนักงานราชการ พนักงานกระทรวงฯ และลูกจ้างเหมาบริการ)</p>
        <hr class="my-4">
        <p>ท่านสามารถพิมพ์ใบรับรองการจ่ายเงินเดือน (สลิปเงินเดือน) และใบรับรองการจ่ายค่าล่วงเวลา (OT) ได้ในระบบนี้</p>
        <a class="btn btn-dark" href="#" role="button"><i class="fa fa-info-circle"></i> คู่มือการใช้งาน</a>
        <a class="btn btn-dark" href="#" role="button"><i class="fa fa-comments"></i> แจ้งปัญหาการใช้งาน</a>
        <a class="btn btn-dark" href="#" role="button"><i class="fa fa-headset"></i> ติดต่อผู้ดูแลระบบ</a>
      </div>
    <div class="col-md-12">
        <form id="frmFilter" action="{{ url('salary') }}">
            <div class="jumbotron row">
                <div class="col-md-12 text-center">
                    <h4><i class="fa fa-filter"></i> เลือกประเภท / เดือนที่ต้องการสืบค้นข้อมูล</h4>
                </div>
                <div class="col-md-5">
                    <select name="category" class="custom-select" required>
                        <option value="">เลือกประเภท</option>
                        <option value="salary">ใบรับรองเงินเดือน</option>
                        <option value="ot">ใบรับรองการจ่ายค่าล่วงเวลา</option>
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
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
        $('#frmFilter').on("submit", function (event) {
        let timerInterval
        Swal.fire({
        title: 'กำลังประมวลผล',
        timer: 1000000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
        }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
        }
        })
    });
</script>
@endsection