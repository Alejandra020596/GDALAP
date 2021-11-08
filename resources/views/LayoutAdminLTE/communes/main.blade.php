
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
              <h3 class="mb-0">New communes</h3>
            </div>
          </div>
        </div>
        <div class="form-group">
          <!-- Formulario de alta -->
          <div class="p-3">
            <form action="{{route('communes.store')}}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="form-group">
                    <label  class="form-control-label">Region</label>
                    <select class="form-control" id="id_reg" name="id_reg">
                        @foreach ($regions as $region )
                            <option value="{{$region->id_reg}}">{{$region->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label  class="form-control-label">Description</label>
                    <input class="form-control" type="text" placeholder="Description" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="form-control-label">Status</label>
                    <label class="custom-toggle float-right mt-2 mb-3">
                    <input type="checkbox" checked name="status">
                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Si"></span>
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
              <h3 class="mb-0">Communes</h3>
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
                <th scope="col">Region</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @php $n = 1; @endphp
                @foreach ($communes as $commun)
                <tr>
                    <td> {{ $n }}</td>
                    <td>{{$commun->region}}</td>
                    <td>{{$commun->description}}</td>
                    <td>
                        @if ($commun->status == 'A')
                            Activo
                        @else
                            Innactivo
                        @endif
                    </td>
                </tr>
                @php $n++; @endphp
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
