<tbody>
    @php
    $i = 1;
    @endphp
    @foreach ($item as $items)
    
    <tr @if ($i % 2 == 0) class="complete" 
    @endif>
        <td>
            {{$items->id}}
        </td>
        <td>
            {{$items->jenis}}
        </td>
        <td class="harga">
            {{$items->hargajual}}
        </td>
        <td class="harga">
            {{$items->hargabeli}}
        </td>
        <td>
            {{$items->stock}}
        </td>
        <td>
            <a href="{{route('refresh', $items->id)}}">refresh</a>
        </td>
        <td>
            <a href="{{route('del', $items->id)}}">hapus</a>
        </td>
    </tr>
    @php
        $i +=1;
    @endphp
    @endforeach
    
</tbody>