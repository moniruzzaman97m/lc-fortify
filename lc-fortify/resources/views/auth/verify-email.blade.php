<x-guest-layout>
    <h2>Verify Email</h2>

    <div class="mb-4 text-sm text-gray-600">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
    </div>

    @if ($errors->any())
        <div>
            <div>Something went wrong!</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <div>
            <button type="submit">
                {{ __('Resend Verification Email') }}
            </button>
        </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
            {{ __('Logout') }}
        </button>
    </form>

</x-guest-layout>
