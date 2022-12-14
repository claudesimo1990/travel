@extends('site.profile.layout')


@section('profile')
    <section aria-labelledby="payment-details-heading">
        <form action="#" method="POST">
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h2 id="payment-details-heading" class="text-lg font-medium leading-6 text-gray-900">@lang('profile.posts')</h2>
                        <p class="mt-1 text-sm text-gray-500">Update your billing information. Please note that updating your location could affect your tax rates.</p>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-gray-800 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">Save</button>
                </div>
            </div>
        </form>
    </section>
@endsection
