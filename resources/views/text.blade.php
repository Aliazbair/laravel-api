<h1 class="text-red-400">{{$heading}}</h1>
@unless (count($data)===0)
      @foreach ($data as $item)
        <a href="/single/{{$item['id']}}">
            <h2>{{$item['title']}}</h2>
        
        </a>
          
      @endforeach
 @else
 <p>wops! not data fount</p>
    
@endunless