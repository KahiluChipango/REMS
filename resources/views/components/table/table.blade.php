<table class="bg-zinc-400 min-w-full divide-y divide-gray-200 ">
    <thead class="bg-gray-50">
    <tr>
        {{$header}}
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        {{$slot}}
    </tbody>

   {{-- <tfoot class="bg-gray-50">
    <tr>
        {{$footer}}
    </tr>
    </tfoot>--}}
</table>
