<table class="table table-sm table-striped table-bordered text-center table-inverse ">
    <thead class="thead-inverse">
        <tr>
            
            <th>Name</th>
            <th>Quanity</th> 
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($product->productColors as $i)
            <tr class="productcolortr">
                <td>
                    @if ($i->colors->name)
                        {{ $i->colors->name}}
                    @else
                        No Color Found
                    @endif
                   
                </td>
                <td>
                    <div class="input-group  w-100" >
                      
                            <div class=" input-group-prepend input-group-text w-25 form-control-sm" >{{ $i->color_quantity  }}</div>
                            <input  type="text"     wire:model="color_quantity.{{ $i->id }}" class="form-control-sm   w-50 ">
                            <button type="button" wire:click="update({{ $i->id }},{{ $product->id }})"   class='btn btn-success btn-sm w-25 form-control-sm'  >Update</button>
                        
                        
                        
                        @error('color_quantity') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </td>
                <td>
                    <button type="button"  wire:click="delete({{ $i->id }},{{ $product->id }})"   class='deleteproductcolorbtn btn btn-danger btn-sm'  >Delete</button>
                </td>
            </tr>
        @empty
         <td colspan="3">No color Selected</td>
        @endforelse
    </tbody>
</table>