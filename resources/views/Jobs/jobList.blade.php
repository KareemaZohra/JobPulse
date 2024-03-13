@foreach($recentJobs as $recentJob)
    <div class="col-12 job-card">
        <div class="row">
            <div class="col-8">
                <h3><b>{{$recentJob->title}}</b></h3>

                @foreach($recentJob->tags as $tag)
                    <span class="badge bg-info text-dark">{{$tag}}</span>
                @endforeach
            </div>
            <div class="col-4">
                <button type="button" class="btn btn-info">{{$recentJob->salary}}</button>
                <button type="button" class="btn btn-primary">Apply</button>
                <a href="/job/{{$recentJob->id}}" type="button" class="btn btn-secondary">View Details</a>
            </div>
        </div>
    </div>
@endforeach
<div class="paginate">{!! $recentJobs->links() !!}</div>
