<div>
    <div wire:ignore.self
        class="modal fade"
        id="editModal"
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

{{-- error lista --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="col-md-6">
    <label for="item" class="form-label">Item</label>
    <select id="item" class="form-select" wire:model="item">
        <option selected>Choose...</option>
        @foreach ($items as $value)
        <option value="{{$value}}">{{$value}}</option>
        @endforeach
    </select>
</div>

{{-- input name --}}
<div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" wire:model="name">
</div>

{{-- input email --}}

<div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" wire:model="email">
</div>

{{-- input phone --}}

<div class="col-md-6">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" wire:model="phone">
</div>

{{-- input details --}}

<div class="col-md-12">
    <label for="details" class="form-label">Details</label>
    <textarea class="form-control" id="details" wire:model="details"></textarea>
</div>

{{-- select langs_id col-md-6 --}}

<div class="col-md-12">
    <label for="langs_id" class="form-label">Langs_id</label>
    <select id="langs_id" class="form-select" wire:model.change="langs_id">
        <option selected>Choose...</option>
        @foreach ($langs_ids as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>

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
