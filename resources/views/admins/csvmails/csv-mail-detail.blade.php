<x-admin-layout>
    <section class="white-bg pt-120" style="padding-bottom: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover shop-cart">
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>内容</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        企業名
                                    </td>
                                    <td>
                                        {{ $csvMail->company_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        郵便番号
                                    </td>
                                    <td>
                                        {{ $csvMail->postal_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        住所
                                    </td>
                                    <td>
                                        {{ $csvMail->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        電話番号
                                    </td>
                                    <td>
                                        {{ $csvMail->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        FAX
                                    </td>
                                    <td>
                                        {{ $csvMail->fax }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        資本金
                                    </td>
                                    <td>
                                        {{ $csvMail->capital }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        従業員数(人)
                                    </td>
                                    <td>
                                        {{ $csvMail->number_of_employees }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        年商
                                    </td>
                                    <td>
                                        {{ $csvMail->annual_turnover }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        上場
                                    </td>
                                    <td>
                                        {{ $csvMail->listed }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        URL
                                    </td>
                                    <td>
                                        {{ $csvMail->URL }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        メール
                                    </td>
                                    <td>
                                        {{ $csvMail->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        設立
                                    </td>
                                    <td>
                                        {{ $csvMail->established_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        業種
                                    </td>
                                    <td>
                                        {{ $csvMail->industry }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        グループ名
                                    </td>
                                    <td>
                                        {{ $csvMail->group }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>