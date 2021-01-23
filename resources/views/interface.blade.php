<ul style="display: inline-flex">
    <li style="margin-right: 20px;  list-style: none">
        <a style=" text-decoration: none;" href="interface">Interface</a>
    </li>
    <li style="margin-right: 20px;  list-style: none">
        <a style=" text-decoration: none;" href="abstract">Abstract</a>
    </li>
    <li style="margin-right: 20px;  list-style: none">
        <a style=" text-decoration: none;" href="trait">Trait</a>
    </li>
    <li style="margin-right: 20px;  list-style: none">
        <a style=" text-decoration: none;" href="abstract-auto-load">Auto load Abstract</a>
    </li>
</ul>
<h2>
    this is Interface Page.
</h2>
@if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
