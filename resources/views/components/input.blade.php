<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{@$value??old($name)}}" >
    <small class="text-danger">
        @error($name)
        {{$message}}  
      @enderror</small>
      {{-- {{$demo}} --}}
  </div>