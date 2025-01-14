<div>
    <div class="row">
        <div class="col-md-12">
          <ul class="mb-3 nav nav-pills flex-column flex-md-row">
            <li class="nav-item">
              <a class="nav-link"  href="{{ route('account-settings') }}" ><i class="bx bx-user me-1"></i> Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('account-security') }}"
                ><i class="bx bx-lock-alt me-1"></i> Security</a>
            </li>
          </ul>
          <div class="mb-4 card">
            <h5 class="card-header">Profile Security</h5>
            <div class="card-body">
                <div class="card-body">
                    <form id="formAccountSettings" method="GET" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                      <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                          <label class="form-label" for="currentPassword">Current Password</label>
                          <div class="input-group input-group-merge has-validation">
                            <input
                            class="form-control"
                            type="password"
                            name="currentPassword"
                            id="currentPassword"
                            placeholder="············"
                            wire:model="currentPassword"
                            >
                            <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                          </div>
                          @error('currentPassword') <span class="error">{{ $message }}</span> @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                          <label class="form-label" for="newPassword">New Password</label>
                          <div class="input-group input-group-merge has-validation">
                            <input
                            class="form-control"
                            type="password"
                            id="newPassword"
                            name="newPassword"
                            placeholder="············"
                            wire:model="newPassword"
                            >
                            <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                          </div>
                            @error('newPassword') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3 col-md-6 form-password-toggle fv-plugins-icon-container">
                          <label class="form-label" for="confirmPassword">Confirm New Password</label>
                          <div class="input-group input-group-merge has-validation">
                            <input
                            class="form-control"
                            type="password"
                            name="confirmPassword"
                            id="confirmPassword"
                            placeholder="············"
                            wire:model="confirmPassword"
                            >
                            <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                          </div>
                          @error('confirmPassword') <span class="error">{{ $message }}</span> @enderror

                        </div>
                        <div class="mb-4 col-12">
                          <p class="mt-2 fw-medium">Password Requirements:</p>
                          <ul class="mb-0 ps-3">
                            <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                            <li class="mb-1">At least one lowercase character</li>
                            <li>At least one number, symbol, or whitespace character</li>
                          </ul>
                        </div>
                        <div class="mt-1 col-12">
                          <button type="submit" wire:click='save' class="btn btn-primary me-2">Save changes</button>

                        </div>
                      </div>
                    <input type="hidden"></form>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
