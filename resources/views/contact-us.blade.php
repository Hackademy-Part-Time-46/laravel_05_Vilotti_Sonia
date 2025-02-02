<x-layout>
  <form action="{{route('store')}}" method="POST">
    @csrf
    <div class="container">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{old('email')}}">
      </div>
      @error('email')
      {{$message}}
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="message" value="{{old('message')}}"></textarea>
      </div>
      @error('textarea')
      {{$message}}
      @enderror
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label">Password</label>
        </div>
        <div class="col-auto">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="password" value="{{old('password')}}">
        </div>
        @error('password')
        {{$message}}
        @enderror
        <div class="col-auto">
          <span id="passwordHelpInline" class="form-text">
            Must be 8-20 characters long.
          </span>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>
</x-layout>