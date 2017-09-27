<div class="col-lg-3">
    <div class="allCategories">
        <h2 style="text-align: center">Categories</h2>
        <br>
        <ul style="list-style: none;">
        @foreach($categories as $category)
            <li style="font-size: 25px">
                <a href="{{ route('categoryById', ['id'=> $category->id]) }}" class="card-title">{{ $category->name }}</a>
            </li>
                <hr>
        @endforeach
        </ul>
    </div>
</div>

