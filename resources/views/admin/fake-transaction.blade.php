<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>Gloryinvestmentslimited</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Fake Transactions</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all your fake transactions.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->

                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">

                                                        <li class="nk-block-tools-opt"><a href="{{ route("admin.fake_transaction.view",["add"]) }}" class="btn btn-primary"><em class="icon ni ni-add"></em><span>Add Fake Transactions</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-between -->



                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    @if (!empty($fakeTransactions))
                                                      
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Type</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($fakeTransactions as $key => $transaction)

                                                                <tr>
                                                                    <th scope="row">{{ ($key + 1) }}</th>
                                                                    <td>{{ ucwords($transaction->name) }}</td>
                                                                    <td>{{ ucwords($transaction->type) }}</td>
                                                                    <td>{{ ucwords($transaction->amount) }}</td>
                                                                    <td>{{ ucwords($transaction->currency) }}</td>
                                                                    <td>{{ $transaction->created_at }}</td>
                                                                    <td class="tb-tnx-action">
                                                                      <div class="dropdown">
                                                                          <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                              <ul class="link-list-plain">

                                                                                  <li><a data-type="fake transaction"  class="delete_data" href="{{ route("admin.fake_transaction.view",["delete","id"=>$transaction->id]) }}">Delete</a></li>
                                                                              </ul>
                                                                          </div>
                                                                      </div>
                                                                  </td>
                                                                </tr>
                                                                    
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                        
                                                    @else
                                                        <h4 class="text-center">You currently dont have any fake transactions</h4>
                                                    @endif

                                                </div>
                                            </div><!-- .card-preview -->
                                            {{-- table ends --}}
                                        </div>
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>