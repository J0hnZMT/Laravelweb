@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create New Post
        </div>
        <div class="card-body">
            <form action="/post/store" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                        <input type="text" hidden value="{{Auth::user()->id}}" name="user_id"  class="form-control">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" name="title" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-file-upload form-file-multiple">
                          <label class="bmd-label-floating">Featured Image</label>
                          <input type="file" name="featured" class="inputFileHidden" id="featured">
                          <div class="input-group">
                            <input type="text"  class="form-control inputFileVisible" placeholder="Upload Image" rel="tooltip" title="Upload">
                              <span class="input-group-btn">
                                <button class="btn btn-fab btn-fab-mini btn-primary" type="button" rel="tooltip" title="Upload">
                                  <i class="material-icons">attach_file</i>
                                </button>
                              </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="bmd-label-floating">Select your Category here:</label>
                            <select name="category_id" id="category" class="form-control">
                                <!-- @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach -->
                            </select>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="tags">Select tags:</label>
                            <!-- @foreach($tags as $tag)
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label for="tag"><input type="checkbox" value="{{$tag->id}}" name="tags[]"> {{$tag->tag}}</label>
                                    </div>
                                </div>
                            @endforeach -->
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                            <label>Content</label>
                            <label class="bmd-label-floating"> </label>
                            <textarea class="form-control" cols="6" rows="6" name="content" id="content"></textarea>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Upload Post</button>
                        </div>
                      </div>
                    </div>
                    
                    <div class="clearfix"></div>
            </form>
        </div>
    </div>
@stop