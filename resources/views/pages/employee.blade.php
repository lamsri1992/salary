@extends('layouts.app')
@section('content')

<div class="container">
    <div class="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">เมนูระบบ</a></li>
                <li class="breadcrumb-item active" aria-current="page">ฐานข้อมูลเจ้าหน้าที่</li>
            </ol>
        </nav>
        <div style="margin-bottom: 1rem;">
            <table id="tableBasic" class="table table-borderless table-striped compact" 
                   style="border-collapse: collapse; border-radius: 4px; overflow: hidden;">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">
                            <i class="fa fa-address-card"></i> Code
                        </th>
                        <th>ชื่อ/สกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>
                            <i class="fa fa-money-check-alt"></i> Book Bank
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emp as $emps)
                    <tr>
                        <td class="text-center">{{ $emps->id }}</td>
                        <td class="text-center">{{ $emps->code }}</td>
                        <td>{{ $emps->name }}</td>
                        <td>{{ $emps->position }}</td>
                        <td>{{ $emps->acc_no }}</td>
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
    
</script>
@endsection