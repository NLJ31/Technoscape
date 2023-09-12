    @extends('Template.template')

    @section('head')
   
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @endsection
    
    @section('body')
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                          
                        </a>
                    </div>
    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a href="{{ route('dashboard') }}"> Dashboard </a>
                        <a href="{{ route('hackathonDashboard') }}"> Hackathon </a>
                        <a href="{{ route('profile') }}"> Profile </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>

                   
                    
                    Payment Status: 
                    {{$hackathonTeam->payment_status}}
                    <br>
                    
                    @if($hackathonTeam->payment_status==NULL || $hackathonTeam->payment_status=="unpaid" || $hackathonTeam->payment_status=="rejected" || $hackathonTeam->payment_receipt == NULL)
                    <form method="POST" action="{{ route('storeHackathonTeamPayment') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="payment_receipt" required>
                        <br>
                        @if ($hackathonTeam->payment_status=="rejected")
                            <button type="submit">Upload Payment Method Again</button>
                        @else
                        <button type="submit">Upload Payment Method</button>
                        @endif
                        <br>
                        @if ($errors->has('payment_receipt'))
                        @foreach ($errors->get('payment_receipt') as $error)
                            <span style="color:red">{{ $error }}</span>
                        @endforeach
                    @endif
                    </form>
                    @endif

                    @if($hackathonTeam->payment_receipt && $hackathonTeam->payment_status != "rejected")
                    <a href="{{ route('downloadReceipt', ['filename' => $hackathonTeam->payment_receipt]) }}">Download Payment</a>
                    @endif
                    
               
          
    </div>
    @endsection

