@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif

                   
 {{ __('You are logged in!') }}



                    
                </div>
               
              
              
               <h2>SITUATION </h2>
               <p>The country is experiencing the fourth wave of Covid-19 with an average of 571 daily 
                cases from 31 April to 7 May, resulting expansion of health facilities and more restrictive
                measures . Eight deaths related to Covid have been reported on 5 -6 May from the atolls 
                and Greater Male Area. <P>

             <p>Vaccination program continues with 126,790 persons completed first dose while 300,438 
              persons having second dose as of 6 May. The numbers represent 24% and 57% of the 
             population respectively. <P>

             <p>As of 7 May, 8,261 active cases were reported with 205 hospitalized. 
              Primary contacts of COVID-19 positive cases are home quarantined and 
             positive patients are isolated in designated facilities <P>

                               
               <h2>ACTIONS</h2>
               <p>In addition to the restrictive measures such as work from home, night curfew, 
                   closure of outdoor activities, on 7th May the Health Protection Agency (HPA) 
                   informed to close day care service, providing tuition at homes and increased 
                   quarantine duration from ten to fourteen days until further notice . <P>

             <p>The Minister of Health extended the state of public health emergency until 4 June due to COVID-19 pandemic. 
             This is the fifteenth extension of the emergency since it was first declared on 12 March 2020.  <P>

             <p>The Health Emergency Coordinating Committee (HECC), led by the Vice President 
                 and Minister of Health continue to have daily meetings in observing the situation 
                 with high level members of various teams such as Covid-19 Technical Advisory 
                 Group (TAG).<P>



<a href="https://avas.mv/en/99618 ">Confirming Third wave</a> <br>
<a href="https://mihaaru.com/news/90743 ">14 day qurantine notice</a> 




              
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
