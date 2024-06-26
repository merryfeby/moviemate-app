@extends('user_site.userLayout')
@section('content') 

<div class="px-40 py-10 bg-gray-100 container">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Top Up Balance</h2>
  <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8">
    <h2 class="text-md font-semibold text-gray-800 text-left mb-8">Current Balance Rp {{ number_format(session('login')->balance, 0, ',', '.') }}</h2>
    <form action="{{ route('topup.process')}}" method="post">
      @csrf
      <div class="">
        <h2 class="text-sm font-normal text-gray-800 text-left mb-2">Top-up amount</h2>
        <input type="number" name="amount" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-400 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Enter top-up value" required>
      </div>
      <div class="flex justify-center m-5">
        <button type="submit" name="" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-auto py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none px-5">Proceed to Payment</button>
      </div>
    </form>
    @if(session('error'))
        <div class="p-4 mb-4 mx-4 mt-4 text-sm text-red-800 rounded-lg bg-red-200" role="alert">
            <span class="font-medium">{{ session('error') }}</span> try submitting again.
        </div>
    @endif

    @if(session('success'))
        <div class="p-4 mb-4 mx-4 mt-4 text-sm text-green-800 rounded-lg bg-green-200" role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="p-4 mb-4 mx-4 mt-4 text-sm text-red-800 rounded-lg bg-red-200" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>
</div>

@endsection

