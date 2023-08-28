@extends('layouts.master_backend')
@section('content')

<main class="main-content  mt-0">

      <div class="container my-auto">
        <div class="row mt-4">
          <div class="col-lg-10 col-md-8 col-10 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">เพิ่มสินค้า</h4>
                  <div class="row mt-3">

                  </div>
                </div>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="">

                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">ชื่อสินค้า</label>
                    <input type="text" name="name" class="form-control text-dark" placeholder="Name" />
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">ราคาสินค้า</label>
                    <input type="text" name="price" class="form-control text-dark" placeholder="Price" />
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">ประเภท</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>กรุณาเลือกประเภทสินค้า</option>
                        <option value="1">ยำ</option>
                        <option value="2">ผัด</option>
                        <option value="3">ข้าว</option>
                      </select>
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">ภาพสินค้า</label>
                    <input type="file" name="image" class="form-control text-dark" placeholder="image" />
                  </div>

                  <div class="text-center">
                    <input type="submit" class="btn bg-gradient-success w-20 my-4 mb-2" value="เพิ่มสินค้า">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>


@endsection
