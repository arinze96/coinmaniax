@if (!$investments->isEmpty())
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">MY INVESTMENT TRANSACTIONS</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">S/N</th>
                                <th class="wd-15p border-bottom-0">MESSAGE</th>
                                <th class="wd-15p border-bottom-0">AMOUNT</th>
                                <th class="wd-15p border-bottom-0">GROWTH AMOUNT</th>
                                <th class="wd-10p border-bottom-0">INVESTMENT TYPE</th>
                                <th class="wd-25p border-bottom-0">STATUS</th>
                                <th class="wd-25p border-bottom-0">START DATE</th>
                                <th class="wd-25p border-bottom-0">CLOSE DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($investments as $key => $investment)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ ucwords($investment->message) }}</td>
                                    <td>{{ number_format($investment->amount, 0, '.', ',') }}</td>
                                    <td>{{ number_format($investment->growth_amount, 0, '.', ',') }}</td>
                                    <td>{{ ucwords($investment->type) }}</td>
                                    <td>{{ ucwords(config('app.tx_status')[$investment->status]) }}</td>
                                    <td>{{ date('d M,Y', strtotime($investment->created_at)) }}
                                    <td>{{ date('d M,Y', strtotime($investment->close_date)) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif