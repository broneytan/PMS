<x-layout>
    <h1>Delete Product</h1>
    <hr>
    if (session('status')) 
   <div class="alert alert-success">{{ session('status') }}</div> 
   <script> 
       setTimeout(function() { 
           window.location.reload(); 
       }, 4000); 
   </script> 
@endif 

</x-layout>