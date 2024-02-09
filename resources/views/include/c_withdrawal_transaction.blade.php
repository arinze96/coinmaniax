@if (!$withdrawals->isEmpty())
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">MY RECENT WITHDRAWAL TRANSACTIONS</div>
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
                                                            <th class="wd-15p border-bottom-0">METHOD OF PAYMENT</th>
                                                            <th class="wd-10p border-bottom-0">ADDRESS</th>
                                                            <th class="wd-25p border-bottom-0">DATE</th>
                                                            <th class="wd-25p border-bottom-0">STATUS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($withdrawals as $key => $data)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ ucwords($data->message) }}</td>
                                                                <td>{{ ucwords($data->currency) }}</td>
                                                                <td>{{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                                </td>
                                                                <td>{{ $data->withdrawal_payment_method }}</td>
                                                                <td>{{ $data->withdrawal_address }}
                                                                </td>
                                                                <td>{{ date('d M, Y', strtotime($data->created_at)) }}
                                                                </td>
                                                                <td>{{ ucwords(config('app.tx_status')[$data->status]) }}
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