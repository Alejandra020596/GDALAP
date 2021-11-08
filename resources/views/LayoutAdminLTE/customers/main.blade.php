
@extends('LayoutAdminLTE.include.plantilla')
@section('contenido')
<div class=" row mt-3 mb-5">
    <div class="col-12">
        <b class="h1 text-white">
        {{$tittle}}
        </b>
    </div>
</div>
<div class="row mt-4">
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">New Customer</h3>
            </div>
          </div>
        </div>
        <div class="form-group">
          <!-- Formulario de alta -->
          <div class="p-3">
            <form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="form-group">
                    <label  class="form-control-label">DNI</label>
                    <input class="form-control" type="text" placeholder="dni" id="dni" name="dni">
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Region</label>
                    <select class="form-control" id="id_reg" name="id_reg">
                        <option value="#" >Selecciona...</option>
                        @foreach ($regions as $region )
                            <option value="{{$region->id_reg}}">{{$region->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Commune</label>
                    <select class="form-control" id="id_com" name="id_com">
                        <option value="#" >Selecciona...</option>
                        @foreach ($communes as $commun )
                            <option value="{{$commun->id_com}}">{{$commun->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Email</label>
                    <input class="form-control" type="text" placeholder="Email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Name" id="name" name="name">
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Last name</label>
                    <input class="form-control" type="text" placeholder="Last name" id="last_name" name="last_name">
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Address</label>
                    <input class="form-control" type="text" placeholder="Address" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="form-control-label">Status</label>
                    <label class="custom-toggle float-right mt-2 mb-3">
                    <input type="checkbox" checked name="status">
                    <span class="custom-toggle-slider rounded-circle" data-label-off="Inactivo" data-label-on="Activo"></span>
                    </label>
                </div>
              <div class="clearfix"></div>
              <button type="submit" class="btn btn-primary float-right ">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header border-0">
          {{-- <div class="row align-items-center"> --}}
            <div class="col">
              <h3 class="mb-0">Customers</h3>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <div class="w-100 text-center items-center"></div>
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>#</th>
                <th scope="col">DNI</th>
                <th scope="col">Region</th>
                <th scope="col">Commune</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Last name</th>
                <th scope="col">address</th>
                <th scope="col">date reg</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @php $n = 1; @endphp
                @foreach ($customers as $customer )
                <tr>
                    <td>{{ $n }}</td>
                    <td>{{$customer->dni}}</td>
                    <td>{{$customer->region}}</td>
                    <td>{{$customer->commune}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->date_reg}}</td>
                    <td>
                        @if ($customer->status == 'A')
                                Activo
                        @else
                            Innactivo
                        @endif
                    </td>
                </tr>
                @php $n++;  @endphp
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
