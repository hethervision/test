@extends('layouts.admin')

@section('content')
    <?php $now = Carbon\Carbon::now() ?>

    <div class="panel">
        <div class="header bg-primary pb-6 pt-5 pt-md-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Testimonials</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.testimonial.index') }}">Testimonials</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ route('admin.testimonial.index') }}" class="btn btn-sm btn-neutral">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('admin.testimonial.update', $testimonial) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <!-- Card header -->
                            <div class="card-header">
                                <h3 class="mb-3">Edit Testimonial</h3>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">

                                @if(count($errors))
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <p class="mb-0">{{ session('success') }}</p>
                                    </div>
                                @endif



                                        <div class="form-group">
                                            <label
                                                for="first_name"
                                                class="form-control-label"
                                            >
                                                Title
                                            </label>
                                            <input
                                                id="title"
                                                class="form-control"
                                                name="first_name"
                                                placeholder="First Name"
                                                required
                                                type="text"
                                                value="{{ old('first_name') ?? ($testimonial->first_name ?? '') }}"
                                            />
                                        </div>

                                        <div class="form-group">
                                            <label
                                                for="last_name"
                                                class="form-control-label"
                                            >
                                                Title
                                            </label>
                                            <input
                                                id="last_name"
                                                class="form-control"
                                                name="last_name"
                                                placeholder="Second Name"
                                                required
                                                type="text"
                                                value="{{ old('last_name') ?? ($testimonial->last_name ?? '') }}"
                                            />
                                        </div>


                                        <div class="form-group">
                                            <label
                                                for="message"
                                                class="form-control-label"
                                            >
                                                Testimonial
                                            </label>
                                            <textarea
                                                id="message"
                                                class="form-control"
                                                name="message"
                                                required
                                                rows="5"
                                                type="text"
                                            >{{ old('message') ?? ($testimonial->message ?? '') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="message"
                                                class="form-control-label"
                                            >
                                                Rating
                                            </label>
                                            @for ($i = 1; $i < 6; $i++)

                                                <input
                                                    type="radio"
                                                    name="rating"
                                                    value="{{ $i }}"
                                                    @if($testimonial->rating == $i) checked @endif

                                                ></input>
                                                {{ $i }}

                                            @endfor
                                        </div>




                            </div>
                            <!-- Card footer -->
                            <div class="card-footer py-4 text-right">
                                <button
                                    class="btn btn-primary"
                                    type="submit"
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
