
<div class="col-md-6 col-xl-4 mb-5">
    <a class="card post-preview lift h-100" href="{{ url('/post', $post->id) }}"
        ><img class="card-img-top" src="./img/pic1.png" alt="photo" />
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>

            <p class="card-text">

            </p>
        </div>
        <div class="card-footer">
            <div class="post-preview-meta">
                <img class="post-preview-meta-img" src="./img/users.png" height="50px" width="50px" />
                <div class="post-preview-meta-details">
                    <div class="post-preview-meta-details-name">Henry Iman</div>
                    <div class="post-preview-meta-details-date">Published at  &#xB7; {{$post->created_at->diffForHumans()}}</div>
                </div>
            </div>
        </div>
    </a>
</div>
