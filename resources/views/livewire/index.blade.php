<x-slot name="title">
    Quicko
</x-slot>
<div class="flex flex-wrap lg:flex-nowrap lg:flex-row  box-border upload">
    <!-- steps-->
    @livewire('procedures.steps')

    {{-- toogler --}}
    @if ($toggler==='false')
      @livewire('procedures.upload')
      @endif
    @if($toggler==='true')
    @livewire('procedures.review',['info' => $info])

    @endif


    {{-- @livewire('procedures.review') --}}

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content rounded-lg">
              <div class="modal-header py-4 text-center">
                <h2 class="text-gray-700 font-light text-2xl">Please enter password !</h2>
              </div>
              <div class="modal-body text-left px-12 ">
                <p class="text-gray-400 text-sm ">The uploaded PDF is password protected,please unlock it to move forward.</p>
                <img src="{{asset('images/password.png')}}" alt="password-icon" class="block h-16 my-4">
                
                <input type="password" placeholder="Enter password" id="pdf-password" class="focus:outline-none w-1/2 border-2 border-blue-500 rounded-md px-4 py-3 text-gray-700">
              
                {{-- displays error message --}}
               <span class="block text-red-500 font-bold text-base pt-3" id="error-message"></span> 
               
              </div>
              <div class="modal-footer pt-7 px-12 pb-5">
      
                <button class="px-7 py-2 bg-blue-600 hover:bg-blue-400 text-white rounded-3xl focus:outline-none" id="submit-password">Unlock </button>
      
                <button class="px-8 py-2 bg-gray-600 hover:bg-gray-400 text-white rounded-3xl ml-4 focus:outline-none" id="close">Skip </button>
      
              </div>
            </div>
      
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>
          <script src="{{asset('js/upload.js')}}"></script>
</div>
