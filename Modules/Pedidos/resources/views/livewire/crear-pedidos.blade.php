<div>
    <div wire:ignore.self
        class="modal fade"
        id="createModal"
        tabindex="-1"
        aria-hidden="true"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        >
        <div class="modal-dialog modal-lg modal-simple modal-Crate-user">
          <div class="p-3 modal-content p-md-5">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="mb-4 text-center">
                <h3>Nuevo Pedido </h3>

              </div>
              <form id="" class="row g-3" onsubmit="return false">




                <div class="col-md-6">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" wire:model="nombre">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" wire:model="email">
                </div>
                <div class="col-md-6">
                  <label for="telefono" class="form-label">Telefono</label>
                  <input type="text" class="form-control" id="telefono" wire:model="telefono">
                </div>
                <div class="col-md-6">
                    <label for="lang" class="form-label">Lang</label>
                    <select id="lang" class="form-select" wire:model="lang">
                      <option selected>Choose...</option>
                      <option value="es">Español</option>
                      <option value="en">Ingles</option>
                    </select>
                  </div>

                <div class="col-md-12">
                  <label for="problema" class="form-label">Problema</label>
                  <textarea class="form-control" id="problema" wire:model="problema"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="imagenes" class="form-label">Imagenes</label>
                  <input type="file" class="form-control" id="imagenes" wire:model="imagenes" multiple>
                </div>


       



                <div class="mt-4 text-center col-12">
                  <button type="submit"
                   class="btn btn-primary me-sm-3 me-1"
                   wire:click="create"
                   >Submit</button>

                   <button
                    type="reset"
                    class="btn btn-label-secondary"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                    Cancel
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    </div>
