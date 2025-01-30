    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student Form</title>
        <link rel="stylesheet" href="\bootstrap\css\bootstrap.css">
    </head>
    <body>
        <h1 style="text-align: center">Student Form</h1>

      
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <form action="{{ route('addForm') }}" method="POST">
                    @csrf
                  
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error )
                            <li> {{ $error }} </li>   
                        @endforeach
                    </div>
                    @endif --}}
                    <div class="col-8">
                    <div class="mb-3">
                        <label class="label-form">Name:</label>
                        <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror"  name="username">
                       <span class="text-danger">
                        @error('username')
                        {{ $message }}
                    @enderror
                       </span>
                    </div>
                    <div class="mb-3">
                        <label class="label-form">Email:</label>
                        <input type="email" value="{{ old('useremail') }}" class="form-control @error('useremail') is-invalid
                        @enderror" name="useremail">
                        <span class="text-danger">
                            @error('useremail')
                            {{ $message }}
                        @enderror
                           </span>
                    </div>
                    <div class="mb-3">
                        <label class="label-form">Passowrd:</label>
                        <input type="password" value="{{ old('userpass') }}" class="form-control @error('userpass') is-invalid
                        @enderror" name="userpass">
                        <span class="text-danger">
                            @error('userpass')
                            {{ $message }}
                        @enderror
                           </span>
                    </div>
                    <div class="mb-3">
                        <label class="label-form">Age:</label>
                        <input type="number" value="{{ old('userage') }}" class="form-control @error('userage') is-invalid    
                        @enderror" name="userage">
                        <span class="text-danger">
                            @error('userage')
                            {{ $message }}
                        @enderror
                           </span>
                    </div>
                    <div class="mb-3">
                        <label class="label-form">City:</label>
                        <select name="usercity" id="" class="form-control">
                            <option value="">Select Your City</option>
                            <option value="karachi">Karachi</option>
                            <option value="hyderabad">Hyderabad</option>
                            <option value="badin">Badin</option>
                            <option value="queta">Queta</option>
                        </select>
                        <span class="text-danger">
                            @error('usercity')
                            {{ $message }}
                        @enderror
                           </span>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
                <div class="col-2"></div>
            </div>
        </div>
        <script src="\bootstrap\js\bootstrap.js"></script>
    </body>
    </html>