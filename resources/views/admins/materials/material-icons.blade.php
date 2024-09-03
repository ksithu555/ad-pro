<x-admin-layout>
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-12 centerize-col text-center">
                <pre> アイコン名をコピーして使用してください </pre>
              </div>
            </div>
            <div class="row mt-50">
                <div class="icon-examples">
                    @foreach ($icons as $icon)
                    <span class="icon-box">
                        <span aria-hidden="true" class="{{ $icon->name }}"></span>{{ $icon->name }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
      </section>
</x-admin-layout>