@extends('layouts.app')

@section('content')


{{-- navbar begin --}}
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
          <li class="nav-item">
          
          </li>
          <li class="nav-item">
              
           
           
           </li>  
          
          <li class="nav-item">
          
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              REPORTING
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">   
              <a href="{{ route('covid_update') }}">covid situation updates7 may 2021 </a> 
                    
          </li>
  
  
        </ul>
      </div>
    </nav>
  {{-- navbar end --}}





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
               
              
              
               <h2>BASIC HTML </h2>
               
               This lesson helps you to understanding HTML. Do you know that you are able to view websites 
               with the help of HTML? HTML (Hypertext Markup Language) is the code that is used to structure 
               a web page. The content (example, text, images, paragraph etc..) of webpage are inside the tags. 
               Let’s learn to create simple webpages and practice some HTML tags. In this tutorial you can use 
               Sublime Text as an editor. Please download the tool and create a folder to store your HMTL pages.

<ul>
    <li> Open Sublime Text  </li>
    <li> Press Ctrl_Shirt+P (or use task bar to change to HTML)  </li>
    <li> Trying changing View – Layout  </li>
    <li> Try Tools Snippets to get template and sample text   </li>
    <li> Practice some tags, save the file as .htm or html and view in browse   </li>
   </ul>

<h3>   PRACTICE </h3>
<br>Make headings by using h1 through h6. Observe the difference. Practice adding more paragaraphs to an html page
by using the paragraph (p) tag, image tag and anchor tag.             


<ul> 
 <li>teachers</li> 
 <li>students</li> 
 <li>staff</li> 
</ul> 

<a href="https://moe.gov.mv/ ">Visit Ministry of Education Maldives </a> 




              
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
