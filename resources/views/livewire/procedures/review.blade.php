    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div class="mt-6 mx-auto lg:overflow-auto	">
    <div class="rounded-md shadow-xl border-b border-gray-400  bg-white max-w-2xl mx-auto py-8 px-8">
         <h1 class="text-gray-700 lg:text-xl font-bold text-center ">Awesome ! We read your Form 16 successfully  </h1>
          {{-- <p class="text-gray-700 font-light text-center text-base mt-4">Please double check the income and deductions details of form 16, you can always edit these values before E-filing.</p> --}}
          <div class="flex justify-center items-center mt-5">
              <button  wire:click="storeInfo" class="focus:outline-none text-white bg-blue-600 hover:bg-blue-400 rounded-3xl px-6 py-2">Let's E-file</button>
          </div>
    </div>
    
    <div class="rounded-md shadow-lg border-b border-gray-400 mt-6  bg-white max-w-2xl mx-auto py-8 ">
       <div class="mb-6 lg:px-8 px-6">
        <p class="text-gray-700 font-bold lg:text-2xl text-xl inline">Part A Summary</p>
        <p class="text-blue-500 font-bold float-right lg:text-2xl text-xl ">AY {{$assesment_year}}</p>
       </div>
       <div class="border-b border-gray-300 "></div>

       <div class="my-6 lg:px-8 px-6">
        <p class="text-gray-700 font-bold lg:text-2xl text-xl pb-7">Employee Details</p>
          <div class="grid grid-cols-2">
            <div class="float-left">
                <p class="text-gray-800 font-light lg:text-xl text-base">
                   {{$employee_name}} 
                </p>
                <p class="lg:text-base text-sm text-gray-500">Name</p>
             </div>
    
    
             <div class="float-right">
                <p class="text-gray-800 font-light text-xl text-base">
                    {{$employee_pan}}
                </p>
                <p class="lg:text-base text-sm text-gray-500">PAN</p>
             </div>

          </div>
   

         <div class="block mt-5">
            <p class="text-gray-800 font-light text-base">
              {{$employee_address}}
            </p>
            <p class="text-base text-gray-500">Address</p>
         </div>
       </div>

       <div class="border-b border-gray-300 "></div>
         
       <div class="mt-6 lg:px-8 px-6">
        <p class="text-gray-700 font-bold lg:text-2xl text-xl pb-7">Employer Details</p>
          <div class="lg:grid lg:grid-cols-3 flex flex-wrap">
            <div class="float-left">
                <p class="text-gray-800 font-light lg:text-xl text-base pr-3 ">
                    {{$employer_name}}
                </p>
                <p class="lg:text-base text-sm text-gray-500">Name</p>
             </div>
    
    
             <div class="">
                <p class="text-gray-800 font-light text-xl text-base">
                    {{$employer_pan}}
                </p>
                <p class="lg:text-base text-sm text-gray-500">PAN</p>
             </div>

             <div class="lg:float-right ml-8 lg:ml-0">
                <p class="text-gray-800 font-light text-xl text-base">
                    {{$employer_tan}}
                </p>
                <p class="lg:text-base text-sm text-gray-500">TAN</p>
             </div>
          </div>
       </div>
   </div>


   <div class="rounded-md shadow-xl border-b border-gray-400 mt-8  bg-white max-w-2xl mx-auto py-8 ">
    <div class="mb-6 lg:px-8 px-6">
     <p class="text-gray-700 font-bold lg:text-2xl text-xl ">Part B Summary</p>
    </div>
    <div class="border-b border-gray-300 "></div>
     
    <div class="border rounded-md border-gray-300 mx-6 mt-5">
        <div class="grid grid-cols-3 gap-5 px-4 py-5 ">
            <div class="col-span-2">
                <h1 class="lg:text-xl text-lg text-gray-800  ">A. Gross Total Income: </h1>
            </div>
            <div class="">
                <h1 class="lg:text-xl text-lg text-gray-800">{{$gross_total_income}}</h1>
            </div>
        </div>
        <div class="border-b border-gray-300 "></div>

        <div class="grid grid-cols-3 gap-5 px-4 py-5 ">
            <div class="col-span-2">
                <h1 class="lg:text-xl text-lg text-gray-800  ">B. Chapter VI A Deductions:</h1>
            </div>
            <div class="">
                <h1 class="lg:text-xl text-lg text-gray-800">{{$deductions}}</h1>
            </div>
        </div>
        <div class="border-b border-gray-300 "></div>
        <div class="grid grid-cols-3 gap-5 px-4 py-5 ">
            <div class="col-span-2">
                <h1 class="lg:text-xl text-lg text-gray-800  ">C. Total Taxable Income: </h1>
            </div>
            <div class="">
                <h1 class="lg:text-xl text-lg text-gray-800">{{$total_taxable_income}}</h1>
            </div>
        </div>
        <div class="border-b border-gray-300 "></div>
        <div class="grid grid-cols-3 gap-5 px-4 py-5 ">
            <div class="col-span-2">
                <h1 class="lg:text-xl text-lg text-gray-800  ">D. Total Tax Payable: </h1>
            </div>
            <div class="">
                <h1 class="lg:text-xl text-lg text-gray-800">{{$total_tax_payable}}</h1>
            </div>
        </div>
        <div class="border-b border-gray-300 "></div>
        <div class="grid grid-cols-3 gap-5 px-4 py-5 ">
            <div class="col-span-2">
                <h1 class="lg:text-xl text-lg text-gray-800  ">E. Total Taxes Deducted: </h1>
            </div>
            <div class="">
                <h1 class="lg:text-xl text-lg text-gray-800">{{ $total_taxes_deducted }}</h1>
            </div>
        </div>
        <div class="border-b border-gray-300 "></div>
    </div>
    <p class="text-gray-900 text-center pt-5 text-sm px-2 lg:px-0">Unsure about these details? Don't worry you can edit them later.</p>

</div>

</div>
