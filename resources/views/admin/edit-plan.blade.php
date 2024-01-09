<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gloryinvestmentslimited</title>
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


                    <div class="card">
                        <div class="card-body">
                            <form class="" method="POST" data-post-type="edit-plan"
                                action="{{ route('admin.edit.plan.view', ['id' => $plan->id]) }}">

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
                                        <label class="form-label" for="name">Plan Name</label>
                                        <div class="form-control-wrap">
                                            <input required="" type="text" name="name" class="form-control"
                                                id="name" placeholder="Enter Name"
                                                value="{{ !empty(old('name')) ? old('name') : $plan->name }}">
                                        </div>
                                        @error('name')
                                            <span class="text-danger" id="error_name">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="min">Plan Minimum Amount</label>
                                        <div class="form-control-wrap">
                                            <input required="" type="text" name="min" class="form-control"
                                                id="min" placeholder="Enter Min"
                                                value="{{ !empty(old('min')) ? old('min') : $plan->min }}">
                                        </div>
                                        @error('min')
                                            <span class="text-danger" id="error_min">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="max">Plan Maximum Amount</label>
                                        <div class="form-control-wrap">
                                            <input required="" type="text" name="max" class="form-control"
                                                id="max" placeholder="Enter max"
                                                value="{{ !empty(old('max')) ? old('max') : $plan->max }}">
                                        </div>
                                        @error('max')
                                            <span class="text-danger" id="error_max">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="min">Plan Type</label>
                                        <div class="form-control-wrap">
                                            <select name="type" class="form-control">
                                                <option value="" disabled selected>Select</option>
                                                @foreach (config('app.type') as $type)
                                                    <option @if (old('type') == $type || $plan->type == $type) selected @endif
                                                        value="{{ $type }}">{{ str_replace('-', ' ', $type) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('type')
                                            <span class="text-danger" id="error_type">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="min">Plan Currency</label>
                                        <div class="form-control-wrap">
                                            <select name="currency" class="form-control">
                                                <option value="" disabled selected>Select</option>
                                                @foreach (config('app.currency') as $currency)
                                                    <option @if (old('currency') == $currency || $plan->currency == $currency) selected @endif
                                                        value="{{ $currency }}">{{ $currency }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('currency')
                                            <span class="text-danger" id="error_currency">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="roi">ROI</label>
                                        <div class="form-control-wrap">
                                            <input required="" type="text" name="roi" class="form-control"
                                                id="roi" placeholder="Enter roi"
                                                value="{{ !empty(old('roi')) ? old('roi') : $plan->roi }}">
                                        </div>
                                        @error('roi')
                                            <span class="text-danger" id="error_roi">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="duration">Duration in days (example 30
                                            days)</label>
                                        <div class="form-control-wrap">
                                            <input required="" type="text" name="duration"
                                                class="form-control" id="duration" placeholder="Enter duration"
                                                value="{{ !empty(old('duration')) ? old('duration') : $plan->duration }}">
                                        </div>
                                        @error('duration')
                                            <span class="text-danger" id="error_duration">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="commission">Total Commission in percent (%)
                                            (example : 60)</label>
                                        <div class="form-control-wrap">
                                            <input required="" type="text" name="commission"
                                                class="form-control" id="commission" placeholder="Enter commission"
                                                value="{{ !empty(old('commission')) ? old('commission') : $plan->commission }}">
                                        </div>
                                        @error('commission')
                                            <span class="text-danger" id="error_commission">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-sm-4 mt-3">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <button type="submit" name="edit-plan" style="text-align:center;"
                                                class="d-block form-control btn btn-primary ">Edit Investment
                                                Plan</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
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
