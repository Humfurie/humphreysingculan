<div class="w-full h-full  p-2 bg-blue-600">
    <div class="flex flex-col bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table>
            <thead>
            <tr>
                <th>name</th>
                <th>slug</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($menus as $menu)
                    <td>{{$menu->name}}</td>
                    <td>{{$menu->slug}}</td>
                    <td>
                        <button>
                            Edit
                        </button>
                        <button>
                            Delete
                        </button>
                    </td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
</div>
