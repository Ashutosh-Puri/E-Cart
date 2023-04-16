<div>
    
 <!-- My Account Start -->
 
 <div class="row">
    @if (session()->has('s-status'))
            <div class="alert my-2  alert-success align-items-center fw-bold">
                {{ session('s-status') }}
            </div>
        @endif
        @if (session()->has('d-status'))
            <div class="alert my-2  alert-danger  align-items-center fw-bold">
                {{ session('d-status') }}
            </div>
        @endif
    <div class="col-md-8   mx-auto">
            
        <div class="card m-2">
             <div class="card-header bg-custom">
                Account Details
             </div>
             <div class="card-body">
                
                    <div class="row">
                        <div class="col-md-6 my-1">
                            <label>First Name</label>
                            <input class="form-control" wire:model.defer="name" type="text"
                                placeholder="First Name" autocomplete="fullname" value="{{ $name }}">
                            @error('fullname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>E-mail</label>
                            <input class="form-control" wire:model.defer="email" type="text"
                                placeholder="E-mail" autocomplete="email" value="{{ $email }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>Mobile No</label>
                            <input class="form-control" wire:model.defer="mobile" type="text"
                                placeholder="Mobile No" autocomplete="mobile" value="{{ $mobile }}">
                            @error('mobile')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>Address</label>
                            <input class="form-control" wire:model.defer="address" type="text"
                                placeholder="Address" autocomplete="address" value="{{ $address }}">
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>Country</label>
                            <input class="form-control" wire:model.defer="country" type="text"
                                placeholder="Country" autocomplete="country" value="{{ $country }}">
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>City</label>
                            <input class="form-control" wire:model.defer="city" type="text"
                                placeholder="City" autocomplete="city" value="{{ $city }}">
                            @error('city')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>State</label>
                            <input class="form-control" wire:model.defer="state" type="text"
                                placeholder="State" autocomplete="state" value="{{ $state }}">
                            @error('state')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 my-1">
                            <label>PIN Code</label>
                            <input class="form-control" wire:model.defer="pincode" type="text"
                                placeholder="PIN Code" autocomplete="pincode" value="{{ $pincode }}">
                            @error('pincode')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 my-1">
                            <button  wire:click="accountdetails"class="btn btn-success float-end fw-bold">Save Changes</button>
                        </div>
                    </div>
               
             </div>
        </div>
    </div>
    <div class="col-md-4   mx-auto">
        <div class="card m-2">
            <div class="card-header bg-custom">
                Password Change
            </div>
            <div class="card-body">
              
                <div class="row">
                    <div class="col-md-12 py-2">
                        <label>Current Password</label>
                        <input class="form-control my-2" wire:model.defer="currentpassword" type="password" placeholder="Current Password">
                        @error('currentpassword')
                                <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 py-2">
                        <label>New Password</label>
                        <input class="form-control my-2" wire:model.defer="password" type="password" placeholder="New Password">
                        @error('password')
                                <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 py-2">
                        <label>Confirm Password</label>
                        <input class="form-control my-2" wire:model.defer="password_confirmation" type="password" placeholder="Confirm Password">
                    </div>
                    <div class="col-md-12 py-0">
                        <button wire:click="password" class="btn btn-success float-end fw-bold">Change Password</button>
                    </div>
                </div>
               
            </div>
       </div>
    </div>
</div>

<!-- My Account End -->
</div>
