<h1>一覧</h1>

<a href="/engineers/create">新規登録</a>

<table border="1">
    <tr>
        <th>名前</th>
        <th>メール</th>
        <th>スキル</th>
        <th>経験年数</th>
    </tr>

    @foreach($engineers as $e)
    <tr>
        <td>{{ $e->name }}</td>
        <td>{{ $e->email }}</td>
        <td>{{ $e->skill }}</td>
        <td>{{ $e->experience_years }}</td>
    </tr>
    @endforeach
</table>