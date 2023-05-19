<x-top-layout>

  <section class="text-gray-600 body-font relative">

    <form method="post" action="{{ route('contacts.send') }}">
      @csrf
      <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us
          </h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr
            hexagon brooklyn asymmetrical gentrify.</p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                <p class="bg-gray-100 p-4 rounded font-semibold">{{ $inputs['name']}}</p>
                <input type="hidden" id="name" name="name" value="{{ $inputs['name']}}">
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                <p class="bg-gray-100 p-4 rounded font-semibold">{{ $inputs['title']}}</p>
                <input type="hidden" id="title" name="title" value="{{ $inputs['title'] }}">
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <p class="bg-gray-100 p-4 rounded font-semibold">{{ $inputs['email']}}</p>
                <input type="hidden" id="email" name="email" value="{{ $inputs['email']}}">
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="url" class="leading-7 text-sm text-gray-600">Web Site</label>
                <p class="bg-gray-100 p-4 rounded font-semibold">{{ $inputs['url']}}</p>
                <input type="hidden" id="url" name="url" value="{{ $inputs['url'] }}">
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label class="leading-7 text-sm text-gray-600">Gender</label>
                <p class="bg-gray-100 p-4 rounded font-semibold">{{ $inputs['gender']}}</p>
                <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="age" class="leading-7 text-sm text-gray-600">Age</label>
                <p class="bg-gray-100 p-4 rounded font-semibold">{{ $inputs['age']}}</p>
                <input type="hidden" name="age" value="{{ $inputs['age'] }}">
              </div>
            </div>

            <div class="p-2 w-full">
              <div class="relative">
                <label for="contact" class="leading-7 text-sm text-gray-600">Message</label><br />
                <textarea id="contact" name="contact" class="w-full border-none bg-gray-100 p-4 rounded font-semibold" readonly>{{ $inputs['contact']}}</textarea>
                <input type="hidden" name="contact" value="{{ $inputs['contact'] }}">
              </div>
            </div>

            {{-- <div class="p-2 w-full">
              <div class="relative">
                <input type="checkbox" id="caution" name="caution"> I agree
              </div>
            </div> --}}

            <div class="p-2 w-full flex justify-center gap-8">
              <button
                class="flex text-white bg-gray-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg" type="submit" name="back" value="back">Back</button>
              <button
                class="flex text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
            </div>

          </div>
        </div>
      </div>
    </form>

  </section>

</x-top-layout>
