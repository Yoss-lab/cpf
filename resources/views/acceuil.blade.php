  @extends('layouts.app')
  @section('content')
   <!-- cover images -->
   @include('includes.cover') 
   
    <div></div>

   <!-- nos type des cours -->
   @include('includes.typeCours')

   <!-- nos cours & formations -->
   @include('includes.nosFormations') 


   <!-- nos clients -->
   @include('includes.client') 

    
   <!-- à propos notre centre CPF -->
   @include('includes.a-proposCPF')

    
    
   <!-- CPF evenements -->
   @include('includes.nosEvenements') 

   <!-- s'inscrire -->
   <!-- @include('includes.subscribe') -->
  
   @endsection
   