@isset($info_company)
    @foreach ($info_company as $row)    
        <img src="img/{{$row->img_company}}" alt="Logo" {{ $attributes }}>
    @endforeach
@endisset