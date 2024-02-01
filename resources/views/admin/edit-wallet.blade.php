<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coinmaniax</title>
    @include('include.a_css')
</head>

<body>
    <div class="container-scroller">
         
        <!-- partial:partials/_sidebar.html -->
        @include('include.a_sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.a_topbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="assets/admin/images/dashboard/Group126@2x.png"
                                                class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0">Overview of all Plans</h4>
                                        </div>
                                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                            <span>
                                                <a href="{{ route('app.home') }}" target="_blank"
                                                    class="btn btn-outline-light btn-rounded get-started-btn">Go to
                                                    Home</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Wallet</h4>
                                <form class="" method="POST" data-post-type="edit-plan" action="{{ route("admin.wallet.view",["edit",$account->user_id]) }}">
                                 {{-- <span>{{ $account }}</span> --}}
                                  @csrf
                                  <div class="col-sm-12  form-row">
                                    @if (!empty($success))
                                    <span class="info_box text-success">{{ $success }}</span>
                                    @endif
                                  </div>
    
                                  <div class="col-sm-12  form-row">
                                    @if (!empty($error))
                                    <span class="info_box text-danger">{{ $error }}</span>
                                    @endif
                                  </div>
    
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="dolla_balance">Dolla Balance</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="dolla_balance" class="form-control" id="dolla_balance" placeholder="Enter dolla_balance" value="{{ !empty(old("dolla_balance")) ? old("dolla_balance") : $account->dolla_balance   }}">
                                     </div>
                                     @error('dolla_balance')
                                     <span class="text-danger" id="error_dolla_balance">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="bitcoin_balance">Bitcoin Balance</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="bitcoin_balance" class="form-control" id="bitcoin_balance" placeholder="Enter bitcoin_balance" value="{{ !empty(old("bitcoin_balance")) ? old("bitcoin_balance") : $account->bitcoin_balance   }}">
                                     </div>
                                     @error('bitcoin_balance')
                                     <span class="text-danger" id="error_bitcoin_balance">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="ethereum_balance">Ethereum Balance</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="ethereum_balance" class="form-control" id="ethereum_balance" placeholder="Enter ethereum_balance" value="{{ !empty(old("ethereum_balance")) ? old("ethereum_balance") : $account->ethereum_balance   }}">
                                     </div>
                                     @error('ethereum_balance')
                                     <span class="text-danger" id="error_ethereum_balance">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="referral_balance">Referral Balance</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="referral_balance" class="form-control" id="referral_balance" placeholder="Enter referral_balance" value="{{ !empty(old("referral_balance")) ? old("referral_balance") : $account->referral_balance   }}">
                                     </div>
                                     @error('referral_balance')
                                     <span class="text-danger" id="error_referral_balance">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="dolla_withdrawals">Total Dolla Withdrawn </label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="dolla_withdrawals" class="form-control" id="dolla_withdrawals" placeholder="Enter dolla_withdrawals" value="{{ !empty(old("dolla_withdrawals")) ? old("dolla_withdrawals") : $account->dolla_withdrawals   }}">
                                     </div>
                                     @error('dolla_withdrawals')
                                     <span class="text-danger" id="error_dolla_withdrawals">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="bitcoin_withdrawals">Total Bitcoin Withdrawn </label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="bitcoin_withdrawals" class="form-control" id="bitcoin_withdrawals" placeholder="Enter bitcoin_withdrawals" value="{{ !empty(old("bitcoin_withdrawals")) ? old("bitcoin_withdrawals") : $account->bitcoin_withdrawals   }}">
                                     </div>
                                     @error('bitcoin_withdrawals')
                                     <span class="text-danger" id="error_bitcoin_withdrawals">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="ethereum_withdrawals">Total Ethereum Withdrawn </label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="ethereum_withdrawals" class="form-control" id="ethereum_withdrawals" placeholder="Enter ethereum_withdrawals" value="{{ !empty(old("ethereum_withdrawals")) ? old("ethereum_withdrawals") : $account->ethereum_withdrawals   }}">
                                     </div>
                                     @error('ethereum_withdrawals')
                                     <span class="text-danger" id="error_ethereum_withdrawals">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="dolla_invested">Total Dolla Invested </label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="dolla_invested" class="form-control" id="dolla_invested" placeholder="Enter dolla_invested" value="{{ !empty(old("dolla_invested")) ? old("dolla_invested") : $account->dolla_invested   }}">
                                     </div>
                                     @error('dolla_invested')
                                     <span class="text-danger" id="error_dolla_invested">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="bitcoin_invested">Total Bitcoin Invested</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="bitcoin_invested" class="form-control" id="bitcoin_invested" placeholder="Enter bitcoin_invested" value="{{ !empty(old("bitcoin_invested")) ? old("bitcoin_invested") : $account->bitcoin_invested   }}">
                                     </div>
                                     @error('bitcoin_invested')
                                     <span class="text-danger" id="error_bitcoin_invested">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="ethereum_invested">Total Ethereum Invested</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="ethereum_invested" class="form-control" id="ethereum_invested" placeholder="Enter ethereum_invested" value="{{ !empty(old("ethereum_invested")) ? old("ethereum_invested") : $account->ethereum_invested   }}">
                                     </div>
                                     @error('ethereum_invested')
                                     <span class="text-danger" id="error_ethereum_invested">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="dolla_earned">Total Dolla Earned</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="dolla_earned" class="form-control" id="dolla_earned" placeholder="Enter dolla_earned" value="{{ !empty(old("dolla_earned")) ? old("dolla_earned") : $account->dolla_earned   }}">
                                     </div>
                                     @error('dolla_earned')
                                     <span class="text-danger" id="error_dolla_earned">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="ethereum_earned">Total Ethereum Earned</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="ethereum_earned" class="form-control" id="ethereum_earned" placeholder="Enter ethereum_earned" value="{{ !empty(old("ethereum_earned")) ? old("ethereum_earned") : $account->ethereum_earned   }}">
                                     </div>
                                     @error('ethereum_earned')
                                     <span class="text-danger" id="error_ethereum_earned">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="bitcoin_earned">Total Bitcoin Earned</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="bitcoin_earned" class="form-control" id="bitcoin_earned" placeholder="Enter bitcoin_earned" value="{{ !empty(old("bitcoin_earned")) ? old("bitcoin_earned") : $account->bitcoin_earned   }}">
                                     </div>
                                     @error('bitcoin_earned')
                                     <span class="text-danger" id="error_bitcoin_earned">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="deposits">Total Deposits</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="deposits" class="form-control" id="deposits" placeholder="Enter deposits" value="{{ !empty(old("deposits")) ? old("deposits") : $account->deposits   }}">
                                     </div>
                                     @error('deposits')
                                     <span class="text-danger" id="error_deposits">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <!--<div class="col-sm-6 col-md-12 mb-2">-->
                                  <!--  <div class="form-group">-->
                                  <!--   <label class="form-label" for="perfectmoney_address">Perfect Money Address</label>-->
                                  <!--   <div class="form-control-wrap">-->
                                  <!--    <input style="color: #fff"  type="text" name="perfectmoney_address" class="form-control" id="perfectmoney_address" placeholder="Enter perfectmoney_address" value="{{ !empty(old("perfectmoney_address")) ? old("perfectmoney_address") : $account->perfectmoney_address   }}">-->
                                  <!--   </div>-->
                                  <!--   @error('perfectmoney_address')-->
                                  <!--   <span class="text-danger" id="error_perfectmoney_address">{{ $message }}</span>-->
                                  <!--   @enderror-->
                                  <!--  </div>-->
                                  <!--</div>-->
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="bitcoin_address">Bitcoin Address</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="bitcoin_address" class="form-control" id="bitcoin_address" placeholder="Enter bitcoin_address" value="{{ !empty(old("bitcoin_address")) ? old("bitcoin_address") : $account->bitcoin_address   }}">
                                     </div>
                                     @error('bitcoin_address')
                                     <span class="text-danger" id="error_bitcoin_address">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="usdt_address">USDT Address</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="usdt_address" class="form-control" id="usdt_address" placeholder="Enter usdt_address" value="{{ !empty(old("usdt_address")) ? old("usdt_address") : $account->usdt_address   }}">
                                     </div>
                                     @error('usdt_address')
                                     <span class="text-danger" id="error_usdt_address">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="ethereum_address">Ethereum Address</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="ethereum_address" class="form-control" id="ethereum_address" placeholder="Enter ethereum_address" value="{{ !empty(old("ethereum_address")) ? old("ethereum_address") : $account->ethereum_address   }}">
                                     </div>
                                     @error('ethereum_address')
                                     <span class="text-danger" id="error_ethereum_address">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
                                  <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                     <label class="form-label" for="litecoin_address">Litecoin Address</label>
                                     <div class="form-control-wrap">
                                      <input style="color: #fff"  type="text" name="litecoin_address" class="form-control" id="litecoin_address" placeholder="Enter litecoin_address" value="{{ !empty(old("litecoin_address")) ? old("litecoin_address") : $account->litecoin_address   }}">
                                     </div>
                                     @error('litecoin_address')
                                     <span class="text-danger" id="error_litecoin_address">{{ $message }}</span>
                                     @enderror
                                    </div>
                                  </div>
    
    
                                <div class="col-sm-4 mt-3">
                                 <div class="form-group">
                                  <div class="form-control-wrap">
                                   <button type="submit"  name="edit-plan" style="text-align:center;" class="d-block form-control btn btn-primary " >Edit Wallet Record</button>
                                  </div>
                                 </div>
                                </div>
                
                               </form>
                            </div>
                        </div>
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>
