<x-user-layout>
    <!--== Pricing Table Style 01 Start ==-->
  <section class="white-bg pt-120 pb-120">
    <div class="container">
    	<div class="row">
        	<div class="col-sm-8 section-heading">
              <h4 class="text-uppercase mt-0">プラン</h4>
        	</div>
        </div>
        <div class="row">
          <div class="col-md-4 pricing-table col-sm-4">
            <div class="pricing-box">
              <h3 style="color: #5f9ea0;">無料</h3>
              {{-- <h4 class="grey-color text-uppercase">コーディング不要でページを作成</h4> --}}
              <h2 class="roboto-font font-60px default-color pricing-header">
                <sup>¥</sup>
                <span>0</span>
                <span class="font-12px"><br></span>
              </h2>
              <ul class="pricing-list">
                <li>
                    <span class="feature-label">会員メッセンジャーやり取り</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">案件情報の掲載</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">案件へのコンタクト</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">広告ページ制作機能</span>
                    <span class="feature-check">ー</span>
                </li>
                <li>
                    <span class="feature-label">画像やアイコンのダウンロード</span>
                    <span class="feature-check">ー</span>
                </li>
              </ul>
              @if (Auth::user()->plan_status == 0)
              <div class="pricing-box-bottom">
                <a class="btn btn-dark btn-md btn-default full-width">現在ご利用中のプラン</a>
              </div>
              @endif
            </div>
          </div>          

          <div class="col-md-4 pricing-table col-sm-4">
            <div class="pricing-box">
              <h3 style="color: #7e7e7e;">シルバー</h3>
              {{-- <h4 class="grey-color text-uppercase">拡張機能を備えた高度なウェブサイトを作成</h4> --}}
              <h2 class="roboto-font font-60px default-color pricing-header">
                <sup>¥</sup>
                <span>3,300</span>
                <span class="font-12px">（税込）<br>（月額利用料）</span>
              </h2>
              <div class="pricicng-feature">
                <ul class="pricing-list">
                  <li>
                      <span class="feature-label">会員メッセンジャーやり取り</span>
                      <span class="feature-check">◯</span>
                  </li>
                  <li>
                      <span class="feature-label">案件情報の掲載</span>
                      <span class="feature-check">◯</span>
                  </li>
                  <li>
                      <span class="feature-label">案件へのコンタクト</span>
                      <span class="feature-check">◯</span>
                  </li>
                  <li>
                      <span class="feature-label">広告ページ制作機能</span>
                      <span class="feature-check">◯</span>
                  </li>
                  <li>
                      <span class="feature-label">画像やアイコンのダウンロード</span>
                      <span class="feature-check">ー</span>
                  </li>
                </ul>
              </div>
              @if (Auth::user()->plan_status == 1)
              <div class="pricing-box-bottom">
                <a class="btn btn-dark btn-md btn-default full-width">現在ご利用中のプラン
                  <span style="color: #BF0731; font-size: 12px; font-weight: bold;">（残り 365 日）</span>
                </a>
              </div>
              @else
              <div class="pricing-box-bottom">
                <a class="btn btn-color btn-md btn-default full-width" href="{{ route('user.purchase.plan', 1) }}">今すぐお試しください</a>
              </div>
              @endif
            </div>
          </div>          

          <div class="col-md-4 pricing-table col-sm-4">
            <div class="pricing-box">
              <h3 style="color: #ffc107;">ゴールド</h3>
              {{-- <h4 class="grey-color text-uppercase">最高の機能を備えたプレミアムウェブサイトを作成</h4> --}}
              <h2 class="roboto-font font-60px default-color pricing-header">
                <sup>¥</sup>
                <span>5,500</span>
                <span class="font-12px">（税込）<br>（月額利用料）</span>
              </h2>
              <ul class="pricing-list">
                <li>
                    <span class="feature-label">会員メッセンジャーやり取り</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">案件情報の掲載</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">案件へのコンタクト</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">広告ページ制作機能</span>
                    <span class="feature-check">◯</span>
                </li>
                <li>
                    <span class="feature-label">画像やアイコンのダウンロード</span>
                    <span class="feature-check">◯</span>
                </li>
              </ul>
              @if (Auth::user()->plan_status == 2)
              <div class="pricing-box-bottom">
                <a class="btn btn-dark btn-md btn-default full-width">現在ご利用中のプラン 
                  <span style="color: #BF0731; font-size: 12px; font-weight: bold;">（残り 365 日）</span>
                </a>
              </div>
              @else
              <div class="pricing-box-bottom">
                <a class="btn btn-color btn-md btn-default full-width" href="{{ route('user.purchase.plan', 2) }}">今すぐお試しください</a>
              </div>
              @endif
            </div>
          </div>          
        </div>
    </div>
  </section>
  <!--== Pricing Table Style 01 End ==-->
</x-user-layout>