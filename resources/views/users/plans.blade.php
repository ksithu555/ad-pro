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
              <h3 class="dark-color mb-0">無料</h3>
              <h4 class="grey-color text-uppercase">コーディング不要でページを作成</h4>
              <h2 class="roboto-font font-60px default-color"><sup>¥</sup><span>0</span></h2>
              <ul>
                <li>To-Doシステムで通知やメッセージを受け取る</li>
                <li>メンバーの詳細を確認し、コミュニケーションを取る</li>
                <li>美しいテンプレートを使って独自の広告ページを作成</li>
                <li>準備された画像やアイコンを自由に利用</li>
                <li>イベントを共有</li>
                <li>メッセージで交渉</li>
                <li>通知を受け取る</li>
                <li>プロフィールを自由に編集可能</li>
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
              <h3 class="default-color mb-0">シルバー</h3>
              <h4 class="grey-color text-uppercase">拡張機能を備えた高度なウェブサイトを作成</h4>
              <h2 class="roboto-font font-60px default-color"><sup>¥</sup><span>3000</span></h2>
              <div class="pricicng-feature">
                <ul>
                  <li>To-Doシステムで通知やメッセージを受け取る</li>
                  <li>メンバーの詳細を確認し、コミュニケーションを取る</li>
                  <li>美しいテンプレートを使って独自の広告ページを作成</li>
                  <li>準備された画像やアイコンを自由に利用</li>
                  <li>イベントを共有</li>
                  <li>メッセージで交渉</li>
                  <li>通知を受け取る</li>
                  <li>プロフィールを自由に編集可能</li>
                  <li>イベントに参加</li>
                  <li>より専門的なテンプレートや高度なサポート機能にアクセス</li>
                  <li>追加の広告ウェブサイト作成を楽しむ</li>
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
              <h3 class="dark-color mb-0">ゴールド</h3>
              <h4 class="grey-color text-uppercase">最高の機能を備えたプレミアムウェブサイトを作成</h4>
              <h2 class="roboto-font font-60px default-color"><sup>¥</sup><span>6000</span></h2>
              <ul>
                <li>To-Doシステムで通知やメッセージを受け取る</li>
                <li>メンバーの詳細を確認し、コミュニケーションを取る</li>
                <li>美しいテンプレートを使って独自の広告ページを作成</li>
                <li>準備された画像やアイコンを自由に利用</li>
                <li>イベントを共有</li>
                <li>メッセージで交渉</li>
                <li>通知を受け取る</li>
                <li>プロフィールを自由に編集可能</li>
                <li>イベントに参加</li>
                <li>より専門的なテンプレートや高度なサポート機能にアクセス</li>
                <li>追加の広告ウェブサイト作成を楽しむ</li>
                <li>独占的なテンプレート、ツール、ウェブサイト成長のための機能にアクセス</li>
                <li>無制限の広告ウェブサイト作成とカスタマーサポートの恩恵を受ける</li>
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