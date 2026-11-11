@extends('layout')
@section('content')

<section class="studyvisa-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Study In Canada</h5>-->
                    <h2>學生簽證</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Blog header-->
<!--  Article -->
<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="content-wrap practice-single">
                    <div class="content-text">
                        <h4 class="section-title mt-0">學生直入計畫</h4>
                        <div class="line-red-2 pr-line"></div>
                        <h4 class="par-head-h4">要求</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>居住在以下國家的合法居民 中國、印度、摩洛哥、巴基斯坦、菲律賓、塞內加爾、越南</li>
                                <li>加拿大指定學習機構的錄取通知書</li>
                                <li>持有 10,000 加元的擔保投資證 (GIC) </li>
                                <li>語言測試結果： 雅思 6.0 或以上</li>
                                <li>訪問簽證</li>
                            </ul>
                        </div>
                        <h4 class="section-title">常規學習許可證</h4>
                        <div class="line-red-2 pr-line"></div>
                        <h4 class="par-head-h4">要求：
                            <span class="par-p"> (最低資金要求）</span>
                        </h4>
                        <table>
                            <tr class="bg-grey ">
                                <td class="p-4">來加拿大的人員</td>
                                <td class="p-4">每年所需資金數額（不包括學費）</td>
                                <td class="p-4">每月所需資金數額（學費之外的費用）</td>
                            </tr>
                            <tr class="table-bottom">
                                <td class="p-4">學生</td>
                                <td class="p-4">CAN $10,000</td>
                                <td class="p-4">CAN $833</td>

                            </tr>

                            <tr class="table-bottom">
                                <td class="p-4">第一位家庭成員</td>
                                <td class="p-4">CAN $4,000</td>
                                <td class="p-4">CAN $333</td>
                            </tr>
                            <tr class="table-bottom">
                                <td class="p-4">每增加一名隨行家庭成員</td>
                                <td class="p-4">CAN $3,000</td>
                                <td class="p-4">CAN $255</td>
                            </tr>

                        </table>
                        <h4 class="par-head-h4">優勢/成果：</h4>
                        <div class="par-list">
                            <ul class="list-left">
                                <li>有效期為學習計畫的持續時間加上額外的 90 天（用於準備離境或申請延長逗留時間）</li>
                                <li>允許每週工作不超過 20 小時</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end col-md-9 -->
            <!--  col-md-3 -->
            <div class="col-lg-3 col-md-12 col-sm-12 ">
                @include('sidebar')

            </div>
        </div>
    </div>
</section>

@endsection