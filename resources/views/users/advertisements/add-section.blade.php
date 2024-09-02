<x-user-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">セクション登録</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="add-section-form" id="add-section-form" action="{{ route('user.store.section') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="id" name="id" value="{{ $id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="name">名前</label>
                                <input type="text" name="name" class="md-input" id="name" placeholder="名前 *" value="{{ old('name') }}">
                                <span class="error" style="color:#BF0731" id="error-name"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover shop-cart">
                                    <thead>
                                        <tr>
                                            <th>選択</th>
                                            <th>#</th>
                                            <th>名前</th>
                                            <th>注記</th>
                                            <th style="min-width: 110px;">プレビュー</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as $key => $section)
                                        <tr>
                                            <td>
                                                <div class="custom-radio">
                                                    <input type="radio" id="section-{{ $section->id }}" name="section" value="{{ $section->id }}">
                                                    <label for="section-{{ $section->id }}"></label>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>
                                                {{ $section->name }}
                                            </td>
                                            <td>
                                                {!! nl2br($section->note) !!}
                                            </td>                              
                                            <td style="min-width: 110px;">
                                                <a href="{{ route('admin.preview.section', $section->id) }}" target="_blank">
                                                    <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <span class="error" style="color:#BF0731" id="error-section"></span>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="text-left mt-20">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup text-center">
                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                        <span>登録 <i class="ion-android-arrow-forward"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!--== Contact Form Style 01 End ==-->

    <!-- Modal Popup Message Box -->
    <div id="modal-popup" class="white-bg all-padding-60 mfp-with-anim mfp-hide centerize-col col-lg-4 col-md-6 col-sm-7 col-xs-11 text-center">
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">セクション登録</span>
        <p class="mb-20">セクションを登録してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">Yes</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">No</a>
    </div>

    {{-- validate --}}
    <script>
        function showModal() {
            if (validateAddSectionForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('add-section-form').submit();
        }

        function validateAddSectionForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const name = document.getElementById('name').value.trim();
            const selectedSection = document.querySelector('input[name="section"]:checked');

            // Validate the name input
            if (!name) {
                document.getElementById('error-name').textContent = 'セクションの名前を入力してください';
                isValid = false;
            }

            // Validate the radio button selection
            if (!selectedSection) {
                document.getElementById('error-section').textContent = 'セクションテンプレートを選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-user-layout>