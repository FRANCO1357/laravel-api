@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif


@if ($post->exists )
<form action="{{route('admin.posts.update', $post)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@else
<form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
@endif



    @csrf
    <div class="row">
        <div class="col-8">
            <div class="form-group">
                <label for="title">Titolo </label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}" required minlength="5" maxlength="50">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control @error('categorry_id') is_invalid @enderror" id="category_id" name="category_id">
                  <option value="">Nessuna categoria</option>
                  @foreach ($categories as $category)
                        <option
                        @if (old('category_id', $post->category_id) == $category->id)
                            selected
                        @endif
                        value="{{ $category->id }}">{{ $category->label }}
                        </option>
                  @endforeach
                </select>
              </div>
        </div>

        @if (count($tags))
        <div class="col-12 d-flex mt-3">
            <h4 class="mr-4">Tags</h4>
            @foreach ($tags as $tag)
                <div class="form-group form-check mr-4">
                    <input type="checkbox" class="form-check-input" id="tag-{{$tag->label}}" name="tags[]" value="{{$tag->id}}" @if(in_Array($tag->id, old('tags', $db_tags ?? []))) checked @endif>
                    <label class="form-check-label" for="tag-{{$tag->label}}">{{$tag->label}}</label>
                </div> 
            @endforeach
        </div>
        @endif

        <div class="col-12">
            <div class="form-group">
                <label for="image">Contenuto</label>
                <textarea class="form-control" id="content" name="content">{{old('content', $post->content)}}</textarea>
            </div>
        </div>
        <div class="col-11">
            <div class="form-group">
                <label for="image">Immagine</label><br>
                <input type="file" id="image-field" name="image">
            </div>
        </div>
        <div class="col-1">
            <img id="preview" class="img-fluid" src="{{$post->image ? asset('storage/' . $post->image) : 'https://media.istockphoto.com/vectors/thumbnail-image-vector-graphic-vector-id1147544807?k=20&m=1147544807&s=612x612&w=0&h=pBhz1dkwsCMq37Udtp9sfxbjaMl27JUapoyYpQm0anc='}}" alt="{{$post->image ? $post->slug : ''}}">
        </div>
    </div>
<hr>
<footer class="d-flex justify-content-between">
    <a class="btn btn-secondary" href="{{route('admin.posts.index')}}">
        <i class="fa-solid fa-rotate-left mr-2"></i>Indietro
    </a>
    <button class="btn btn-success" type="submit">
        <i class="fa-solid fa-floppy-disk mr-2"></i>Salva
    </button>
</footer>
</form> 