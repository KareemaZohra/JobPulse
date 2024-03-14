@foreach($recentJobs as $recentJob)
    <div class="col-12 job-card">
        <div class="row">
            <div class="col-11">
                <h3><b>{{$recentJob->title}}</b></h3>

                <p>
                    @foreach($recentJob->tags as $tag)
                        <span class="badge bg-info text-dark">{{$tag}}</span>
                    @endforeach
                </p>

                <a href="/job/{{$recentJob->id}}" type="button" class="btn btn-secondary">View Details</a>
            </div>
            <div class="col-1">
                <button type="button" class="btn btn-info mb-3">{{$recentJob->salary}}</button>
                <form action="/job/{{$recentJob->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
<div class="paginate">{!! $recentJobs->links() !!}</div>
