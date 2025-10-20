<div class="col-12 bg1 mt-5 pt-5 pb-5 section-bot">
    <div class="row align-items-center">
        <!-- Sol içerik -->
        <div class="col-12 col-md-6 text-white text-left d-flex justify-content-center mb-4 mb-md-0">
            <div class="col-10">
                <h3>{{ __('app.section_bot_h3') }}</h3>
                <p class="mt-5">{{ __('app.section_bot_p') }}
                </p>
            </div>
        </div>

        <!-- Sağ form -->
        <div class="col-12 col-md-6">
            <form id="consultationForm" action="{{ route('store') }}" method="post">
                @csrf
                <div class="form-container">
                    <div class="form-header">
                        <h3 class="mb-0">{{ __('app.section_bot_form_h3') }}</h3>
                    </div>
                    <div class="p-2 ps-3 pe-3">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">{{ __('app.your_name') }}</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('app.email_address') }}</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">{{ __('app.phone_number') }}</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">{{ __('app.terms') }}</label>
                            <div class="invalid-feedback"></div>
                        </div>


                        <div class="d-grid">
                            <button class="btn btn-danger">Gönder</button>
                        </div>

                        <div id="formMessage" class="mt-3 text-center text-success"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#consultationForm').on('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            const token = formData.get('_token');

            // Tüm inputları temizle
            $(form).find('.form-control, .form-check-input').removeClass('is-invalid is-valid');
            $(form).find('.invalid-feedback').text('');
            $('#formMessage').text('').removeClass('text-danger text-success');

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: formData
            })
                .then(async response => {
                    const data = await response.json();

                    if(response.status === 422 && data.errors) {
                        // Hataları input altına yaz
                        for (const [field, messages] of Object.entries(data.errors)) {
                            const input = $(form).find(`[name="${field}"]`);
                            input.addClass('is-invalid');
                            input.siblings('.invalid-feedback').text(messages[0]);
                        }
                        $('#formMessage').text('{{ __('app.form_error') }}').addClass('text-danger');
                    } else if(data.success) {
                        // Başarılı
                        $(form).find('.form-control, .form-check-input').addClass('is-valid');
                        $('#formMessage').text('{{ __('app.form_success') }}').addClass('text-success');
                        form.reset();
                    } else {
                        $('#formMessage').text('{{ __('app.form_error') }}').addClass('text-danger');
                    }
                })
                .catch(err => {
                    console.error(err);
                    $('#formMessage').text('{{ __('app.form_error_2') }}').addClass('text-danger');
                });
        });
    });

</script>
