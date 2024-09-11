<x-user-layout>
    <!--== Tabs Style 02 Start ==-->
    <section class="white-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 section-heading">
                    <h4 class="text-uppercase mt-0">支払い</h4>
                </div>
            </div>
            <div class="row mt-50 tabs-style-02">
                <div class="col-md-8 col-md-offset-2">
                    <div class="light-tabs">
                    <!--== Nav tabs ==-->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active default-bg">
                            <a href="#bank-transfer" role="tab" data-toggle="tab">銀行振込</a>
                        </li>
                        <li role="presentation">
                            <a href="#paypal-credit" role="tab" data-toggle="tab">PayPal/クレジット</a>
                        </li>
                    </ul>
                    <!--== Tab panes ==-->
                    <div class="tab-content text-center">
                        {{-- Bank Transfer --}}
                        <div role="tabpanel" class="tab-pane fade in active" id="bank-transfer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt consequat nunc, ultrices vehicula mauris mollis et. Sed pharetra ultrices quam in laoreet. Donec laoreet eu mi nec sagittis. Curabitur nunc velit, egestas vel aliquet ac, tempus quis dolor. </p>
                        </div>
                        {{-- PayPal Credit --}}
                        <div role="tabpanel" class="tab-pane fade" id="paypal-credit">
                        <p>Duis pulvinar mattis turpis in mollis. Suspendisse eu eros id dolor efficitur tincidunt quis id tellus. In lacinia laoreet auctor. Mauris a consequat magna, in tempus urna laoreet eu mi nec sagittis. Curabitur nunc velit, egestas vel aliquet ac, tempus quis dolor.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Tabs Style 02 End ==-->
</x-user-layout>