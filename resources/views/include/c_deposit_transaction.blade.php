@if (!$deposits->isEmpty())
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">MY DEPOSIT TRANSACTIONS</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">S/N</th>
                                <th class="wd-15p border-bottom-0">MESSAGE</th>
                                <th class="wd-20p border-bottom-0">CURRENCY</th>
                                <th class="wd-15p border-bottom-0">AMOUNT</th>
                                <th class="wd-10p border-bottom-0">TYPE</th>
                                <th class="wd-25p border-bottom-0">STATUS</th>
                                <th class="wd-25p border-bottom-0">DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deposits as $key => $deposit)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ ucwords($deposit->message) }}</td>
                                    <td>{{ ucwords($deposit->currency) }}</td>
                                    <td>{{ number_format($deposit->amount, 0, '.', ',') }}
                                    </td>
                                    <td>{{ ucwords($deposit->type) }}</td>
                                    <td>{{ ucwords(config('app.tx_status')[$deposit->status]) }}
                                    </td>
                                    <td>{{ date('d M,Y', strtotime($deposit->created_at)) }}
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