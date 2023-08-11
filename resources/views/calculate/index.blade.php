@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mathematic') }}</div>
                <form method="POST" action="{{ route('store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">A</label>

                        <div class="col-md-6">
                            <label>
                                <input type="number"
                                       step=0.01
                                       class="form-control
                                       @error('a') is-invalid @enderror"
                                       name="a"
                                       value="{{ old('a') }}"
                                       required
                                       autofocus>
                            </label>
                            @error('a')
                                <div class="small text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">B</label>

                        <div class="col-md-6">
                            <label>
                                <input type="number"
                                       step=0.01
                                       class="form-control
                                       @error('b') is-invalid @enderror"
                                       name="b"
                                       value="{{ old('b') }}"
                                       required
                                       autofocus>
                            </label>

                            @error('b')
                            <div class="small text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">C</label>

                        <div class="col-md-6">
                            <label>
                                <input type="number"
                                       step=0.01
                                       class="form-control
                                       @error('c') is-invalid @enderror"
                                       name="c"
                                       value="{{ old('c') }}"
                                       required
                                       autofocus>
                            </label>

                            @error('c')
                            <div class="small text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>


                    @if (isset($values))
                        @foreach($values as $key => $value)

                            <p>{{($key + 1) . '. Service'}}: {{$value}}</p>
                        @endforeach
                    @endif

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Calculate') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
