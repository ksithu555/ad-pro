<x-admin-layout>
    <!--== Contact Form Style 01 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                <h4 class="text-uppercase mt-0">ブロック修正</h4>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-12">
                <form name="edit-top-block-form" id="edit-top-block-form" action="{{ route('admin.update.top.section.top.block') }}" method="POST" 
                    class="contact-form-style-01" enctype="multipart/form-data">
                    @csrf
                    <div class="messages"></div>
                    <input type="hidden" id="sid" name="sid" value="{{ $block->top_section_id }}">
                    <input type="hidden" id="id" name="id" value="{{ $block->id }}">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="title">タイトル</label>
                                <input type="text" name="title" class="md-input" id="title" placeholder="タイトル *" value="{{ old('title') ? old('title') : $block->title }}">
                                <span class="error" style="color:#BF0731" id="error-title"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="body">内容</label>
                                <textarea name="body" class="md-textarea" id="body" rows="7" placeholder="内容 *">{{ old('body') ? old('body') : $block->body }}</textarea>
                                <span class="error" style="color:#BF0731" id="error-body"></span>
                            </div>
                        </div>
                    </div>
                    @if ($block->topSection->type == 'Box01')
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <label class="sr-only" for="icon">アイコン</label>
                                <input type="number" name="icon" class="md-input" id="icon" placeholder="アイコン *" value="{{ old('icon') ? old('icon') : $block->icon }}">
                                <span class="error" style="color:#BF0731" id="error-icon"></span>
                            </div>
                        </div>
                    </div>
                    @elseif ($block->topSection->type == 'Box02' || $block->topSection->type == 'Box03')
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="form-group">
                                <div class="info-icon-container">
                                    <a href="{{ route('admin.get.material.icons') }}" target="_blank">
                                        <i class="fa fa-eye info-icon"></i>アイコンを確認する
                                    </a>
                                </div>
                                <input type="text" id="search-icon" placeholder="アイコンを選択してください *" class="md-input"
                                       onkeyup="filterIcons()" onclick="toggleDropdown()" value="{{ $block->icon }}">
                                <div id="icon-dropdown" class="dropdown-content">
                                    @foreach ($icons as $icon)
                                        <div class="icon-dropdown-item {{ $block->icon == $icon->name ? 'selected-icon' : '' }}"
                                             onclick="selectIcon('{{ $icon->id }}', '{{ $icon->name }}')">
                                            {{ $icon->name }}
                                        </div>
                                    @endforeach
                                </div>
                                <input type="hidden" name="icon" id="icon" value="{{ $block->icon }}">
                                <span class="error" style="color:#BF0731" id="error-icon"></span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 mt-20">
                            <i id="selected-icon-display" class="{{ $block->icon }} font-40px default-color"></i>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <div class="text-left mt-20">
                                <input type="hidden" id="confirmed" name="confirmed" value="0">
                                <div class="tr-modal-popup text-center">
                                    <a onclick="showModal()" id="open-modal" class="btn btn-dark-outline btn-md btn-square btn-animate remove-margin">
                                        <span>修正 <i class="ion-android-arrow-forward"></i></span>
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
        <span class="text-uppercase font-30px font-600 mb-20 display-block dark-color">ブロック修正</span>
        <p class="mb-20">ブロックを修正してもよろしいですか?</p>
        <a class="btn btn-lg btn-circle btn-color popup-modal-close" href="#" onclick="submitForm()">はい</a>
        <a class="btn btn-lg btn-circle btn-secondary-color popup-modal-close" href="#">いいえ</a>
    </div>

    {{-- dropdown --}}
    <script>
        function filterIcons() {
            var input, filter, dropdown, items, i;
            input = document.getElementById("search-icon");
            filter = input.value.toLowerCase();
            dropdown = document.getElementById("icon-dropdown");
            items = dropdown.getElementsByClassName("icon-dropdown-item");

            for (i = 0; i < items.length; i++) {
                txtValue = items[i].textContent || items[i].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    items[i].style.display = "";
                } else {
                    items[i].style.display = "none";
                }
            }
        }

        function toggleDropdown() {
            var input, filter, dropdown, items, i;
            input = document.getElementById("search-icon");
            filter = input.value.toLowerCase();
            dropdown = document.getElementById("icon-dropdown");
            items = dropdown.getElementsByClassName("icon-dropdown-item");

            for (i = 0; i < items.length; i++) {
                txtValue = items[i].textContent || items[i].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    items[i].style.display = "";
                } else {
                    items[i].style.display = "none";
                }
            }
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }

        function selectIcon(id, name) {
            document.getElementById("search-icon").value = name;
            document.getElementById("icon").value = name;
            document.getElementById("selected-icon-display").className = name + " font-40px default-color";
            document.getElementById("icon-dropdown").style.display = "none";
        }

        window.onload = function() {
            // Pre-select the icon when the page loads
            var selectedIcon = document.getElementById("icon").value;
            if (selectedIcon) {
                document.getElementById("selected-icon-display").className = selectedIcon + " font-40px default-color";
            }
        }

        window.onclick = function(event) {
            if (!event.target.matches('.md-input')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === "block") {
                        openDropdown.style.display = "none";
                    }
                }
            }
        }
    </script>
    {{-- validate --}}
    <script>
        function showModal() {
            if (validateEditTopBlockForm()) {
                document.getElementById('open-modal').setAttribute('href', '#modal-popup');
                document.getElementById('open-modal').setAttribute('data-effect', 'mfp-newspaper');
                document.getElementById('open-modal').click();
            }
        }

        function submitForm() {
            document.getElementById('confirmed').value = '1';
            document.getElementById('edit-top-block-form').submit();
        }

        function validateEditTopBlockForm() {
            let isValid = true;
            document.querySelectorAll('.error').forEach(el => el.textContent = '');

            const title = document.getElementById('title').value.trim();
            const body = document.getElementById('body').value.trim();
            const icon = document.getElementById('icon').value.trim();

            if (!title) {
                document.getElementById('error-title').textContent = 'タイトルを入力してください';
                isValid = false;
            }

            if (!body) {
                document.getElementById('error-body').textContent = '内容を入力してください';
                isValid = false;
            }

            if (!icon) {
                document.getElementById('error-icon').textContent = 'アイコンを選択してください';
                isValid = false;
            }

            return isValid;
        }
    </script>
</x-admin-layout>