@extends('user.layout.index')
@section('user_content')

<div class="page-wrapper py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-7">
        <div class="card shadow-sm border-0 rounded">
          <div class="card-header bg-success text-white text-center fs-4 fw-semibold">
            Complete Your Order
          </div>

          <div class="card-body">
            <form action="{{ route('user.order') }}" method="POST">
              @csrf

              {{-- Name --}}
              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Name</label>
                <input type="text" name="name" class="form-control form-control-lg"
                  value="{{ old('name', auth()->user()->name ?? '') }}" required>
              </div>

              {{-- Email --}}
              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">E-mail</label>
                <input type="email" name="email" class="form-control form-control-lg"
                  value="{{ old('email', auth()->user()->email ?? '') }}" required>
              </div>

              {{-- Phone --}}
              <div class="mb-3">
                <label for="phone_number" class="form-label fw-semibold">Phone Number</label>
                <input type="text" name="phone_number" class="form-control form-control-lg"
                  value="{{ old('phone_number', auth()->user()->phone_number ?? '') }}" required>
              </div>

              {{-- Payment Method --}}
              <div class="mb-3">
                <label for="payment_method" class="form-label fw-semibold">Payment Method</label>
                <select name="payment_method" id="payment_method" class="form-control form-control-lg" required>
                  <option value="">-- Select Payment Method --</option>
                  <option value="credit_card">Credit Card</option>
                  <option value="debit_card">Debit Card</option>
                  <option value="instapay">Instapay</option>
                  <option value="COD">Cash on Delivery</option>
                </select>
              </div>

              {{-- Dynamic Payment Fields --}}
              <div id="payment-fields">

                {{-- Credit Card --}}
                <div class="payment-option d-none" id="credit_card_fields">
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Card Number</label>
                    <input type="text" name="card_number" class="form-control form-control-lg">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Expiry Date</label>
                    <input type="text" name="card_expiry" class="form-control form-control-lg" placeholder="MM/YY">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">CVV</label>
                    <input type="text" name="card_cvv" class="form-control form-control-lg">
                  </div>
                </div>

                {{-- Debit Card --}}
                <div class="payment-option d-none" id="debit_card_fields">
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Card Number</label>
                    <input type="text" name="debit_card_number" class="form-control form-control-lg">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Expiry Date</label>
                    <input type="text" name="debit_card_expiry" class="form-control form-control-lg" placeholder="MM/YY">
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">CVV</label>
                    <input type="text" name="debit_card_cvv" class="form-control form-control-lg">
                  </div>
                </div>

                {{-- Instapay --}}
                <div class="payment-option d-none" id="instapay_fields">
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Instapay ID</label>
                    <input type="text" name="instapay_id" class="form-control form-control-lg" placeholder="username@bank">
                  </div>
                </div>

                {{-- Cash on Delivery --}}
                <div class="payment-option d-none" id="COD_fields">
                  <div class="alert alert-info">
                    You will pay with cash upon delivery.
                  </div>
                </div>
              </div>

              {{-- Submit --}}
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success fw-semibold">
                  Place Order
                </button>
                <a href="{{ route('user.dashboard') }}" class="btn btn-secondary fw-semibold">
                  Cancel
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- JavaScript --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const methodSelect = document.getElementById('payment_method');
    const options = document.querySelectorAll('.payment-option');

    methodSelect.addEventListener('change', function () {
      options.forEach(opt => opt.classList.add('d-none'));
      if (this.value) {
        document.getElementById(this.value + '_fields').classList.remove('d-none');
      }
    });
  });
</script>

@endsection
