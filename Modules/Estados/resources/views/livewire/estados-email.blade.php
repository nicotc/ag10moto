<div>
    <div class="row">
        <div class="col-lg-12">
            <select class="form-select" wire:model.change="selectedEstado">
                <option value="0">Seleccione un estado</option>
                @foreach($estados as $estado_key => $estado_value)
                    <option value="{{ $estado_key }}">{{ $estado_value }}</option>
                @endforeach
            </select>
            <label for="email" class="form-label">{{ $subject }}</label>
            <livewire:quill-edit  wire:model.live="content"/>
            <button class="btn btn-primary" wire:click="sendEmail">Enviar</button>
        </div>
    </div>
</div>
