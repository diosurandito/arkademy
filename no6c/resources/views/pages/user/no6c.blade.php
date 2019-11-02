@extends('templates.user.default')


@section('content')
<!-- Page Content -->

<div class="content" >
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissable d-flex" role="alert">
        <div class="flex-00-auto">
            <i class="fa fa-fw fa-check"></i>
        </div>
        <div class="flex-fill ml-3">
            <p class="mb-0">{{ $message }}</p>
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="modal fade" id="destroy" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin modal-block-vcenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-white">
                        <h2 class="block-title text-dark"></h2>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times" style="color: red;"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm text-center">
                        <h3><b> Data Raisa Andriani ID</b> <b class="text-smooth-light">#1</b> </h3><br>
                        <img src="assets/media/checkmark.png" style="height: 150px"><br><br>
                        <h3><b>Berhasil Dihapus</b></h3><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-content block-content-full">
        <table id="table-organizer" class="table table-borderless">
            <thead style="background: #CECECE;">
               <tr>
                  <th width="30">No</th>
                  <th>Cashier</th>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th width="80">Action</th>
              </tr>
          </thead>
          <tbody>
              @php($no = 1)
              @foreach($trans as $data)
              <tr>
                <td>{{$no}}</td>
                <td>{{$data->casname}}</td>
                <td>{{$data->pname}}</td>
                <td>{{$data->catname}}</td>
                <td>Rp. {{number_format($data->price,0,',','.')}}</td>
                <td class="text-center">
                  <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#edit{{$data->id}}" title="Edit Data">
                          <b style="color: green">Edit</b>
                      </button>
                      <b> | </b>
                      <button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#destroy{{$data->id}}" title="Hapus Data">
                          <b style="color: red">Delete</b>
                      </button>
                  </div>
              </td>

          </tr>
          @php($no++)
          <div class="modal fade" id="destroy{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin modal-block-vcenter" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-danger">
                            <h3 class="block-title">Hapus Data</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content font-size-sm">
                            <p>Anda akan menghapus data ID<b>#{{$data->id}}</b> ?</p>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="destroy/{{ $data->id }}" class="btn btn-danger text-white">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-light">
                            <h2 class="block-title text-dark"><b>EDIT<b></h2>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times" style="color: red;"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content font-size-sm">
                            <div class="row">
                                <div class="col-lg-8 col-xl-12">
                                    <form action="{{ route('user.trans.update' , $data->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select id="id_cashier" class="form-control" name="id_cashier" required="">
                                                    <option value="{{$data->id_cashier}}">{{$data->casname}}</option> 
                                                    @foreach ($cashier as $key)
                                                    <option value="{{ $key->id }}"> 
                                                      {{ $key->name }} 
                                                  </option>
                                                  @endforeach  

                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <select id="category" class="form-control" name="id_category" required="">
                                            <option value="{{$data->id_category}}">{{$data->catname}}</option>
                                            @foreach ($category as $key2)
                                            <option value="{{ $key2->id }}"> 
                                              {{ $key2->name }} 
                                          </option>
                                          @endforeach  

                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                    <input class="js-maxlength form-control" type="text" name="name" value="{{$data->pname}}" placeholder="masukan nama produk.." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="js-maxlength form-control" type="number" name="price" value="{{$data->price}}" placeholder="Masukan harga produk.." required>
                                </div>
                            </div>
                            <div class="block-content block-content-full text-right border-top">
                                <button type="submit" class="btn bg-smooth-light text-white">EDIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
</tbody>
</table>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-light">
                    <h2 class="block-title text-dark"><b>ADD<b></h2>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times" style="color: red;"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <div class="row">
                        <div class="col-lg-8 col-xl-12">
                            <form action="{{ route('user.trans.add')}}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <div class="input-group">
                                        <select id="id_cashier" class="form-control" name="id_cashier" required="">

                                          <option value="0" disabled selected>----Pilih Kasir----</option> 
                                          @foreach ($cashier as $key)
                                          <option value="{{ $key->id }}"> 
                                              {{ $key->name }} 
                                          </option>
                                          @endforeach  

                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <select id="category" class="form-control" name="id_category" required="">

                                      <option value="0" disabled selected>----Pilih Kategori----</option> 
                                      @foreach ($category as $key2)
                                      <option value="{{ $key2->id }}"> 
                                          {{ $key2->name }} 
                                      </option>
                                      @endforeach  

                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                                <input class="js-maxlength form-control" type="text" name="name" placeholder="masukan nama produk.." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="js-maxlength form-control" type="number" name="price" placeholder="Masukan harga produk.." required>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="submit" class="btn bg-smooth-light text-white">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



</div>
</div>
</div>
</div>
<!-- END Page Container -->
@endsection

