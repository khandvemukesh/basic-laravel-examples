@include('layout.theme-pages.header')


<div class="container h-100" style="margin-top:130px;">
    
<form action="{{route('addUser')}}" method="POST" class="bg-grey p-4 text-white" >
    @csrf
    <h3> Add New Information</h3>
  <div class="mb-3 mt-3">
    <label for="username" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Username" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" placeholder="Enter Your Age" name="age">
  </div>
  <div class="mb-3">
  <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" placeholder="Enter Your City" name="city">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@include('layout.theme-pages.header')
