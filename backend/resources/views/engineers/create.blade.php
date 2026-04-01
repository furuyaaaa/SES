<h1>エンジニア登録</h1>

<form action="{{ route('engineers.store') }}" method="POST">
    @csrf

    <div>
        名前：<input type="text" name="name">
    </div>

    <div>
        メール：<input type="email" name="email">
    </div>

    <div>
        スキル：<input type="text" name="skill">
    </div>

    <div>
        経験年数：<input type="number" name="experience_years">
    </div>

    <div>
        自己PR：<textarea name="self_pr"></textarea>
    </div>

    <button type="submit">登録</button>
</form>