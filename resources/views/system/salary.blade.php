@extends('layouts.app')
@section('content')

<div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
         <p>Upload Error</p>
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
    @endif
    <div class="col-md-12">
        <form id="frmImport" method="POST" enctype="multipart/form-data" action="{{ url('config/import') }}">
            {{ csrf_field() }}
            <div class="jumbotron row">
                <div class="col-md-12 text-center">
                    <h4><i class="fa fa-cloud-upload-alt"></i> อัพโหลดข้อมูลเงินเดือน</h4>
                </div>
                <div class="col-md-12" style="margin-top: 1rem;">
                    <div class="custom-file">
                        <input id="select-file" name="select-file" type="file" class="custom-file-input" required>
                        <label class="custom-file-label" for="select-file">เลือกไฟล์ที่จะอัพโหลด </label>
                        <small class="text-danger">(ไฟล์นามสกุล .xlsx หรือ .xls เท่านั้น สามารถดูได้จากคู่มือการอัพโหลด)</small>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 1rem;">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> อัพโหลดไฟล์</button>
                    @if (count($salog) > 0)
                    <div class="">
                        <small>ประวัติการอัพโหลด</small>
                        <ul>
                            @foreach ($salog as $sals)
                            <li>
                                <small class="text-muted">{{ $sals->sal_file }} / {{ $sals->create_at }}</small>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
    <div class="card" style="margin-bottom: 2rem;">
        <div class="card-body">
            <div style="margin-bottom: 1rem;">
                <h5><i class="fa fa-database"></i> ฐานข้อมูลเงินเดือน</h5>
                <small>แสดงรายละเอียดเฉพาะเงินเดือนเข้า สามารถคลิ๊กดูรายละเอียดเพิ่มเติมได้</small>
            </div>
            <table id="tableBasic" class="table table-borderless table-striped"
                style="border-collapse: collapse; border-radius: 4px; overflow: hidden;">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th>เจ้าหน้าที่</th>
                        <th>ตำแหน่ง</th>
                        <th>Book Bank</th>
                        <th class="text-right">เงินเดือน</th>
                        <th class="text-center">ปี</th>
                        <th class="text-center">เดือน</th>
                        <th class="text-center"><i class="fa fa-bars"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 0; @endphp
                    @foreach ($result as $res)
                    @php $i++; @endphp
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td>{{ $res->name }}</td>
                        <td>{{ $res->position }}</td>
                        <td>{{ $res->acc_no }}</td>
                        <td class="text-right">{{ number_format($res->salary,2) }} ฿</td>
                        <td class="text-center">{{ $res->year }}</td>
                        <td class="text-center">{{ MonthThai(date('Y-'.$res->month.'-d')) }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-outline-info btn-sm btn-block">
                                <i class="fa fa-info-circle"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#frmImport').on("submit", function (event) {
        let timerInterval
        Swal.fire({
        title: 'กำลังทำการ Upload',
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
@if ($message = Session::get('success'))
<script>
    Swal.fire({
       position: 'top-center',
       icon: 'success',
       title: '{{ $message }}',
       showConfirmButton: false,
       timer: 3000
       })
</script>
@endif
<script>
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endsection
