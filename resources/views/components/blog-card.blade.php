@props(['blog'])
<div class="cardWrapper">
  <div class="img-center">
    <img class="cardImg" src="/storage/{{$blog->thumbnail}}" alt="..." />
  </div>
  <p class="cardTitle font-weight-bold">{{$blog->title}}</p>
  <div class="card-subtitle mb-2 text-muted small text-center">
    <p class="text-danger">{{$blog->created_at->diffForHumans()}}</p>
  </div>
  <div class="btnCtrl">
    <a class="card-link btn btn-secondary"
    href="/blogs/{{$blog->slug}}">
    View Detail &raquo;
    </a>
  </div>
</div>
{{-- <div class="card">
    <img
        src="/storage/{{$blog->thumbnail}}"
        class="card-img-top"
        alt="..."
    />
    <div class="card-body">
        <h3 class="card-title">{{$blog->title}}</h3>
        <p class="fs-6 text-secondary">
            <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a>
            <span> -{{$blog->created_at->diffForHumans()}}</span>
        </p>
        <div class="tags my-3">
            <a href="/?category={{$blog->category->slug}}"><span
                    class="badge bg-primary">{{$blog->category->name}}</span></a>
        </div>
        <p class="card-text">
            {{$blog->intro}}
        </p>
        <a
            href="/blogs/{{$blog->slug}}"
            class="btn btn-primary"
        >Read More</a>
    </div>
</div> --}}
