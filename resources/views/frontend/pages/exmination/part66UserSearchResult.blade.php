<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th style="min-width: 380px;width: 50%;">Registered Modules</th>
            <th>Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>
                    @foreach ($item->category_of_exam as $category)
                        {{$category}}
                    @endforeach
                    <br>
                    <ul>
                        @foreach ($item->application_for as $key=>$application)
                            <li>
                                {{$application}}
                                {{-- {{ $key < collect($item->application_for)->count()-1? ', ':''}} --}}
                            </li>
                        @endforeach
                    </ul>
                </td>
                <td>{{$item->created_at->format('d M, Y')}}</td>
                <td>
                    <a href="/part-66-module-examination/{{$item->slug}}/json" onclick="find_data({{$item->slug}})" class="btn btn-sm btn-outline-secondary">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
