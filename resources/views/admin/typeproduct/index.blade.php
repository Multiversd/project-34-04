@extends('layouts.master_backend')
@section('content')
<div class="container-fluid py-4">
    <a href="{{route('product.create')}}" class="btn btn-success">เพิ่มข้อมูลสินค้า</a>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">ประเภทสินค้า</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ที่</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ประเภทสินค้า</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">วันที่บันทึก</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">วันที่อัพเดท</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">การจัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                      <p class="text-xs text-secondary mb-0">Organization</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                    </td>

                    <td class="align-middle text-center">
                      <a href="" class="btn btn-warning">แก้ไข</a>
                      <a href="" class="btn btn-danger">ลบ</a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>


@endsection
