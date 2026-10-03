@extends('layouts.app')

@section('title','Add Student')

@section('content')
     <div class="card">
          
        </div> 

        <form method="POST" action="{{ route('products.store') }}">
         @csrf

        <div class="mb-3">
            <lable class="form-label" for="name">Name</lable>
            <input type="text" name="name" class="form-control" value="{{  old('name') }}">
            @error('name')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
         <div class="mb-3">
            <lable class="form-label" for="price">Price</lable>
            <input type="number" name="price" class="form-control" value="{{  old('price') }}">
          @error('price')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
           <div class="mb-3">
            <lable class="form-label" for="stock">Stock</lable>
            <input type="number" name="stock" class="form-control" value="{{  old('stock') }}">
          @error('stock')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
            </div>

       <div class="mb-3">
         <lable class="form-label" for="brand">brand</lable>
         <select name="brand" class="form-select">
            <option value="">Select Brand</option>
            <option value="sunsilk" @selected(old('brand')== 'sunsilk')>SUNSILK</option>
            <option value="choco" @selected(old('brand')== 'choco')>CHOCO</option>
            <option value="dishwashing" @selected(old('brand')== 'dishwashing')>DISHWASHING</option>
            <option value="nescafe" @selected(old('brand')== 'nescafe')>NESCAFE</option>
            <option value="mint" @selected(old('brand')== 'mint')>MINT</option>
         </select>
          @error('brand')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
       </div>
         <div class="mb-3">
         <lable class="form-label" for="brand">package</lable>
         <select name="package" class="form-select">
            <option value="">Select Package</option>
            <option value="bottle" @selected(old('package')== 'bottle')>BOTTLE</option>
            <option value="plastic" @selected(old('package')== 'plastic')>PLASTIC</option>
            <option value="pack" @selected(old('package')== 'pack')>PACK</option>
            <option value="sachet" @selected(old('package')== 'sachet')>SACHET</option>
            <option value="stick" @selected(old('package')== 'stick')>STICK</option>
         </select>
          @error('package')
               <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Save</button>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>

     @endsection