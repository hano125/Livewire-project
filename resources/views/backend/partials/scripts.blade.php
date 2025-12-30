  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('Back_assets') }}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('Back_assets') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('Back_assets') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('Back_assets') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="{{ asset('Back_assets') }}/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('Back_assets') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="{{ asset('Back_assets') }}/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="{{ asset('Back_assets') }}/assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>


  {{-- <!--/ Add Skill Modal -->
  <script>
      document.addEventListener('livewire:init', () => {
          // Open modal
          Livewire.on('skillUpdate', (data) => {
              $('#editSkillModal').modal('show');
          });

          // Close modal
          Livewire.on('closeEditModal', () => {
              $('#editSkillModal').modal('hide');
          });
      });
  </script> --}}


  <script>
      document.addEventListener('livewire:init', () => {

          Livewire.on('open-modal', (id) => {
              const modalEl = document.getElementById(id);
              const modal = new bootstrap.Modal(modalEl);
              modal.show();
          });

          Livewire.on('close-modal', (id) => {
              const modalEl = document.getElementById(id);
              const modal = bootstrap.Modal.getInstance(modalEl);
              modal?.hide();
          });
      });
  </script>

