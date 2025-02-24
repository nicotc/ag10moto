<div wire:ignore>
    <div id="{{ $quillId }}"></div>
  </div>

  @script
  <script>
      const quill = new Quill('#' + @js($quillId), {
          theme: @js($theme)
      });

      quill.root.innerHTML = $wire.get('value');

      quill.on('text-change', function () {
          let value = quill.root.innerHTML;
          @this.set('value', value);
      });

      window.addEventListener('contentUpdated', function (content) {
            quill.root.innerHTML = content.detail;
            @this.dispatch('contenidoUpdated', [quill.root.innerHTML]
        );

    //         @this.dispatch('contenidoUpdated', {
    //     contenidoX: quill.root.innerHTML
    // });
        });



  </script>
  @endscript

