<x-admin-layout>
  <!--== Products Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 section-heading">
                <form id="search-form" action="{{ route('admin.get.advertisements') }}" method="GET">
                    <div class="search-box">
                        <input type="text" name="search" placeholder="検索..." value="{{ request()->input('search') }}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <x-message-box></x-message-box>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover shop-cart">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th style="min-width: 110px;">登録日</th>
                            <th style="min-width: 110px;">ページ名</th>
                            <th style="min-width: 110px;">作成者</th>
                            <th style="min-width: 110px;">ビュー</th>
                            <th style="min-width: 110px;">ステータス</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advertisements as $key => $advertisement)
                            <tr>
                                <td>
                                    {{ $ttl + 1 - ($advertisements->firstItem() + $key) }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $advertisement->created_at->format('Y-m-d') }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $advertisement->name }}
                                </td>
                                <td style="min-width: 110px;">
                                    {{ $advertisement->user->name }}
                                </td>                             
                                <td style="min-width: 110px;">
                                    <a href="{{ route('guest.one.page.advertisement', $advertisement->param_name) }}" target="_blank">
                                        <i class="fa fa-eye" style="font-size: 1.5em;"></i>
                                    </a>
                                </td>
                                <td>
                                    <label class="toggle-switch">
                                        <input type="checkbox" data-id="{{ $advertisement->id }}" class="status-toggle" {{ $advertisement->status == 1 ? 'checked' : '' }}>
                                        <span class="slider"></span>
                                    </label>   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @include('components.pagination')
            </div>
            @if ($advertisements->isEmpty())
            <h1 class="mt-120 mb-100 text-center">広告はありません</h1>
            @endif
        </div>
    </div>
  </section>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Listen for the toggle switch change event
            $('.status-toggle').on('change', function() {
                // Get the section ID from the data-id attribute
                var sectionId = $(this).data('id');
                // Determine the status based on whether the checkbox is checked
                var status = $(this).is(':checked') ? 1 : 0;

                // Send AJAX request to update the section status
                $.ajax({
                    url: '/admin/update/advertisement-status', // The route URL
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        id: sectionId,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();
                        } else {
                            window.location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating section status: ' + error);
                        window.location.reload();
                    }
                });
            });
        });
    </script>
</x-admin-layout>
