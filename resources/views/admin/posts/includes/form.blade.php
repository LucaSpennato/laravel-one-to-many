<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
    value="{{ old('title',$post->title ?? '') }}">
    <div class="form-text">Insert post's title</div>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input name="author" type="text" class="form-control @error('author') is-invalid @enderror" id="author"
    value="{{ old('author',$post->author ?? '') }}">
    <div class="form-text">Insert post's author</div>
    @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="post_image" class="form-label">Image</label>
    <input name="post_image" type="text" class="form-control @error('post_image') is-invalid @enderror" id="post_image"
    value="{{ old('post_image',$post->post_image ?? '') }}">
    <div class="form-text">Insert post's image</div>
    @error('post_image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="post_content" class="form-label">Content</label>
    <textarea name="post_content" class="form-control @error('post_content') is-invalid @enderror" id="post_content" cols="30" rows="10">
        {{ old('post_content',$post->post_content ?? '') }}
    </textarea>
    <div class="form-text">Insert post's content</div>
    @error('post_content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="d-flex justify-content-center">
    <button class="btn btn-lg btn-primary" type="submit">
        Save
    </button>
</div>

