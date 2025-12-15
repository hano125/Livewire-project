  <form action="#" method="POST" wire:submit.prevent="submit">
      @csrf
      @if ($successMessage)
          <div class="alert alert-success m-3" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => { show = false;
              $wire.clearMessage(); }, 2000)" x-transition>
              {{ $successMessage }}
          </div>
      @endif
      <div class="row">

          <!-- Company Name -->
          <div class="col-md-6 mb-3">
              <label for="name" class="form-label">Company Name</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-buildings"></i></span>
                  <input type="text" class="form-control" id="name" wire:model="setting.name"
                      placeholder="Enter company name" />
              </div>
              @error('setting.name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- Phone -->
          <div class="col-md-6 mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-phone"></i></span>
                  <input type="text" class="form-control" id="phone" wire:model="setting.phone"
                      placeholder="+1 234 567 8900" />
              </div>
              @error('setting.phone')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- Email -->
          <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email Address</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input type="email" class="form-control" id="email" wire:model="setting.email"
                      placeholder="company@example.com" />
              </div>
              @error('setting.email')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- Address -->
          <div class="col-md-6 mb-3">
              <label for="address" class="form-label">Address</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-map"></i></span>
                  <input type="text" class="form-control" id="address" wire:model="setting.address"
                      placeholder="123 Main Street, City" />
              </div>
              @error('setting.address')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- Facebook -->
          <div class="col-md-6 mb-3">
              <label for="facebook" class="form-label">Facebook URL</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bxl-facebook"></i></span>
                  <input type="url" class="form-control" id="facebook" wire:model="setting.facebook"
                      placeholder="https://facebook.com/yourpage" />
              </div>
              @error('setting.name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- Twitter -->
          <div class="col-md-6 mb-3">
              <label for="twitter" class="form-label">Twitter URL</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bxl-twitter"></i></span>
                  <input type="url" class="form-control" id="twitter" wire:model="setting.twitter"
                      placeholder="https://twitter.com/yourhandle" />
              </div>
              @error('setting.twitter')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- LinkedIn -->
          <div class="col-md-6 mb-3">
              <label for="linkedin" class="form-label">LinkedIn URL</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bxl-linkedin"></i></span>
                  <input type="url" class="form-control" id="linkedin" wire:model="setting.linkedin"
                      placeholder="https://linkedin.com/company/yourcompany" />
              </div>
              @error('setting.linkedin')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>

          <!-- Instagram -->
          <div class="col-md-6 mb-3">
              <label for="instagram" class="form-label">Instagram URL</label>
              <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bxl-instagram"></i></span>
                  <input type="url" class="form-control" id="instagram" wire:model="setting.instagram"
                      placeholder="https://instagram.com/yourprofile" />
              </div>
              @error('setting.instagram')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
      </div>

      <!-- Form Actions -->
      <div class="mt-3">
          <button type="submit" class="btn btn-primary me-2">
              <i class="bx bx-save me-1"></i> Save Settings
          </button>
          <button type="reset" class="btn btn-outline-secondary">
              <i class="bx bx-reset me-1"></i> Reset
          </button>
      </div>
  </form>
