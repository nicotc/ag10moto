<x-layout>



    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4 breadcrumb-wrapper">
          <span class="text-muted fw-light">Pedidos</span>
        </h4>

        <div class="card">
            <div class="card-header">
              <h5 class="card-title">Pedidos</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-vcenter">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>nombre</th>
                      <th>email</th>
                      <th>telefono</th>
                      <th>problema</th>
                      <th>imagenes</th>
                      <th>aceptacion</th>
                      <th>fv_form_id</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $pedido)
                    <tr>
                      <td>{{ $key }}</td>
                      <td>{{ $pedido['nombre'] }}</td>
                      <td>{{ $pedido['email'] }}</td>
                      <td>{{ $pedido['telefono'] }}</td>
                      <td>{{ $pedido['problema'] }}</td>
                      <td>{{ $pedido['imagenes'] }}</td>
                      <td>{{ $pedido['aceptacion'] }}</td>
                      <td>{{ $pedido['fv_form_id'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>


      </div>
</x-layout>
