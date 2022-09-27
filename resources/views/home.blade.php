@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (auth()->user()->is_admin == 1))
                        <!-- <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div> -->
                        return redirect()->route('admin.home');
            }else{
                return redirect()->route('home');
            }
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
