@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="row">
                        <div class="col-6">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Vat Calculator
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('vat.calculator') }}" method="post">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="gross_sum" class="form-label"> Gross Sum</label>
                                            <input type="text" class="form-control" name="gross_sum" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="vat_operation" class="form-label"> VAT Calculation Operation</label>
                                            <select name="vat_operation" class="form-control" id="vat_operation">
                                                <option value="include">Include VAT</option>
                                                <option value="exclude">Exclude VAT</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label for="vat_percentage" class="form-label"> VAT Percentage</label>
                                            <input name="vat_percentage" type="text" name="" id="" class="form-control" value="15" required>
                                        </div>
                                        <div class="mb-2">
                                            <button name="calculate" class="btn btn-sm btn-success" type="submit">Calculate</button>
                                        </div>
                                    </form>

                                    <hr>
                                    <h3>Result : {{ $output }}</h3>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
