@extends('layouts.app')

@section('content')

    <main class="m-5">
        <form action="{{route('timeline2')}}" method="GET">
            <div class="d-flex justify-content-center align-items-center" style="margin-top: 8rem">
                <div class="bg-card-body position-relative rounded">
                    <h1 class="position-absolute start-0 bottom-100 py-4 fw-bold">Ads Status</h1>
                    <div class="p-5">
                        <div class="row">
                            <div class="col d-flex flex-column align-items-center mx-5" style="width: 16rem">
                                <img
                                    src="{{ asset('assets/images/more.svg') }}"
                                    alt="more"
                                    class="bg-secondary p-1 rounded-circle border-lemon"
                                    width="75px"
                                    height="75px"
                                />
                                <span class="timeline"></span>
                            </div>
                            <div class="col">
                                <h1 style="margin-top: 0.5rem">Validate</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex flex-column align-items-center mx-5" style="width: 16rem">
                                <img
                                    src="{{ asset('assets/images/more.svg') }}"
                                    alt="more"
                                    class="bg-secondary p-1 rounded-circle"
                                    width="75px"
                                    height="75px"
                                />
                                <span></span>
                            </div>
                            <div class="col">
                                <h1 style="margin-top: 0.7rem">Completed</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="fw-normal text-center my-4">
                Take the time to check, please come back later. When you receive a notification email. If you want to log out
                please click the profile icon and click ???Complete??? to getting back to the main page.
            </h2>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn bg-orange-500 rounded-pill fw-bold px-5">
                    <h1>Complete</h1>
                </button>
            </div>
        </form>
    </main>
@endsection
