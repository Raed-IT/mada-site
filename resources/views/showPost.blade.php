@extends('layouts.layout')
@section('content')

    <img src="{{$post->image}}"
         style="margin-top: 150px; background-position: center;object-fit: contain;  height: 100vw ;max-height: 80vh;width: 100%">

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2>{{$post->title}}</h2>

                    <p>{{$post->body}}</p>


                    <!-- END comment-list -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="comment-form-wrap pt-5">

                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="{{route('comments.store',['id'=>2])}}" method="POST" class="p-5 bg-light">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email"  value="{{old('email')}}" class="form-control" id="email" name="email">
                                @error('email')
                                <span style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="comment">Message</label>
                                <textarea name="comment" id="comment" value="{{old('comment')}}"  cols="30" rows="10"
                                          class="form-control"></textarea>
                                @error('comment')
                                <span style="color: red" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>


            </div>

        </div>

    </section>

@endsection
