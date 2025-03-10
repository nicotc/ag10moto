<div>

    <div class="mb-4 card">
        <h5 class="card-header">Estado Timeline</h5>
        <div class="card-body">
          <ul class="timeline">


            @foreach ($estados as $estado)


            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="mb-1 timeline-header">
                  <h6 class="mb-0">{{ getEstado($estado->status, Auth::user()->langs_id) }}</h6>
                  <small class="text-muted">{{
                    
                    \Carbon\Carbon::parse($estado->created_at)->diffForHumans()
                  }}</small>
                </div>
                <p class="mb-2">

                    {{ getUser($estado->user_id) }}
                </p>
                <div class="d-flex">

                  {{-- <a href="javascript:void(0)" class="me-3">
                    <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="20" class="me-2">
                    <span>Invoice.pdf</span>
                  </a> --}}

                </div>
              </div>
            </li>

            @endforeach


          </ul>
        </div>
      </div>

</div>
